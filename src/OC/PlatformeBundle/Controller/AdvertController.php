<?php

// src/OC/PlatformeBundle/Controller/AdvertController.php

namespace OC\PlatformeBundle\Controller;

use OC\PlatformeBundle\Entity\Admin;
use OC\PlatformeBundle\Entity\Advert;
use OC\PlatformeBundle\Entity\Machines;
use OC\PlatformeBundle\Entity\Salles;
use OC\PlatformeBundle\Entity\Incidents;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AdvertController extends Controller
{
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository('OCPlatformeBundle:Machines');

        $machines = $repository->findAll();

        $repository = $this->getDoctrine()
            ->getRepository('OCPlatformeBundle:Salles');

        $salles = $repository->findAll();

       if ($request->isMethod("POST")) {
            $admin = $request->request->get('pseudo');
            $admin = $request->request->get('mdp');

            $repository = $this->getDoctrine()->getRepository('OCPlatformeBundle:Admin');

            //- REQUETE UNIQUE
            $admin = $repository->findOneBy(
                array('pseudo' => $admin, 'mdp' => $admin)
            );

            if ($admin != null) {

                //- redirect vers profile avec ID
                return $this->redirectToRoute('oc_platforme_view', array(
                    'id' => $admin->getId(),
                    'machines' => $machines,
                    'salles' => $salles
                ));

            } else {

                return $this->render('OCPlatformeBundle:Advert:index.html.twig', array(
                    'machines' => $machines,
                    'salles' => $salles
                ));

            }

        } else {

            return $this->render('OCPlatformeBundle:Advert:index.html.twig', array(
                'machines' => $machines,
                'salles' => $salles
            ));

        }

    }
    

    public function viewAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('OCPlatformeBundle:Machines');

        $machines = $repository->findAll();

        $repository = $this->getDoctrine()
            ->getRepository('OCPlatformeBundle:Salles');

        $salles = $repository->findAll();

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('OCPlatformeBundle:Advert:view.html.twig', array(
            'machines' => $machines,
            'salles' => $salles
        ));
    }

    public function addAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $machines = new Machines();
        $incidents = new Incidents();
        $machines->setDateMachine(new \DateTime('today'));
        $incidents->setDate(new \Datetime('today'));

        $form = $this->createFormBuilder($machines)
            ->add('ipMachine', TextType::class)
            ->add('etatMachine', ChoiceType::class, array('choices' => array('Allumée' => 'Allumée', 'Eteinte' => 'Eteinte')))
            ->add('authorMachine', TextType::class)
            ->add('colorMachine', ChoiceType::class, array('choices' => array('rouge' => '#c0392b', 'bleu' => '#2980b9', 'vert' => '#27ae60', 'violet' => '#8e44ad', 'noir' => '#2c3e50', 'jaune' => '#f1c40f')))
            ->add('numsalleMachine', IntegerType::class)
            ->add('save', SubmitType::class, array('label' => 'Créer une machine !'))
            ->getForm();
        $form->handleRequest($request);

        $incidents->setType('Machine');
        $incidents->setModif("Créée");
        $incidents->setIcon("fa fa-plus");

        if ($form->isSubmitted() && $form->isValid()) {

            $ipMachine = $form['ipMachine']->getData();
            $incidents->setIdentifiant($ipMachine);

            $em = $this->getDoctrine()->getManager();
            $em->persist($machines);
            $em->persist($incidents);
            $em->flush();
            return $this->redirectToRoute('oc_platforme_view');
        }

        return $this->render('OCPlatformeBundle:Advert:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function addsalleAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $salles = new Salles();
        $incidents = new Incidents();
        $salles->setDateSalle(new \DateTime('today'));
        $incidents->setDate(new \Datetime('today'));

        $form = $this->createFormBuilder($salles)
            ->add('numSalle', IntegerType::class)
            ->add('nomSalle', TextType::class)
            ->add('colorSalle', ChoiceType::class, array('choices' => array('rouge' => '#c0392b', 'bleu' => '#2980b9', 'vert' => '#27ae60', 'violet' => '#8e44ad', 'noir' => '#2c3e50', 'jaune' => '#f1c40f')))
            ->add('save', SubmitType::class, array('label' => 'Créer une salle !'))
            ->getForm();
        $form->handleRequest($request);

        $incidents->setType('Salle');
        $incidents->setModif("Créée");
        $incidents->setIcon("fa fa-plus");

        if ($form->isSubmitted() && $form->isValid()) {

            $nomSalle = $form['nomSalle']->getData();
            $incidents->setIdentifiant($nomSalle);

            $em = $this->getDoctrine()->getManager();
            $em->persist($salles);
            $em->persist($incidents);
            $em->flush();
            return $this->redirectToRoute('oc_platforme_view');
        }

        return $this->render('OCPlatformeBundle:Advert:addsalle.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        $machines = $this->getDoctrine()
            ->getRepository('OCPlatformeBundle:Machines')
            ->find($id);

        $incidents = new Incidents();
        $incidents->setDate(new \Datetime('today'));

        $machines->setIpMachine($machines->getIpMachine());
        $machines->setEtatMachine($machines->getEtatMachine());
        $machines->setAuthorMachine($machines->getAuthorMachine());
        $machines->setColorMachine($machines->getColorMachine());
        $machines->setNumsalleMachine($machines->getNumsalleMachine());

        $form = $this->createFormBuilder($machines)
            ->add('ipMachine', TextType::class)
            ->add('etatMachine', ChoiceType::class, array('choices' => array('Allumée' => 'Allumée', 'Eteinte' => 'Eteinte')))
            ->add('authorMachine', TextType::class)
            ->add('colorMachine', ChoiceType::class, array('choices' => array('rouge' => '#c0392b', 'bleu' => '#2980b9', 'vert' => '#27ae60', 'violet' => '#8e44ad', 'noir' => '#2c3e50', 'jaune' => '#f1c40f')))
            ->add('numsalleMachine', IntegerType::class)
            ->add('save', SubmitType::class, array('label' => 'Modifier cette machine !'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $incidents->setType('Machine');
            $incidents->setModif("Modifiée");
            $incidents->setIcon("fa fa-pencil-square-o");

            $ipMachine = $form['ipMachine']->getData();
            $incidents->setIdentifiant($ipMachine);

            $em = $this->getDoctrine()->getManager();
            $machines = $em->getRepository('OCPlatformeBundle:Machines')->find($id);

            $machines->setIpMachine($machines->getIpMachine());
            $machines->setEtatMachine($machines->getEtatMachine());
            $machines->setAuthorMachine($machines->getAuthorMachine());
            $machines->setColorMachine($machines->getColorMachine());
            $machines->setNumsalleMachine($machines->getNumsalleMachine());
            $machines->setDateMachine($machines->getDateMachine(new \DateTime('today')));

            $em->persist($incidents);

            $em->flush();
            return $this->redirectToRoute('oc_platforme_modifmachine');
        }

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('OCPlatformeBundle:Advert:edit.html.twig', array(
            'machines' => $machines,
            'form' => $form->createView()
        ));
    }

    public function editsalleAction($id, Request $request)
    {
        $salles = $this->getDoctrine()
            ->getRepository('OCPlatformeBundle:Salles')
            ->find($id);

        $incidents = new Incidents();
        $incidents->setDate(new \Datetime('today'));

        $salles->setNomSalle($salles->getNomSalle());
        $salles->setNumSalle($salles->getNumSalle());
        $salles->setDateSalle($salles->getDateSalle());
        $salles->setColorSalle($salles->getColorSalle());


        $form = $this->createFormBuilder($salles)
            ->add('nomSalle', TextType::class)
            ->add('numSalle', IntegerType::class)
            ->add('colorSalle', ChoiceType::class, array('choices' => array('rouge' => '#c0392b', 'bleu' => '#2980b9', 'vert' => '#27ae60', 'violet' => '#8e44ad', 'noir' => '#2c3e50', 'jaune' => '#f1c40f')))
            ->add('save', SubmitType::class, array('label' => 'Modifier cette salle !'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $incidents->setType('Salle');
            $incidents->setModif("Modifiée");
            $incidents->setIcon("fa fa-pencil-square-o");

            $nomSalle = $form['nomSalle']->getData();
            $incidents->setIdentifiant($nomSalle);

            $em = $this->getDoctrine()->getManager();
            $salles = $em->getRepository('OCPlatformeBundle:Salles')->find($id);

            $salles->setNomSalle($salles->getNomSalle());
            $salles->setNumSalle($salles->getNumSalle());
            $salles->setColorSalle($salles->getColorSalle());
            $salles->setDateSalle($salles->getDateSalle(new \DateTime('today')));

            $em->persist($incidents);

            $em->flush();

            return $this->redirectToRoute('oc_platforme_modifsalle');
        }

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('OCPlatformeBundle:Advert:editsalle.html.twig', array(
            'salles' => $salles,
            'form' => $form->createView()
        ));
    }

    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $machines = $em->getRepository('OCPlatformeBundle:Machines')->find($id);

        $form = $this->createFormBuilder($machines)
            ->add('ipMachine', TextType::class)
            ->add('etatMachine', ChoiceType::class, array('choices' => array('Allumée' => 'Allumée', 'Eteinte' => 'Eteinte')))
            ->add('authorMachine', TextType::class)
            ->add('numsalleMachine', IntegerType::class)
            ->add('save', SubmitType::class, array('label' => 'Créer une machine !'))
            ->getForm();

        $form->handleRequest($request);

        $incidents = new Incidents();

        $ipMachine = $form['ipMachine']->getData();
        $incidents->setIdentifiant($ipMachine);
        $incidents->setDate(new \Datetime('today'));
        $incidents->setType('Machine');
        $incidents->setModif("Supprimée");
        $incidents->setIcon("fa fa-ban");


        $em->persist($incidents);
        $em->remove($machines);
        $em->flush();

        return $this->redirectToRoute('oc_platforme_modifmachine');
    }

    public function deletesalleAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $salles = $em->getRepository('OCPlatformeBundle:Salles')->find($id);

        $form = $this->createFormBuilder($salles)
            ->add('nomSalle', TextType::class)
            ->add('numSalle', IntegerType::class)
            ->add('colorSalle', ChoiceType::class, array('choices' => array('rouge' => '#c0392b', 'bleu' => '#2980b9', 'vert' => '#27ae60', 'violet' => '#8e44ad', 'noir' => '#2c3e50', 'jaune' => '#f1c40f')))
            ->add('save', SubmitType::class, array('label' => 'Modifier cette salle !'))
            ->getForm();

        $form->handleRequest($request);

        $incidents = new Incidents();

        $nomSalle = $form['nomSalle']->getData();
        $incidents->setIdentifiant($nomSalle);
        $incidents->setDate(new \Datetime('today'));
        $incidents->setType('Machine');
        $incidents->setModif("Supprimée");
        $incidents->setIcon("fa fa-ban");


        $em->persist($incidents);
        $em->remove($salles);
        $em->flush();

        return $this->redirectToRoute('oc_platforme_modifsalle');
    }


    public function modifmachineAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('OCPlatformeBundle:Machines');

        $machines = $repository->findAll();

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('OCPlatformeBundle:Advert:modifmachine.html.twig', array(
            'machines' => $machines
        ));

    }

    public function modifsalleAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('OCPlatformeBundle:Salles');

        $salles = $repository->findAll();

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('OCPlatformeBundle:Advert:modifsalle.html.twig', array(
            'salles' => $salles
        ));
    }



    public function menuAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('OCPlatformeBundle:Incidents');

        $incidents = $repository->findBy(array(), array('id'=> 'desc'));

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('OCPlatformeBundle:Advert:menu.html.twig', array(
            'incidents' => $incidents
        ));
    }

    public function pingAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository('OCPlatformeBundle:Machines');

        $machines = $repository->findAll();

        $form = $this->createFormBuilder($machines)
            ->add('ipMachine', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Tester le ping !'))
            ->getForm();

        $form->handleRequest($request);

        $iptest = $form['ipMachine']->getData();

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('OCPlatformeBundle:Advert:ping.html.twig', array(
            'form' => $form->createView(),
            'machines' => $machines,
            'iptest' => $iptest
        ));
    }

    public function ping2Action(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository('OCPlatformeBundle:Machines');

        $machines = $repository->findAll();

        $form = $this->createFormBuilder($machines)
            ->add('ipMachine', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Tester le ping !'))
            ->getForm();

        $form->handleRequest($request);

        $iptest = $form['ipMachine']->getData();

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('OCPlatformeBundle:Advert:ping2.html.twig', array(
            'form' => $form->createView(),
            'machines' => $machines,
            'iptest' => $iptest
        ));
    }

}
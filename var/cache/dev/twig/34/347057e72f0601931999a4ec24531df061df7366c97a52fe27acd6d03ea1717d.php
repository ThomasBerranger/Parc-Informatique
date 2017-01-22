<?php

/* OCPlatformeBundle:Advert:addsalle.html.twig */
class __TwigTemplate_815215b0273ca8909e19c2a9ebde6680963d857d579b4db73897891be3c39ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:addsalle.html.twig", 3);
        $this->blocks = array(
            'link' => array($this, 'block_link'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0416c8bce30c4b236736a2ce6b01a30a0e5813d2689efc43ed86d3ebb29947bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0416c8bce30c4b236736a2ce6b01a30a0e5813d2689efc43ed86d3ebb29947bc->enter($__internal_0416c8bce30c4b236736a2ce6b01a30a0e5813d2689efc43ed86d3ebb29947bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:addsalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0416c8bce30c4b236736a2ce6b01a30a0e5813d2689efc43ed86d3ebb29947bc->leave($__internal_0416c8bce30c4b236736a2ce6b01a30a0e5813d2689efc43ed86d3ebb29947bc_prof);

    }

    // line 5
    public function block_link($context, array $blocks = array())
    {
        $__internal_eb8e7755b45beb40f8330e6f96076f2a6808ae417812515a4880a901e65a9a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8e7755b45beb40f8330e6f96076f2a6808ae417812515a4880a901e65a9a99->enter($__internal_eb8e7755b45beb40f8330e6f96076f2a6808ae417812515a4880a901e65a9a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:addsalle.html.twig"));

        // line 6
        echo "    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_add");
        echo "\">Créer une machine</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_addsalle");
        echo "\">Créer une salle</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifmachine");
        echo "\">Modifier/Supprimer une machine</a></li>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifsalle");
        echo "\">Modifier/Supprimer une salle</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_ping");
        echo "\">Tester la connection d'une salle</a></li>
    </ul>
";
        
        $__internal_eb8e7755b45beb40f8330e6f96076f2a6808ae417812515a4880a901e65a9a99->leave($__internal_eb8e7755b45beb40f8330e6f96076f2a6808ae417812515a4880a901e65a9a99_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1429c6367255812aaaa1590fc706084202b2813808fb598eb908d616d9e76e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1429c6367255812aaaa1590fc706084202b2813808fb598eb908d616d9e76e1->enter($__internal_c1429c6367255812aaaa1590fc706084202b2813808fb598eb908d616d9e76e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:addsalle.html.twig"));

        // line 18
        echo "
    <h2>Créer une salle</h2>

    ";
        // line 21
        echo twig_include($this->env, $context, "OCPlatformeBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention: cette salle sera ajoutée directement sur la page d'accueil après validation du formulaire !
    </p>
    <p>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

";
        
        $__internal_c1429c6367255812aaaa1590fc706084202b2813808fb598eb908d616d9e76e1->leave($__internal_c1429c6367255812aaaa1590fc706084202b2813808fb598eb908d616d9e76e1_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:addsalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  86 => 21,  81 => 18,  75 => 17,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformeBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformeBundle::layout.html.twig\" %}

{% block link %}
    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"{{ path('oc_platforme_view') }}\">Accueil</a></li>
        <li><a href=\"{{ path('oc_platforme_add') }}\">Créer une machine</a></li>
        <li><a href=\"{{ path('oc_platforme_addsalle') }}\">Créer une salle</a></li>
        <li><a href=\"{{ path('oc_platforme_modifmachine') }}\">Modifier/Supprimer une machine</a></li>
        <li><a href=\"{{ path('oc_platforme_modifsalle') }}\">Modifier/Supprimer une salle</a></li>
        <li><a href=\"{{ path('oc_platforme_ping') }}\">Tester la connection d'une salle</a></li>
    </ul>
{% endblock %}

{% block body %}

    <h2>Créer une salle</h2>

    {{ include(\"OCPlatformeBundle:Advert:form.html.twig\") }}

    <p>
        Attention: cette salle sera ajoutée directement sur la page d'accueil après validation du formulaire !
    </p>
    <p>
        <a href=\"{{ path('oc_platforme_view') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

{% endblock %}", "OCPlatformeBundle:Advert:addsalle.html.twig", "C:\\wamp64\\www\\Opmk\\src\\OC\\PlatformeBundle/Resources/views/Advert/addsalle.html.twig");
    }
}

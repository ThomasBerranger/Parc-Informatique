<?php

/* OCPlatformeBundle:Advert:addsalle.html.twig */
class __TwigTemplate_95ba5ffd03da75af391cc06c2f06efcd5da08ccbd8acd4f8834fdec5f9c53e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:addsalle.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_173f67f92de6d924ac519de1a20324a3bcd099dd260df654160d45ba81ab3f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173f67f92de6d924ac519de1a20324a3bcd099dd260df654160d45ba81ab3f4a->enter($__internal_173f67f92de6d924ac519de1a20324a3bcd099dd260df654160d45ba81ab3f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:addsalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_173f67f92de6d924ac519de1a20324a3bcd099dd260df654160d45ba81ab3f4a->leave($__internal_173f67f92de6d924ac519de1a20324a3bcd099dd260df654160d45ba81ab3f4a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54e8780155148f0096238ad3d6eff71edb1f9e97a37bd8cd9e798b6973b5c0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e8780155148f0096238ad3d6eff71edb1f9e97a37bd8cd9e798b6973b5c0a3->enter($__internal_54e8780155148f0096238ad3d6eff71edb1f9e97a37bd8cd9e798b6973b5c0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:addsalle.html.twig"));

        // line 6
        echo "
    <h2>Créer une salle</h2>

    ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformeBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention: cette salle sera ajoutée directement sur la page d'accueil après validation du formulaire !
    </p>
    <p>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

";
        
        $__internal_54e8780155148f0096238ad3d6eff71edb1f9e97a37bd8cd9e798b6973b5c0a3->leave($__internal_54e8780155148f0096238ad3d6eff71edb1f9e97a37bd8cd9e798b6973b5c0a3_prof);

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
        return array (  54 => 15,  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
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

{% endblock %}", "OCPlatformeBundle:Advert:addsalle.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\src\\OC\\PlatformeBundle/Resources/views/Advert/addsalle.html.twig");
    }
}

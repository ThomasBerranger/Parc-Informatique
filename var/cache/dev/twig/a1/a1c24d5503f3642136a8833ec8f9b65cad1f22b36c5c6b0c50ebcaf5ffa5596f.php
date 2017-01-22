<?php

/* OCPlatformeBundle:Advert:addsalle.html.twig */
class __TwigTemplate_ce4b8a74eb900f17b9e9bac83d834d7fc4ee12cea9671f5855121fbd445c82a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:addsalle.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bouton' => array($this, 'block_bouton'),
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
        $__internal_898fde3df723d093fa62f95ded42e076fffe7b9341a928a720d0404924743308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898fde3df723d093fa62f95ded42e076fffe7b9341a928a720d0404924743308->enter($__internal_898fde3df723d093fa62f95ded42e076fffe7b9341a928a720d0404924743308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:addsalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_898fde3df723d093fa62f95ded42e076fffe7b9341a928a720d0404924743308->leave($__internal_898fde3df723d093fa62f95ded42e076fffe7b9341a928a720d0404924743308_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_091b745553de1e677c9b7ae405b56b30e0b228f754191f55922d95f2e83363c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091b745553de1e677c9b7ae405b56b30e0b228f754191f55922d95f2e83363c0->enter($__internal_091b745553de1e677c9b7ae405b56b30e0b228f754191f55922d95f2e83363c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:addsalle.html.twig"));

        // line 6
        echo "    Créer une salle - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_091b745553de1e677c9b7ae405b56b30e0b228f754191f55922d95f2e83363c0->leave($__internal_091b745553de1e677c9b7ae405b56b30e0b228f754191f55922d95f2e83363c0_prof);

    }

    // line 9
    public function block_bouton($context, array $blocks = array())
    {
        $__internal_41e2af96df6b1a077982c27f8d0a4b8d7fe97bb112087a0175fb4f9b492b163b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e2af96df6b1a077982c27f8d0a4b8d7fe97bb112087a0175fb4f9b492b163b->enter($__internal_41e2af96df6b1a077982c27f8d0a4b8d7fe97bb112087a0175fb4f9b492b163b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:addsalle.html.twig"));

        // line 10
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_home");
        echo "\" class=\"btn btn-warning\">Se déconnecter</a>
";
        
        $__internal_41e2af96df6b1a077982c27f8d0a4b8d7fe97bb112087a0175fb4f9b492b163b->leave($__internal_41e2af96df6b1a077982c27f8d0a4b8d7fe97bb112087a0175fb4f9b492b163b_prof);

    }

    // line 13
    public function block_link($context, array $blocks = array())
    {
        $__internal_c591cc6490cc44e97e4f62dbc1d7a80c4fa499670bcc0bdf6c21e006b4c7f037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c591cc6490cc44e97e4f62dbc1d7a80c4fa499670bcc0bdf6c21e006b4c7f037->enter($__internal_c591cc6490cc44e97e4f62dbc1d7a80c4fa499670bcc0bdf6c21e006b4c7f037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:addsalle.html.twig"));

        // line 14
        echo "    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_add");
        echo "\">Créer une machine</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_addsalle");
        echo "\">Créer une salle</a></li>
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifmachine");
        echo "\">Modifier/Supprimer une machine</a></li>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifsalle");
        echo "\">Modifier/Supprimer une salle</a></li>
        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_ping");
        echo "\">Tester la connexion d'une salle</a></li>
    </ul>
";
        
        $__internal_c591cc6490cc44e97e4f62dbc1d7a80c4fa499670bcc0bdf6c21e006b4c7f037->leave($__internal_c591cc6490cc44e97e4f62dbc1d7a80c4fa499670bcc0bdf6c21e006b4c7f037_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_943c2309ec237c9236d977824f54e6f20116b772a70389eb011cbea6d79a4e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943c2309ec237c9236d977824f54e6f20116b772a70389eb011cbea6d79a4e12->enter($__internal_943c2309ec237c9236d977824f54e6f20116b772a70389eb011cbea6d79a4e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:addsalle.html.twig"));

        // line 26
        echo "
    <h2>Créer une salle</h2>

    ";
        // line 29
        echo twig_include($this->env, $context, "OCPlatformeBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention: cette salle sera ajoutée directement sur la page d'accueil après validation du formulaire !
    </p>
    <p>
        <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

";
        
        $__internal_943c2309ec237c9236d977824f54e6f20116b772a70389eb011cbea6d79a4e12->leave($__internal_943c2309ec237c9236d977824f54e6f20116b772a70389eb011cbea6d79a4e12_prof);

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
        return array (  129 => 35,  120 => 29,  115 => 26,  109 => 25,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 14,  69 => 13,  59 => 10,  53 => 9,  43 => 6,  37 => 5,  11 => 3,);
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

{% block title %}
    Créer une salle - {{ parent() }}
{% endblock %}

{% block bouton %}
    <a href=\"{{ path('oc_platforme_home') }}\" class=\"btn btn-warning\">Se déconnecter</a>
{% endblock %}

{% block link %}
    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"{{ path('oc_platforme_view') }}\">Accueil</a></li>
        <li><a href=\"{{ path('oc_platforme_add') }}\">Créer une machine</a></li>
        <li><a href=\"{{ path('oc_platforme_addsalle') }}\">Créer une salle</a></li>
        <li><a href=\"{{ path('oc_platforme_modifmachine') }}\">Modifier/Supprimer une machine</a></li>
        <li><a href=\"{{ path('oc_platforme_modifsalle') }}\">Modifier/Supprimer une salle</a></li>
        <li><a href=\"{{ path('oc_platforme_ping') }}\">Tester la connexion d'une salle</a></li>
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

{% endblock %}", "OCPlatformeBundle:Advert:addsalle.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/Advert/addsalle.html.twig");
    }
}

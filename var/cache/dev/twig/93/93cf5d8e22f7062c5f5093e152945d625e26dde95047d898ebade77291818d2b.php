<?php

/* OCPlatformeBundle:Advert:add.html.twig */
class __TwigTemplate_0eae6ac47a799dc8da2fe6c94b6690b07fcd4897b0bd4c3bad78dc99b8eea38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:add.html.twig", 3);
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
        $__internal_c48cefb05458e075102cca22489c52836ce78a69be820580b2cf12f9a2bc74d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48cefb05458e075102cca22489c52836ce78a69be820580b2cf12f9a2bc74d9->enter($__internal_c48cefb05458e075102cca22489c52836ce78a69be820580b2cf12f9a2bc74d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c48cefb05458e075102cca22489c52836ce78a69be820580b2cf12f9a2bc74d9->leave($__internal_c48cefb05458e075102cca22489c52836ce78a69be820580b2cf12f9a2bc74d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f6ed8c2b73d99d3b07e6e9adaa18a5e7ad6cb5e8514f997fb3dd9a796341446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6ed8c2b73d99d3b07e6e9adaa18a5e7ad6cb5e8514f997fb3dd9a796341446->enter($__internal_1f6ed8c2b73d99d3b07e6e9adaa18a5e7ad6cb5e8514f997fb3dd9a796341446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:add.html.twig"));

        // line 6
        echo "    Créer une machine - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1f6ed8c2b73d99d3b07e6e9adaa18a5e7ad6cb5e8514f997fb3dd9a796341446->leave($__internal_1f6ed8c2b73d99d3b07e6e9adaa18a5e7ad6cb5e8514f997fb3dd9a796341446_prof);

    }

    // line 9
    public function block_bouton($context, array $blocks = array())
    {
        $__internal_01afa833303f294428bab41495b4344f035a5083eba95b1d2bac9c69e4721088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01afa833303f294428bab41495b4344f035a5083eba95b1d2bac9c69e4721088->enter($__internal_01afa833303f294428bab41495b4344f035a5083eba95b1d2bac9c69e4721088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:add.html.twig"));

        // line 10
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_home");
        echo "\" class=\"btn btn-warning\">Se déconnecter</a>
";
        
        $__internal_01afa833303f294428bab41495b4344f035a5083eba95b1d2bac9c69e4721088->leave($__internal_01afa833303f294428bab41495b4344f035a5083eba95b1d2bac9c69e4721088_prof);

    }

    // line 13
    public function block_link($context, array $blocks = array())
    {
        $__internal_c6da45ca2ae10ab02142bbe4b5b4d15c62b5e7c47985980147ae5661d95f0c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6da45ca2ae10ab02142bbe4b5b4d15c62b5e7c47985980147ae5661d95f0c5a->enter($__internal_c6da45ca2ae10ab02142bbe4b5b4d15c62b5e7c47985980147ae5661d95f0c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:add.html.twig"));

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
        
        $__internal_c6da45ca2ae10ab02142bbe4b5b4d15c62b5e7c47985980147ae5661d95f0c5a->leave($__internal_c6da45ca2ae10ab02142bbe4b5b4d15c62b5e7c47985980147ae5661d95f0c5a_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_15d2c5a259be421dcd3e80bcb0e0d82354e0de8ce29ebfab36d625b616179cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d2c5a259be421dcd3e80bcb0e0d82354e0de8ce29ebfab36d625b616179cc1->enter($__internal_15d2c5a259be421dcd3e80bcb0e0d82354e0de8ce29ebfab36d625b616179cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:add.html.twig"));

        // line 26
        echo "
    <h2>Créer une machine</h2>

    ";
        // line 29
        echo twig_include($this->env, $context, "OCPlatformeBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention: cette machine sera ajoutée directement sur la page d'accueil après validation du formulaire !
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
        
        $__internal_15d2c5a259be421dcd3e80bcb0e0d82354e0de8ce29ebfab36d625b616179cc1->leave($__internal_15d2c5a259be421dcd3e80bcb0e0d82354e0de8ce29ebfab36d625b616179cc1_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:add.html.twig";
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
    Créer une machine - {{ parent() }}
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

    <h2>Créer une machine</h2>

    {{ include(\"OCPlatformeBundle:Advert:form.html.twig\") }}

    <p>
        Attention: cette machine sera ajoutée directement sur la page d'accueil après validation du formulaire !
    </p>
    <p>
        <a href=\"{{ path('oc_platforme_view') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

{% endblock %}", "OCPlatformeBundle:Advert:add.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/Advert/add.html.twig");
    }
}

<?php

/* OCPlatformeBundle:Advert:editsalle.html.twig */
class __TwigTemplate_a97d3e9153b6305422581ce80b9e31944e78c96986af3ccc6e014819f57bcb8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:editsalle.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'link' => array($this, 'block_link'),
            'ocplatforme_body' => array($this, 'block_ocplatforme_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_759cfeff47f4d8da8acf89e3aeb9b82011ca0c142e8ae6bf3f7b73bf5f395b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759cfeff47f4d8da8acf89e3aeb9b82011ca0c142e8ae6bf3f7b73bf5f395b60->enter($__internal_759cfeff47f4d8da8acf89e3aeb9b82011ca0c142e8ae6bf3f7b73bf5f395b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:editsalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_759cfeff47f4d8da8acf89e3aeb9b82011ca0c142e8ae6bf3f7b73bf5f395b60->leave($__internal_759cfeff47f4d8da8acf89e3aeb9b82011ca0c142e8ae6bf3f7b73bf5f395b60_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59d0b8971590eab932655babfc019c31da4de407cf3a0fb78891541da201b0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d0b8971590eab932655babfc019c31da4de407cf3a0fb78891541da201b0e5->enter($__internal_59d0b8971590eab932655babfc019c31da4de407cf3a0fb78891541da201b0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:editsalle.html.twig"));

        // line 6
        echo "    Modifier une salle- ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_59d0b8971590eab932655babfc019c31da4de407cf3a0fb78891541da201b0e5->leave($__internal_59d0b8971590eab932655babfc019c31da4de407cf3a0fb78891541da201b0e5_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_ae8bb58dc23c573719b48abe2a83a385466bdba82bfaa99325349cf804ee223b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8bb58dc23c573719b48abe2a83a385466bdba82bfaa99325349cf804ee223b->enter($__internal_ae8bb58dc23c573719b48abe2a83a385466bdba82bfaa99325349cf804ee223b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:editsalle.html.twig"));

        // line 10
        echo "    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_add");
        echo "\">Créer une machine</a></li>
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_addsalle");
        echo "\">Créer une salle</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifmachine");
        echo "\">Modifier/Supprimer une machine</a></li>
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifsalle");
        echo "\">Modifier/Supprimer une salle</a></li>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_ping");
        echo "\">Tester la connexion d'une salle</a></li>
    </ul>
";
        
        $__internal_ae8bb58dc23c573719b48abe2a83a385466bdba82bfaa99325349cf804ee223b->leave($__internal_ae8bb58dc23c573719b48abe2a83a385466bdba82bfaa99325349cf804ee223b_prof);

    }

    // line 21
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_6b4c391a4845a4e37407b75136312ba8991dad2fd23e497a8cf3b5b7c5bf6cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4c391a4845a4e37407b75136312ba8991dad2fd23e497a8cf3b5b7c5bf6cbc->enter($__internal_6b4c391a4845a4e37407b75136312ba8991dad2fd23e497a8cf3b5b7c5bf6cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:editsalle.html.twig"));

        // line 22
        echo "
    <h2>Modifier cette salle :</h2>

    ";
        // line 25
        echo twig_include($this->env, $context, "OCPlatformeBundle:Advert:form.html.twig");
        echo "

    <p>
        <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

";
        
        $__internal_6b4c391a4845a4e37407b75136312ba8991dad2fd23e497a8cf3b5b7c5bf6cbc->leave($__internal_6b4c391a4845a4e37407b75136312ba8991dad2fd23e497a8cf3b5b7c5bf6cbc_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:editsalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  103 => 25,  98 => 22,  92 => 21,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformeBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformeBundle::layout.html.twig\" %}

{% block title %}
    Modifier une salle- {{ parent() }}
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

{% block ocplatforme_body %}

    <h2>Modifier cette salle :</h2>

    {{ include(\"OCPlatformeBundle:Advert:form.html.twig\") }}

    <p>
        <a href=\"{{ path('oc_platforme_view') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

{% endblock %}", "OCPlatformeBundle:Advert:editsalle.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/Advert/editsalle.html.twig");
    }
}

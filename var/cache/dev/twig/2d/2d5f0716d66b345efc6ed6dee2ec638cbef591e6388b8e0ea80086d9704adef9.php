<?php

/* OCPlatformeBundle:Advert:edit.html.twig */
class __TwigTemplate_d8babccd45bd9cb669ea897ef6f053e86c1447dd39b74caf8982e353db42d18c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:edit.html.twig", 3);
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
        $__internal_89e12d245d2022f97397021adeaf2c389dc7408c627b09c6c8267c8ef771f8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e12d245d2022f97397021adeaf2c389dc7408c627b09c6c8267c8ef771f8fb->enter($__internal_89e12d245d2022f97397021adeaf2c389dc7408c627b09c6c8267c8ef771f8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e12d245d2022f97397021adeaf2c389dc7408c627b09c6c8267c8ef771f8fb->leave($__internal_89e12d245d2022f97397021adeaf2c389dc7408c627b09c6c8267c8ef771f8fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_42f7f8d9bd5addfd3d591a83ba00831cefafbfc8b61e343ba3ad1670c9caf61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f7f8d9bd5addfd3d591a83ba00831cefafbfc8b61e343ba3ad1670c9caf61c->enter($__internal_42f7f8d9bd5addfd3d591a83ba00831cefafbfc8b61e343ba3ad1670c9caf61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:edit.html.twig"));

        // line 6
        echo "    Modifier une machine - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_42f7f8d9bd5addfd3d591a83ba00831cefafbfc8b61e343ba3ad1670c9caf61c->leave($__internal_42f7f8d9bd5addfd3d591a83ba00831cefafbfc8b61e343ba3ad1670c9caf61c_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_c8a3061a99a2aa97ec542df04feebfd711805510744f9e5fb32cb1be6e83681e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a3061a99a2aa97ec542df04feebfd711805510744f9e5fb32cb1be6e83681e->enter($__internal_c8a3061a99a2aa97ec542df04feebfd711805510744f9e5fb32cb1be6e83681e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:edit.html.twig"));

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
        
        $__internal_c8a3061a99a2aa97ec542df04feebfd711805510744f9e5fb32cb1be6e83681e->leave($__internal_c8a3061a99a2aa97ec542df04feebfd711805510744f9e5fb32cb1be6e83681e_prof);

    }

    // line 21
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_807c008c81a4ceb535bafc0b4ef7ce87ad54e6ef929bb401ff75152856363ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807c008c81a4ceb535bafc0b4ef7ce87ad54e6ef929bb401ff75152856363ea5->enter($__internal_807c008c81a4ceb535bafc0b4ef7ce87ad54e6ef929bb401ff75152856363ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:edit.html.twig"));

        // line 22
        echo "
    <h2>Modifier cette machine :</h2>

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
        
        $__internal_807c008c81a4ceb535bafc0b4ef7ce87ad54e6ef929bb401ff75152856363ea5->leave($__internal_807c008c81a4ceb535bafc0b4ef7ce87ad54e6ef929bb401ff75152856363ea5_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:edit.html.twig";
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
    Modifier une machine - {{ parent() }}
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

    <h2>Modifier cette machine :</h2>

    {{ include(\"OCPlatformeBundle:Advert:form.html.twig\") }}

    <p>
        <a href=\"{{ path('oc_platforme_view') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

{% endblock %}", "OCPlatformeBundle:Advert:edit.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/Advert/edit.html.twig");
    }
}

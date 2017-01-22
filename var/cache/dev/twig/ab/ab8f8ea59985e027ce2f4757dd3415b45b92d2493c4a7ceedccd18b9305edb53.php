<?php

/* OCPlatformeBundle:Advert:edit.html.twig */
class __TwigTemplate_4208796e9cff2eaba7c758b81550faedbca242f969df59a891c3bb0ba952b03f extends Twig_Template
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
        $__internal_6be463554213bab9e7fbe08dbde2b73079696430ad5ee6fc69a1d908b58d4daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be463554213bab9e7fbe08dbde2b73079696430ad5ee6fc69a1d908b58d4daa->enter($__internal_6be463554213bab9e7fbe08dbde2b73079696430ad5ee6fc69a1d908b58d4daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6be463554213bab9e7fbe08dbde2b73079696430ad5ee6fc69a1d908b58d4daa->leave($__internal_6be463554213bab9e7fbe08dbde2b73079696430ad5ee6fc69a1d908b58d4daa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aef7a551e977eeba1597bac7649f1bc4c01645dc61824c745d1fc44992edddc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef7a551e977eeba1597bac7649f1bc4c01645dc61824c745d1fc44992edddc7->enter($__internal_aef7a551e977eeba1597bac7649f1bc4c01645dc61824c745d1fc44992edddc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:edit.html.twig"));

        // line 6
        echo "    EDIT - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aef7a551e977eeba1597bac7649f1bc4c01645dc61824c745d1fc44992edddc7->leave($__internal_aef7a551e977eeba1597bac7649f1bc4c01645dc61824c745d1fc44992edddc7_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_c6c83a46fcbaf974b52cce45c36be669df9efb9aad149654d3dfd88d5356a01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c83a46fcbaf974b52cce45c36be669df9efb9aad149654d3dfd88d5356a01f->enter($__internal_c6c83a46fcbaf974b52cce45c36be669df9efb9aad149654d3dfd88d5356a01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:edit.html.twig"));

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
    </ul>
";
        
        $__internal_c6c83a46fcbaf974b52cce45c36be669df9efb9aad149654d3dfd88d5356a01f->leave($__internal_c6c83a46fcbaf974b52cce45c36be669df9efb9aad149654d3dfd88d5356a01f_prof);

    }

    // line 20
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_e6508d8762410fcf76ef7d92f90863af2f0a882a71bc3d4db2511db5266af907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6508d8762410fcf76ef7d92f90863af2f0a882a71bc3d4db2511db5266af907->enter($__internal_e6508d8762410fcf76ef7d92f90863af2f0a882a71bc3d4db2511db5266af907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:edit.html.twig"));

        // line 21
        echo "
    <h2>Modifier cette machine :</h2>

    ";
        // line 24
        echo twig_include($this->env, $context, "OCPlatformeBundle:Advert:form.html.twig");
        echo "

    <p>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

";
        
        $__internal_e6508d8762410fcf76ef7d92f90863af2f0a882a71bc3d4db2511db5266af907->leave($__internal_e6508d8762410fcf76ef7d92f90863af2f0a882a71bc3d4db2511db5266af907_prof);

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
        return array (  105 => 27,  99 => 24,  94 => 21,  88 => 20,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
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
    EDIT - {{ parent() }}
{% endblock %}

{% block link %}
    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"{{ path('oc_platforme_view') }}\">Accueil</a></li>
        <li><a href=\"{{ path('oc_platforme_add') }}\">Créer une machine</a></li>
        <li><a href=\"{{ path('oc_platforme_addsalle') }}\">Créer une salle</a></li>
        <li><a href=\"{{ path('oc_platforme_modifmachine') }}\">Modifier/Supprimer une machine</a></li>
        <li><a href=\"{{ path('oc_platforme_modifsalle') }}\">Modifier/Supprimer une salle</a></li>
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

{% endblock %}", "OCPlatformeBundle:Advert:edit.html.twig", "C:\\wamp64\\www\\Opmk\\src\\OC\\PlatformeBundle/Resources/views/Advert/edit.html.twig");
    }
}

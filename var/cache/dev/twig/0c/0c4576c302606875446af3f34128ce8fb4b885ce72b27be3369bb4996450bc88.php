<?php

/* OCPlatformeBundle:Advert:add.html.twig */
class __TwigTemplate_d54eab0e45e56a72ffcbb5531d4356ffd026507b93828e48d7173466a4ba19a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:add.html.twig", 3);
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
        $__internal_6ac7bc3be55a71dd5b0b7c1553ac29a9a00b39a3c6a774fff634c2baa207852f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac7bc3be55a71dd5b0b7c1553ac29a9a00b39a3c6a774fff634c2baa207852f->enter($__internal_6ac7bc3be55a71dd5b0b7c1553ac29a9a00b39a3c6a774fff634c2baa207852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac7bc3be55a71dd5b0b7c1553ac29a9a00b39a3c6a774fff634c2baa207852f->leave($__internal_6ac7bc3be55a71dd5b0b7c1553ac29a9a00b39a3c6a774fff634c2baa207852f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_243a35013641894261efb1b64514a78978e793efc20b29551ca920bfadd278f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243a35013641894261efb1b64514a78978e793efc20b29551ca920bfadd278f5->enter($__internal_243a35013641894261efb1b64514a78978e793efc20b29551ca920bfadd278f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:add.html.twig"));

        // line 6
        echo "
    <h2>Créer une machine</h2>

    ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformeBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention: cette machine sera ajoutée directement sur la page d'accueil après validation du formulaire !
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
        
        $__internal_243a35013641894261efb1b64514a78978e793efc20b29551ca920bfadd278f5->leave($__internal_243a35013641894261efb1b64514a78978e793efc20b29551ca920bfadd278f5_prof);

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

{% endblock %}", "OCPlatformeBundle:Advert:add.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\src\\OC\\PlatformeBundle/Resources/views/Advert/add.html.twig");
    }
}

<?php

/* OCPlatformeBundle::layout.html.twig */
class __TwigTemplate_bcff34d06a59fd6a75e74a6eb62d30eb2e0a1c4782927ff9a0347c29c635e939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformeBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatforme_body' => array($this, 'block_ocplatforme_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deb1492e64b552145e1b5bc0afb5a92711cf9b0d7ea21a0ffb46bdf498f7baf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb1492e64b552145e1b5bc0afb5a92711cf9b0d7ea21a0ffb46bdf498f7baf6->enter($__internal_deb1492e64b552145e1b5bc0afb5a92711cf9b0d7ea21a0ffb46bdf498f7baf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deb1492e64b552145e1b5bc0afb5a92711cf9b0d7ea21a0ffb46bdf498f7baf6->leave($__internal_deb1492e64b552145e1b5bc0afb5a92711cf9b0d7ea21a0ffb46bdf498f7baf6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c8697eeefbf8c3fa62e67e7be139c64b293fc9f495980bce917fcf55aad1e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8697eeefbf8c3fa62e67e7be139c64b293fc9f495980bce917fcf55aad1e55->enter($__internal_5c8697eeefbf8c3fa62e67e7be139c64b293fc9f495980bce917fcf55aad1e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle::layout.html.twig"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5c8697eeefbf8c3fa62e67e7be139c64b293fc9f495980bce917fcf55aad1e55->leave($__internal_5c8697eeefbf8c3fa62e67e7be139c64b293fc9f495980bce917fcf55aad1e55_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_91d54ac2806f2bb723b2c24750d49780c4066efeb0c337a1c8024e128fdc2038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d54ac2806f2bb723b2c24750d49780c4066efeb0c337a1c8024e128fdc2038->enter($__internal_91d54ac2806f2bb723b2c24750d49780c4066efeb0c337a1c8024e128fdc2038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle::layout.html.twig"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ocplatforme_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_91d54ac2806f2bb723b2c24750d49780c4066efeb0c337a1c8024e128fdc2038->leave($__internal_91d54ac2806f2bb723b2c24750d49780c4066efeb0c337a1c8024e128fdc2038_prof);

    }

    // line 12
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_ff1a1a8f638c5f873c6f8f2632c7ddb388b66bf2efef9a34dd83b235710eb58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1a1a8f638c5f873c6f8f2632c7ddb388b66bf2efef9a34dd83b235710eb58d->enter($__internal_ff1a1a8f638c5f873c6f8f2632c7ddb388b66bf2efef9a34dd83b235710eb58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle::layout.html.twig"));

        // line 13
        echo "    ";
        
        $__internal_ff1a1a8f638c5f873c6f8f2632c7ddb388b66bf2efef9a34dd83b235710eb58d->leave($__internal_ff1a1a8f638c5f873c6f8f2632c7ddb388b66bf2efef9a34dd83b235710eb58d_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  72 => 12,  64 => 14,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ocplatforme_body %}
    {% endblock %}

{% endblock %}", "OCPlatformeBundle::layout.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\src\\OC\\PlatformeBundle/Resources/views/layout.html.twig");
    }
}

<?php

/* OCPlatformeBundle::layout.html.twig */
class __TwigTemplate_5f5206dc546cc9e11f261dd5fd461f874b51a02ce80e55aa715dcbc2b09259ea extends Twig_Template
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
        $__internal_8a742a9a15f4ea8c197ffbca719d1059458cbac54bc1b30d3ac760756a4cc402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a742a9a15f4ea8c197ffbca719d1059458cbac54bc1b30d3ac760756a4cc402->enter($__internal_8a742a9a15f4ea8c197ffbca719d1059458cbac54bc1b30d3ac760756a4cc402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a742a9a15f4ea8c197ffbca719d1059458cbac54bc1b30d3ac760756a4cc402->leave($__internal_8a742a9a15f4ea8c197ffbca719d1059458cbac54bc1b30d3ac760756a4cc402_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bddddd3fca46dc1e442cfeee529b5cee87f8639dcbc163097d0517b44a46bc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bddddd3fca46dc1e442cfeee529b5cee87f8639dcbc163097d0517b44a46bc0e->enter($__internal_bddddd3fca46dc1e442cfeee529b5cee87f8639dcbc163097d0517b44a46bc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle::layout.html.twig"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bddddd3fca46dc1e442cfeee529b5cee87f8639dcbc163097d0517b44a46bc0e->leave($__internal_bddddd3fca46dc1e442cfeee529b5cee87f8639dcbc163097d0517b44a46bc0e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f69137a2fa15d2bc6bae65e7a5a2f79ff15332bb05ef818063f44c81dbc80329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69137a2fa15d2bc6bae65e7a5a2f79ff15332bb05ef818063f44c81dbc80329->enter($__internal_f69137a2fa15d2bc6bae65e7a5a2f79ff15332bb05ef818063f44c81dbc80329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle::layout.html.twig"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ocplatforme_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_f69137a2fa15d2bc6bae65e7a5a2f79ff15332bb05ef818063f44c81dbc80329->leave($__internal_f69137a2fa15d2bc6bae65e7a5a2f79ff15332bb05ef818063f44c81dbc80329_prof);

    }

    // line 12
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_e51977d5fd691fdb4a241ac1d14a4ae9710a7eabeb0dd304dd748e38746967e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51977d5fd691fdb4a241ac1d14a4ae9710a7eabeb0dd304dd748e38746967e9->enter($__internal_e51977d5fd691fdb4a241ac1d14a4ae9710a7eabeb0dd304dd748e38746967e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle::layout.html.twig"));

        // line 13
        echo "    ";
        
        $__internal_e51977d5fd691fdb4a241ac1d14a4ae9710a7eabeb0dd304dd748e38746967e9->leave($__internal_e51977d5fd691fdb4a241ac1d14a4ae9710a7eabeb0dd304dd748e38746967e9_prof);

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

{% endblock %}", "OCPlatformeBundle::layout.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/layout.html.twig");
    }
}

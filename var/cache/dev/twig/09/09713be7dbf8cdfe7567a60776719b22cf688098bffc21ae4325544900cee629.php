<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c7a6d161e4d28620fa1d14d9e0b6868fed88f30be570522bd2e00667161a7343 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af467d57fcb2c4ad5f44677d00c080aecadd333084e71ac7f571a406535425e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af467d57fcb2c4ad5f44677d00c080aecadd333084e71ac7f571a406535425e2->enter($__internal_af467d57fcb2c4ad5f44677d00c080aecadd333084e71ac7f571a406535425e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af467d57fcb2c4ad5f44677d00c080aecadd333084e71ac7f571a406535425e2->leave($__internal_af467d57fcb2c4ad5f44677d00c080aecadd333084e71ac7f571a406535425e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2cbc2c0c9f5d59d7742cb4147307b954617c104e9c6ecd2f44301f62e537f590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbc2c0c9f5d59d7742cb4147307b954617c104e9c6ecd2f44301f62e537f590->enter($__internal_2cbc2c0c9f5d59d7742cb4147307b954617c104e9c6ecd2f44301f62e537f590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2cbc2c0c9f5d59d7742cb4147307b954617c104e9c6ecd2f44301f62e537f590->leave($__internal_2cbc2c0c9f5d59d7742cb4147307b954617c104e9c6ecd2f44301f62e537f590_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc10bd1d619567932b15e20f758e5cc4711aaf2a3fd3c0ff45e5e062a8145f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc10bd1d619567932b15e20f758e5cc4711aaf2a3fd3c0ff45e5e062a8145f59->enter($__internal_cc10bd1d619567932b15e20f758e5cc4711aaf2a3fd3c0ff45e5e062a8145f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc10bd1d619567932b15e20f758e5cc4711aaf2a3fd3c0ff45e5e062a8145f59->leave($__internal_cc10bd1d619567932b15e20f758e5cc4711aaf2a3fd3c0ff45e5e062a8145f59_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3466561872110134c4516358be348d7b5c5a7accca9ef9fffa85bb8fedde4628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3466561872110134c4516358be348d7b5c5a7accca9ef9fffa85bb8fedde4628->enter($__internal_3466561872110134c4516358be348d7b5c5a7accca9ef9fffa85bb8fedde4628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3466561872110134c4516358be348d7b5c5a7accca9ef9fffa85bb8fedde4628->leave($__internal_3466561872110134c4516358be348d7b5c5a7accca9ef9fffa85bb8fedde4628_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Opmk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

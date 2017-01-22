<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_12e45964a1cda3b31304d448711256e5263f21707af2124ee5318fbadd8b91c9 extends Twig_Template
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
        $__internal_63e587b39325fda0eb040edefa294675ee8f0400c136a34ae29ea8eb071f1633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e587b39325fda0eb040edefa294675ee8f0400c136a34ae29ea8eb071f1633->enter($__internal_63e587b39325fda0eb040edefa294675ee8f0400c136a34ae29ea8eb071f1633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e587b39325fda0eb040edefa294675ee8f0400c136a34ae29ea8eb071f1633->leave($__internal_63e587b39325fda0eb040edefa294675ee8f0400c136a34ae29ea8eb071f1633_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd5203e0c4bbf18c17506a49f3a263b88a29d3f073c9ef36ac882e943b1497b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5203e0c4bbf18c17506a49f3a263b88a29d3f073c9ef36ac882e943b1497b8->enter($__internal_dd5203e0c4bbf18c17506a49f3a263b88a29d3f073c9ef36ac882e943b1497b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dd5203e0c4bbf18c17506a49f3a263b88a29d3f073c9ef36ac882e943b1497b8->leave($__internal_dd5203e0c4bbf18c17506a49f3a263b88a29d3f073c9ef36ac882e943b1497b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_00205198faa491147241404328ab1d48897a5f8edfffa5ab99c7ba5498d3c816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00205198faa491147241404328ab1d48897a5f8edfffa5ab99c7ba5498d3c816->enter($__internal_00205198faa491147241404328ab1d48897a5f8edfffa5ab99c7ba5498d3c816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00205198faa491147241404328ab1d48897a5f8edfffa5ab99c7ba5498d3c816->leave($__internal_00205198faa491147241404328ab1d48897a5f8edfffa5ab99c7ba5498d3c816_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bddfcd0de9accbcf8c446d5e17d06f1b2a32882a60fd75a6ed3d527bbf1e7765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bddfcd0de9accbcf8c446d5e17d06f1b2a32882a60fd75a6ed3d527bbf1e7765->enter($__internal_bddfcd0de9accbcf8c446d5e17d06f1b2a32882a60fd75a6ed3d527bbf1e7765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bddfcd0de9accbcf8c446d5e17d06f1b2a32882a60fd75a6ed3d527bbf1e7765->leave($__internal_bddfcd0de9accbcf8c446d5e17d06f1b2a32882a60fd75a6ed3d527bbf1e7765_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Openclassrooms\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

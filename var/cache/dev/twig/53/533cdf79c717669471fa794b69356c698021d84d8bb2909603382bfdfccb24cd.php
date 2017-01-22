<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_98c0a7ca594449ee5f426a2049b232f63510b8a649adfdc8404f92c37de2a08e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d4147af204fd419fff97cea3430345757da9f4215e9ca34e072c9f72a424597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4147af204fd419fff97cea3430345757da9f4215e9ca34e072c9f72a424597->enter($__internal_5d4147af204fd419fff97cea3430345757da9f4215e9ca34e072c9f72a424597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d4147af204fd419fff97cea3430345757da9f4215e9ca34e072c9f72a424597->leave($__internal_5d4147af204fd419fff97cea3430345757da9f4215e9ca34e072c9f72a424597_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f83a05de5874de680f338767fd921cb4fa3ac5c57fc2dfff835ccbd1e0173980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83a05de5874de680f338767fd921cb4fa3ac5c57fc2dfff835ccbd1e0173980->enter($__internal_f83a05de5874de680f338767fd921cb4fa3ac5c57fc2dfff835ccbd1e0173980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_f83a05de5874de680f338767fd921cb4fa3ac5c57fc2dfff835ccbd1e0173980->leave($__internal_f83a05de5874de680f338767fd921cb4fa3ac5c57fc2dfff835ccbd1e0173980_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6ce9ecb848a107df7e131987a6acc28a63e9102e0cf526a439b4248c68bd2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ce9ecb848a107df7e131987a6acc28a63e9102e0cf526a439b4248c68bd2b2->enter($__internal_c6ce9ecb848a107df7e131987a6acc28a63e9102e0cf526a439b4248c68bd2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6ce9ecb848a107df7e131987a6acc28a63e9102e0cf526a439b4248c68bd2b2->leave($__internal_c6ce9ecb848a107df7e131987a6acc28a63e9102e0cf526a439b4248c68bd2b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6efa4282308932c1d7e5e83b08ca45314420e58528142412188cf0ce754ca783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efa4282308932c1d7e5e83b08ca45314420e58528142412188cf0ce754ca783->enter($__internal_6efa4282308932c1d7e5e83b08ca45314420e58528142412188cf0ce754ca783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6efa4282308932c1d7e5e83b08ca45314420e58528142412188cf0ce754ca783->leave($__internal_6efa4282308932c1d7e5e83b08ca45314420e58528142412188cf0ce754ca783_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Opmk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

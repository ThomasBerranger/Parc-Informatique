<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8cf2c665946ae6c197ffe8a09bc96901af3f776da16bc1158536d8c559bf503a extends Twig_Template
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
        $__internal_23cdf8ed9c9c97b6d560d6265874b15763587c3bca73d2c5f8efb3936cf89fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cdf8ed9c9c97b6d560d6265874b15763587c3bca73d2c5f8efb3936cf89fa7->enter($__internal_23cdf8ed9c9c97b6d560d6265874b15763587c3bca73d2c5f8efb3936cf89fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23cdf8ed9c9c97b6d560d6265874b15763587c3bca73d2c5f8efb3936cf89fa7->leave($__internal_23cdf8ed9c9c97b6d560d6265874b15763587c3bca73d2c5f8efb3936cf89fa7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e18c82f563eb689b9135f791ba3b620c49ec1556a2c00481adfde532ef353e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e18c82f563eb689b9135f791ba3b620c49ec1556a2c00481adfde532ef353e7->enter($__internal_7e18c82f563eb689b9135f791ba3b620c49ec1556a2c00481adfde532ef353e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_7e18c82f563eb689b9135f791ba3b620c49ec1556a2c00481adfde532ef353e7->leave($__internal_7e18c82f563eb689b9135f791ba3b620c49ec1556a2c00481adfde532ef353e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f0dff5cfa957a436e4a9aa633e176c936bc393929baa3ebfcac33e4b8d7fda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0dff5cfa957a436e4a9aa633e176c936bc393929baa3ebfcac33e4b8d7fda0->enter($__internal_8f0dff5cfa957a436e4a9aa633e176c936bc393929baa3ebfcac33e4b8d7fda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f0dff5cfa957a436e4a9aa633e176c936bc393929baa3ebfcac33e4b8d7fda0->leave($__internal_8f0dff5cfa957a436e4a9aa633e176c936bc393929baa3ebfcac33e4b8d7fda0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17ae18b97d9f63cb2d4107e8da6f1978fbda6541b8b948821e0c66e5df791554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ae18b97d9f63cb2d4107e8da6f1978fbda6541b8b948821e0c66e5df791554->enter($__internal_17ae18b97d9f63cb2d4107e8da6f1978fbda6541b8b948821e0c66e5df791554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_17ae18b97d9f63cb2d4107e8da6f1978fbda6541b8b948821e0c66e5df791554->leave($__internal_17ae18b97d9f63cb2d4107e8da6f1978fbda6541b8b948821e0c66e5df791554_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1188a307462ee6d664bdcf4bda4b041252abc1f02c616d4dff68f4b0c458d2f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_594301b25ad8e62d3b2e157a8431a2568b358aaba45004566c1c5b04fb88d7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594301b25ad8e62d3b2e157a8431a2568b358aaba45004566c1c5b04fb88d7c8->enter($__internal_594301b25ad8e62d3b2e157a8431a2568b358aaba45004566c1c5b04fb88d7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594301b25ad8e62d3b2e157a8431a2568b358aaba45004566c1c5b04fb88d7c8->leave($__internal_594301b25ad8e62d3b2e157a8431a2568b358aaba45004566c1c5b04fb88d7c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc352f1781aa2f752139f6e2c8d540a8448738b2eb998a8848b282e074338b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc352f1781aa2f752139f6e2c8d540a8448738b2eb998a8848b282e074338b3f->enter($__internal_cc352f1781aa2f752139f6e2c8d540a8448738b2eb998a8848b282e074338b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cc352f1781aa2f752139f6e2c8d540a8448738b2eb998a8848b282e074338b3f->leave($__internal_cc352f1781aa2f752139f6e2c8d540a8448738b2eb998a8848b282e074338b3f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_766d758cd496f91fe5bd1affe9390a8e9cff5703d2c9e771422ee00e170b5a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766d758cd496f91fe5bd1affe9390a8e9cff5703d2c9e771422ee00e170b5a12->enter($__internal_766d758cd496f91fe5bd1affe9390a8e9cff5703d2c9e771422ee00e170b5a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_766d758cd496f91fe5bd1affe9390a8e9cff5703d2c9e771422ee00e170b5a12->leave($__internal_766d758cd496f91fe5bd1affe9390a8e9cff5703d2c9e771422ee00e170b5a12_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9e2820d28dd62317c2c2af20bfb213b6d89b471962b0230367ab595f5aae562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e2820d28dd62317c2c2af20bfb213b6d89b471962b0230367ab595f5aae562->enter($__internal_b9e2820d28dd62317c2c2af20bfb213b6d89b471962b0230367ab595f5aae562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b9e2820d28dd62317c2c2af20bfb213b6d89b471962b0230367ab595f5aae562->leave($__internal_b9e2820d28dd62317c2c2af20bfb213b6d89b471962b0230367ab595f5aae562_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

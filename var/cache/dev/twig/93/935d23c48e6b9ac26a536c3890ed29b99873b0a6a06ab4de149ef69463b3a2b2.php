<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_74e360125470083655abeeaaf8ec868cf1ed4520d7b6c15f322b28bd145dc1a7 extends Twig_Template
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
        $__internal_5ff6ea292acf37ff6af30e8795687090e47b44d598f0bdd7767f498bfaf752ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff6ea292acf37ff6af30e8795687090e47b44d598f0bdd7767f498bfaf752ed->enter($__internal_5ff6ea292acf37ff6af30e8795687090e47b44d598f0bdd7767f498bfaf752ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ff6ea292acf37ff6af30e8795687090e47b44d598f0bdd7767f498bfaf752ed->leave($__internal_5ff6ea292acf37ff6af30e8795687090e47b44d598f0bdd7767f498bfaf752ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bd88656be5ad863983efadf262c61e034872660d161d9e07566b1d6ce2c459e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd88656be5ad863983efadf262c61e034872660d161d9e07566b1d6ce2c459e->enter($__internal_0bd88656be5ad863983efadf262c61e034872660d161d9e07566b1d6ce2c459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

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
        
        $__internal_0bd88656be5ad863983efadf262c61e034872660d161d9e07566b1d6ce2c459e->leave($__internal_0bd88656be5ad863983efadf262c61e034872660d161d9e07566b1d6ce2c459e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad09d7848edccfb184e1bdf6682a6e56e7e7923e3d27de7ccaef5d3b8d526b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad09d7848edccfb184e1bdf6682a6e56e7e7923e3d27de7ccaef5d3b8d526b76->enter($__internal_ad09d7848edccfb184e1bdf6682a6e56e7e7923e3d27de7ccaef5d3b8d526b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

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
        
        $__internal_ad09d7848edccfb184e1bdf6682a6e56e7e7923e3d27de7ccaef5d3b8d526b76->leave($__internal_ad09d7848edccfb184e1bdf6682a6e56e7e7923e3d27de7ccaef5d3b8d526b76_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aee5d624f393a926b910de5e23b97d1ffb3971a9355d856dd48e6f58b6d76554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee5d624f393a926b910de5e23b97d1ffb3971a9355d856dd48e6f58b6d76554->enter($__internal_aee5d624f393a926b910de5e23b97d1ffb3971a9355d856dd48e6f58b6d76554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

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
        
        $__internal_aee5d624f393a926b910de5e23b97d1ffb3971a9355d856dd48e6f58b6d76554->leave($__internal_aee5d624f393a926b910de5e23b97d1ffb3971a9355d856dd48e6f58b6d76554_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Opmk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

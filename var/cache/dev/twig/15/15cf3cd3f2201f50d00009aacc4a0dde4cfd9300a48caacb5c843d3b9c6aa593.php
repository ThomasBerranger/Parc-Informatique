<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_11558aae2a1e22fb797abbfcbea4f14617b9e44e73bdcd0a9e30bcd19992be3b extends Twig_Template
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
        $__internal_d2bf67032f0aaa7b1da15222009b75b8fed9efefbaf740e9ca85d0e2c4d4679a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bf67032f0aaa7b1da15222009b75b8fed9efefbaf740e9ca85d0e2c4d4679a->enter($__internal_d2bf67032f0aaa7b1da15222009b75b8fed9efefbaf740e9ca85d0e2c4d4679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2bf67032f0aaa7b1da15222009b75b8fed9efefbaf740e9ca85d0e2c4d4679a->leave($__internal_d2bf67032f0aaa7b1da15222009b75b8fed9efefbaf740e9ca85d0e2c4d4679a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1671b15d69aeb956613b7e886bdc8dfe3b12ea5d2e8b3eb34d064ff0632cb6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1671b15d69aeb956613b7e886bdc8dfe3b12ea5d2e8b3eb34d064ff0632cb6ed->enter($__internal_1671b15d69aeb956613b7e886bdc8dfe3b12ea5d2e8b3eb34d064ff0632cb6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

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
        
        $__internal_1671b15d69aeb956613b7e886bdc8dfe3b12ea5d2e8b3eb34d064ff0632cb6ed->leave($__internal_1671b15d69aeb956613b7e886bdc8dfe3b12ea5d2e8b3eb34d064ff0632cb6ed_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7dc1820f425bd891782dc3df6981b27dbc0eff54791e785ed72b0a1b3fc56ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc1820f425bd891782dc3df6981b27dbc0eff54791e785ed72b0a1b3fc56ae8->enter($__internal_7dc1820f425bd891782dc3df6981b27dbc0eff54791e785ed72b0a1b3fc56ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

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
        
        $__internal_7dc1820f425bd891782dc3df6981b27dbc0eff54791e785ed72b0a1b3fc56ae8->leave($__internal_7dc1820f425bd891782dc3df6981b27dbc0eff54791e785ed72b0a1b3fc56ae8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d24ab9fee28ccb0d4319cdf1b263b73c443788a711b5b385efdcb7af2c2d43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d24ab9fee28ccb0d4319cdf1b263b73c443788a711b5b385efdcb7af2c2d43b->enter($__internal_9d24ab9fee28ccb0d4319cdf1b263b73c443788a711b5b385efdcb7af2c2d43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

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
        
        $__internal_9d24ab9fee28ccb0d4319cdf1b263b73c443788a711b5b385efdcb7af2c2d43b->leave($__internal_9d24ab9fee28ccb0d4319cdf1b263b73c443788a711b5b385efdcb7af2c2d43b_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Openclassrooms\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

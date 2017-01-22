<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_711b1adecb9acb892d73cdd5b183571c1f6569325a0cc12b64acaef7f64685d5 extends Twig_Template
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
        $__internal_c00bcbb4d938c0b2b044e41abb432aa2ef123629b1c3649162c6c6acd7931c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00bcbb4d938c0b2b044e41abb432aa2ef123629b1c3649162c6c6acd7931c86->enter($__internal_c00bcbb4d938c0b2b044e41abb432aa2ef123629b1c3649162c6c6acd7931c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c00bcbb4d938c0b2b044e41abb432aa2ef123629b1c3649162c6c6acd7931c86->leave($__internal_c00bcbb4d938c0b2b044e41abb432aa2ef123629b1c3649162c6c6acd7931c86_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0886df229884dd51be851627286f4b7b681db594109482c792ca5f566341a9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0886df229884dd51be851627286f4b7b681db594109482c792ca5f566341a9e9->enter($__internal_0886df229884dd51be851627286f4b7b681db594109482c792ca5f566341a9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_0886df229884dd51be851627286f4b7b681db594109482c792ca5f566341a9e9->leave($__internal_0886df229884dd51be851627286f4b7b681db594109482c792ca5f566341a9e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_861b67728df564d4faf74362bef6dcfe66657710755375619351611e8ff5888e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861b67728df564d4faf74362bef6dcfe66657710755375619351611e8ff5888e->enter($__internal_861b67728df564d4faf74362bef6dcfe66657710755375619351611e8ff5888e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_861b67728df564d4faf74362bef6dcfe66657710755375619351611e8ff5888e->leave($__internal_861b67728df564d4faf74362bef6dcfe66657710755375619351611e8ff5888e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7793caff5d373d3f49b330e4149f3e921b505b49c62639a3b17b972f670e14df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7793caff5d373d3f49b330e4149f3e921b505b49c62639a3b17b972f670e14df->enter($__internal_7793caff5d373d3f49b330e4149f3e921b505b49c62639a3b17b972f670e14df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7793caff5d373d3f49b330e4149f3e921b505b49c62639a3b17b972f670e14df->leave($__internal_7793caff5d373d3f49b330e4149f3e921b505b49c62639a3b17b972f670e14df_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Openclassrooms\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

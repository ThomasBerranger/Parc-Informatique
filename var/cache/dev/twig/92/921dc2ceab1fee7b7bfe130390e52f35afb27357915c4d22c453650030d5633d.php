<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cd79027c37c5fc18e339a9f6dbace671714e240a5e6929124bb6af6dd3bda6da extends Twig_Template
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
        $__internal_b04d6bf62dd8c4c685b6286de9642824a16e6982dd98464e9c24085eea5bcdfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04d6bf62dd8c4c685b6286de9642824a16e6982dd98464e9c24085eea5bcdfa->enter($__internal_b04d6bf62dd8c4c685b6286de9642824a16e6982dd98464e9c24085eea5bcdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b04d6bf62dd8c4c685b6286de9642824a16e6982dd98464e9c24085eea5bcdfa->leave($__internal_b04d6bf62dd8c4c685b6286de9642824a16e6982dd98464e9c24085eea5bcdfa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c07dc2f74f3133f7631af3b6afd92c9f46f6afc43854dc7fa372e0f1a72f0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c07dc2f74f3133f7631af3b6afd92c9f46f6afc43854dc7fa372e0f1a72f0fa->enter($__internal_0c07dc2f74f3133f7631af3b6afd92c9f46f6afc43854dc7fa372e0f1a72f0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c07dc2f74f3133f7631af3b6afd92c9f46f6afc43854dc7fa372e0f1a72f0fa->leave($__internal_0c07dc2f74f3133f7631af3b6afd92c9f46f6afc43854dc7fa372e0f1a72f0fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_179c5e5fadda59614913b54ac296b4d2534eba9f0da70b026c2401b1f294215c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179c5e5fadda59614913b54ac296b4d2534eba9f0da70b026c2401b1f294215c->enter($__internal_179c5e5fadda59614913b54ac296b4d2534eba9f0da70b026c2401b1f294215c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_179c5e5fadda59614913b54ac296b4d2534eba9f0da70b026c2401b1f294215c->leave($__internal_179c5e5fadda59614913b54ac296b4d2534eba9f0da70b026c2401b1f294215c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_61472c07f7bfd331dd521eceaa99bf22436abfc0b9487a84b2fd66b51987bc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61472c07f7bfd331dd521eceaa99bf22436abfc0b9487a84b2fd66b51987bc19->enter($__internal_61472c07f7bfd331dd521eceaa99bf22436abfc0b9487a84b2fd66b51987bc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_61472c07f7bfd331dd521eceaa99bf22436abfc0b9487a84b2fd66b51987bc19->leave($__internal_61472c07f7bfd331dd521eceaa99bf22436abfc0b9487a84b2fd66b51987bc19_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

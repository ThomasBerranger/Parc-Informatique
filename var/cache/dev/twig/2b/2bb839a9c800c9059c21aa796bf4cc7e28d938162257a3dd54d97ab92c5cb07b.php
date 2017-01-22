<?php

/* OCPlatformeBundle::layout.html.twig */
class __TwigTemplate_486be26e5dd214bfb302d035774ebf5fa65c2b216cec2b6738cadfdc3d382f61 extends Twig_Template
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
        $__internal_821cd86960622c2ee177cd9a917424fe9fa8ee2874b9b0278e4d16c8333ecc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821cd86960622c2ee177cd9a917424fe9fa8ee2874b9b0278e4d16c8333ecc2c->enter($__internal_821cd86960622c2ee177cd9a917424fe9fa8ee2874b9b0278e4d16c8333ecc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_821cd86960622c2ee177cd9a917424fe9fa8ee2874b9b0278e4d16c8333ecc2c->leave($__internal_821cd86960622c2ee177cd9a917424fe9fa8ee2874b9b0278e4d16c8333ecc2c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_042d15fde44d916ba4adf075f6f29214836583f1cdfaca35b7b31e6c19a6818d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042d15fde44d916ba4adf075f6f29214836583f1cdfaca35b7b31e6c19a6818d->enter($__internal_042d15fde44d916ba4adf075f6f29214836583f1cdfaca35b7b31e6c19a6818d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle::layout.html.twig"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_042d15fde44d916ba4adf075f6f29214836583f1cdfaca35b7b31e6c19a6818d->leave($__internal_042d15fde44d916ba4adf075f6f29214836583f1cdfaca35b7b31e6c19a6818d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e43f8b4ac82041b66ac260087edb6602e87a99ed8739627c38454fadb856eebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43f8b4ac82041b66ac260087edb6602e87a99ed8739627c38454fadb856eebe->enter($__internal_e43f8b4ac82041b66ac260087edb6602e87a99ed8739627c38454fadb856eebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle::layout.html.twig"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ocplatforme_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_e43f8b4ac82041b66ac260087edb6602e87a99ed8739627c38454fadb856eebe->leave($__internal_e43f8b4ac82041b66ac260087edb6602e87a99ed8739627c38454fadb856eebe_prof);

    }

    // line 12
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_e8737f9c1411a3ff7ead005db69c685da0f910fe3d280cef968eaa654612742b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8737f9c1411a3ff7ead005db69c685da0f910fe3d280cef968eaa654612742b->enter($__internal_e8737f9c1411a3ff7ead005db69c685da0f910fe3d280cef968eaa654612742b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle::layout.html.twig"));

        // line 13
        echo "    ";
        
        $__internal_e8737f9c1411a3ff7ead005db69c685da0f910fe3d280cef968eaa654612742b->leave($__internal_e8737f9c1411a3ff7ead005db69c685da0f910fe3d280cef968eaa654612742b_prof);

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

{% endblock %}", "OCPlatformeBundle::layout.html.twig", "C:\\wamp64\\www\\Opmk\\src\\OC\\PlatformeBundle/Resources/views/layout.html.twig");
    }
}

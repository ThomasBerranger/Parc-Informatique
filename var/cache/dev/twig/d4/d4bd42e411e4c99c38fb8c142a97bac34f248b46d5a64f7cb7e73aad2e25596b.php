<?php

/* OCPlatformeBundle:Advert:index.html.twig */
class __TwigTemplate_417263fc97c01ae63570f3c6756e3b9460eec056b3e650a875b525660ef4279c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatforme_body' => array($this, 'block_ocplatforme_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81b1b1541dac5761312174663d47a1c9c302d0523981ac28b5b4df6b9c767618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b1b1541dac5761312174663d47a1c9c302d0523981ac28b5b4df6b9c767618->enter($__internal_81b1b1541dac5761312174663d47a1c9c302d0523981ac28b5b4df6b9c767618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81b1b1541dac5761312174663d47a1c9c302d0523981ac28b5b4df6b9c767618->leave($__internal_81b1b1541dac5761312174663d47a1c9c302d0523981ac28b5b4df6b9c767618_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58e2208f9f0983e0324d2a18a650b8d40325252b07752e906258b28dd16c370f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e2208f9f0983e0324d2a18a650b8d40325252b07752e906258b28dd16c370f->enter($__internal_58e2208f9f0983e0324d2a18a650b8d40325252b07752e906258b28dd16c370f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:index.html.twig"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_58e2208f9f0983e0324d2a18a650b8d40325252b07752e906258b28dd16c370f->leave($__internal_58e2208f9f0983e0324d2a18a650b8d40325252b07752e906258b28dd16c370f_prof);

    }

    // line 9
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_7c46eabe5a9b483e2668b70be11c34486b9016c72b7b46e46f23f6aa99280aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c46eabe5a9b483e2668b70be11c34486b9016c72b7b46e46f23f6aa99280aa8->enter($__internal_7c46eabe5a9b483e2668b70be11c34486b9016c72b7b46e46f23f6aa99280aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:index.html.twig"));

        // line 10
        echo "
    <h2>Liste des annonces :</h2>

";
        
        $__internal_7c46eabe5a9b483e2668b70be11c34486b9016c72b7b46e46f23f6aa99280aa8->leave($__internal_7c46eabe5a9b483e2668b70be11c34486b9016c72b7b46e46f23f6aa99280aa8_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformeBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block ocplatforme_body %}

    <h2>Liste des annonces :</h2>

{% endblock %}", "OCPlatformeBundle:Advert:index.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\src\\OC\\PlatformeBundle/Resources/views/Advert/index.html.twig");
    }
}

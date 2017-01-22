<?php

/* OCPlatformeBundle:Advert:form.html.twig */
class __TwigTemplate_14f75c257056673fcfc8ebb49a5eed0e4e8d5dcda940f2deaf1d6e158b53cdc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8873d5d26006c2d8de78b2012a60165b36cb1cdb7121316dda833e0109acb634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8873d5d26006c2d8de78b2012a60165b36cb1cdb7121316dda833e0109acb634->enter($__internal_8873d5d26006c2d8de78b2012a60165b36cb1cdb7121316dda833e0109acb634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire pour créer une machine</h3>

";
        // line 7
        echo "<div class=\"well\">
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_8873d5d26006c2d8de78b2012a60165b36cb1cdb7121316dda833e0109acb634->leave($__internal_8873d5d26006c2d8de78b2012a60165b36cb1cdb7121316dda833e0109acb634_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  34 => 9,  30 => 8,  27 => 7,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire pour créer une machine</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
   lorsqu'on saura afficher un formulaire. #}
<div class=\"well\">
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
</div>", "OCPlatformeBundle:Advert:form.html.twig", "C:\\wamp64\\www\\Opmk\\src\\OC\\PlatformeBundle/Resources/views/Advert/form.html.twig");
    }
}

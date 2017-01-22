<?php

/* OCPlatformeBundle:Advert:form.html.twig */
class __TwigTemplate_83e170f35b011b60dbcf799a21d95bf1ff3a305b57f6e5920be03b55c6d8d0bd extends Twig_Template
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
        $__internal_cfe33180003b209e6a4f5b15d9c9c0285ffa3c5c110d2e9436783fabd20d0ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe33180003b209e6a4f5b15d9c9c0285ffa3c5c110d2e9436783fabd20d0ff9->enter($__internal_cfe33180003b209e6a4f5b15d9c9c0285ffa3c5c110d2e9436783fabd20d0ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:form.html.twig"));

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
        
        $__internal_cfe33180003b209e6a4f5b15d9c9c0285ffa3c5c110d2e9436783fabd20d0ff9->leave($__internal_cfe33180003b209e6a4f5b15d9c9c0285ffa3c5c110d2e9436783fabd20d0ff9_prof);

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
</div>", "OCPlatformeBundle:Advert:form.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\src\\OC\\PlatformeBundle/Resources/views/Advert/form.html.twig");
    }
}

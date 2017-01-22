<?php

/* OCPlatformeBundle:Advert:menu.html.twig */
class __TwigTemplate_6734978a065cbe4b152f7eef88f467c2418993dee77afe5301b24c81c192ce02 extends Twig_Template
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
        $__internal_2c464dc13cfc32a5e4d0660391f4ef9b24214e3352417a84d2c0897aaa2fba31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c464dc13cfc32a5e4d0660391f4ef9b24214e3352417a84d2c0897aaa2fba31->enter($__internal_2c464dc13cfc32a5e4d0660391f4ef9b24214e3352417a84d2c0897aaa2fba31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:menu.html.twig"));

        // line 2
        echo "

<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["incidents"]) ? $context["incidents"] : $this->getContext($context, "incidents")));
        foreach ($context['_seq'] as $context["_key"] => $context["incident"]) {
            // line 6
            echo "        <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["incident"], "icon", array()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i> La ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["incident"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["incident"], "identifiant", array()), "html", null, true);
            echo " a été ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["incident"], "modif", array()), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["incident"], "date", array()), "j F Y"), "html", null, true);
            echo ".
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incident'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
        
        $__internal_2c464dc13cfc32a5e4d0660391f4ef9b24214e3352417a84d2c0897aaa2fba31->leave($__internal_2c464dc13cfc32a5e4d0660391f4ef9b24214e3352417a84d2c0897aaa2fba31_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  31 => 6,  27 => 5,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}


<ul class=\"nav nav-pills nav-stacked\">
    {% for incident in incidents %}
        <i class=\"{{ incident.icon }}\" aria-hidden=\"true\"></i> La {{ incident.type }} {{ incident.identifiant }} a été {{ incident.modif }} le {{ incident.date | date('j F Y') }}.
        <br>
    {% endfor %}
</ul>", "OCPlatformeBundle:Advert:menu.html.twig", "C:\\wamp64\\www\\Opmk\\src\\OC\\PlatformeBundle/Resources/views/Advert/menu.html.twig");
    }
}

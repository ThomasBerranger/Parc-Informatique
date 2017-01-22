<?php

/* OCPlatformeBundle:Advert:menu.html.twig */
class __TwigTemplate_e900f6895cae78edd91b2aadd11c4f480eca7d042acdff60a6c19c1befd60cf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'refresh' => array($this, 'block_refresh'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11318e9aa2fc09117e016aef57cac4768b25923bf9f66bd6a9bb4e18ed586f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11318e9aa2fc09117e016aef57cac4768b25923bf9f66bd6a9bb4e18ed586f56->enter($__internal_11318e9aa2fc09117e016aef57cac4768b25923bf9f66bd6a9bb4e18ed586f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('refresh', $context, $blocks);
        // line 7
        echo "
<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["incidents"]) ? $context["incidents"] : $this->getContext($context, "incidents")));
        foreach ($context['_seq'] as $context["_key"] => $context["incident"]) {
            // line 10
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
        // line 13
        echo "</ul>";
        
        $__internal_11318e9aa2fc09117e016aef57cac4768b25923bf9f66bd6a9bb4e18ed586f56->leave($__internal_11318e9aa2fc09117e016aef57cac4768b25923bf9f66bd6a9bb4e18ed586f56_prof);

    }

    // line 6
    public function block_refresh($context, array $blocks = array())
    {
        $__internal_63b86813e1528c1114864d6de4e9599e4e90798dd9c4baedf545de1b50231c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b86813e1528c1114864d6de4e9599e4e90798dd9c4baedf545de1b50231c46->enter($__internal_63b86813e1528c1114864d6de4e9599e4e90798dd9c4baedf545de1b50231c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:menu.html.twig"));

        echo "<meta http-equiv=\"refresh\" content=\"30\" >";
        
        $__internal_63b86813e1528c1114864d6de4e9599e4e90798dd9c4baedf545de1b50231c46->leave($__internal_63b86813e1528c1114864d6de4e9599e4e90798dd9c4baedf545de1b50231c46_prof);

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
        return array (  64 => 6,  57 => 13,  39 => 10,  35 => 9,  31 => 7,  29 => 6,  26 => 5,  23 => 2,);
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

{# Ce template n'hérite de personne,
   tout comme le template inclus avec {{ include() }}. #}

{% block refresh %}<meta http-equiv=\"refresh\" content=\"30\" >{% endblock %}

<ul class=\"nav nav-pills nav-stacked\">
    {% for incident in incidents %}
        <i class=\"{{ incident.icon }}\" aria-hidden=\"true\"></i> La {{ incident.type }} {{ incident.identifiant }} a été {{ incident.modif }} le {{ incident.date | date('j F Y') }}.
        <br>
    {% endfor %}
</ul>", "OCPlatformeBundle:Advert:menu.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\src\\OC\\PlatformeBundle/Resources/views/Advert/menu.html.twig");
    }
}

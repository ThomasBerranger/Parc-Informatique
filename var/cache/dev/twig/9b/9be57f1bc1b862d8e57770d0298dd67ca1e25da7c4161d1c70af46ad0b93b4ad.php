<?php

/* OCPlatformeBundle:Advert:ping.html.twig */
class __TwigTemplate_2f773096c062e3a75c889de44b5a0fb63f2731b2f5bf097234ea350a87384dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:ping.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bouton' => array($this, 'block_bouton'),
            'link' => array($this, 'block_link'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db6a7a50ea99c12c2ce90c76d79f535341852689473f9564d7055180d14e3913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6a7a50ea99c12c2ce90c76d79f535341852689473f9564d7055180d14e3913->enter($__internal_db6a7a50ea99c12c2ce90c76d79f535341852689473f9564d7055180d14e3913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:ping.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db6a7a50ea99c12c2ce90c76d79f535341852689473f9564d7055180d14e3913->leave($__internal_db6a7a50ea99c12c2ce90c76d79f535341852689473f9564d7055180d14e3913_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e130286f4e3dfa49232fcc3090fe2c46b890ca018790868e5684be8f328a94ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e130286f4e3dfa49232fcc3090fe2c46b890ca018790868e5684be8f328a94ed->enter($__internal_e130286f4e3dfa49232fcc3090fe2c46b890ca018790868e5684be8f328a94ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping.html.twig"));

        // line 6
        echo "    Test de connection - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e130286f4e3dfa49232fcc3090fe2c46b890ca018790868e5684be8f328a94ed->leave($__internal_e130286f4e3dfa49232fcc3090fe2c46b890ca018790868e5684be8f328a94ed_prof);

    }

    // line 9
    public function block_bouton($context, array $blocks = array())
    {
        $__internal_16233fe175689fc669a0c9a2e4bca08ca8c4f2b3ca3869c4f79a40afa03acff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16233fe175689fc669a0c9a2e4bca08ca8c4f2b3ca3869c4f79a40afa03acff0->enter($__internal_16233fe175689fc669a0c9a2e4bca08ca8c4f2b3ca3869c4f79a40afa03acff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping.html.twig"));

        // line 10
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_home");
        echo "\" class=\"btn btn-warning\">Se déconnecter</a>
";
        
        $__internal_16233fe175689fc669a0c9a2e4bca08ca8c4f2b3ca3869c4f79a40afa03acff0->leave($__internal_16233fe175689fc669a0c9a2e4bca08ca8c4f2b3ca3869c4f79a40afa03acff0_prof);

    }

    // line 13
    public function block_link($context, array $blocks = array())
    {
        $__internal_e0d2798d76b77944c8fc56c05202dce16644d9df87050c9294232d91862fc8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d2798d76b77944c8fc56c05202dce16644d9df87050c9294232d91862fc8f3->enter($__internal_e0d2798d76b77944c8fc56c05202dce16644d9df87050c9294232d91862fc8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping.html.twig"));

        // line 14
        echo "    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_add");
        echo "\">Créer une machine</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_addsalle");
        echo "\">Créer une salle</a></li>
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifmachine");
        echo "\">Modifier/Supprimer une machine</a></li>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifsalle");
        echo "\">Modifier/Supprimer une salle</a></li>
        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_ping");
        echo "\">Tester la connection d'une salle</a></li>
    </ul>
";
        
        $__internal_e0d2798d76b77944c8fc56c05202dce16644d9df87050c9294232d91862fc8f3->leave($__internal_e0d2798d76b77944c8fc56c05202dce16644d9df87050c9294232d91862fc8f3_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_0954c8634dd34e611f3a6e9a66f16b5bff6dff7844f589167f0f15adc1f51c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0954c8634dd34e611f3a6e9a66f16b5bff6dff7844f589167f0f15adc1f51c53->enter($__internal_0954c8634dd34e611f3a6e9a66f16b5bff6dff7844f589167f0f15adc1f51c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping.html.twig"));

        // line 26
        echo "
    <h2>Test de ping</h2>

    ";
        // line 29
        echo twig_include($this->env, $context, "OCPlatformeBundle:Advert:form.html.twig");
        echo "


    ";
        // line 32
        $context["ipexist"] = "Cet ip ne correspond à aucune machine";
        // line 33
        echo "    ";
        ob_start();
        $context["etatmachine"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "    ";
        $context["connectee"] = 0;
        // line 35
        echo "
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 37
            echo "
        ";
            // line 38
            if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "ipMachine", array()))) {
                // line 39
                echo "            ";
                $context["ipexist"] = "Cet ip existe";
                // line 40
                echo "            ";
                $context["connectee"] = 1;
                // line 41
                echo "            ";
                if (($this->getAttribute($context["machine"], "etatMachine", array()) == "Eteinte")) {
                    // line 42
                    echo "                ";
                    $context["etatmachine"] = " mais la machine est éteinte.";
                    // line 43
                    echo "                ";
                    $context["connectee"] = 0;
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            // line 46
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    ";
        // line 49
        if (((isset($context["connectee"]) ? $context["connectee"] : $this->getContext($context, "connectee")) == 1)) {
            // line 50
            echo "        <h3>Cette machine est bien connectée !</h3>

        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "Ipmachine", array()))) {
                    // line 53
                    echo "            <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                <p>
                    Ip : ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                    Auteur : ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                    Etat : ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                    Date : ";
                    // line 58
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["machine"], "dateMachine", array()), "j F Y"), "html", null, true);
                    echo "
                </p>
            </div>
            <div class=\"col-xs-8 .col-md-9\" style=\"padding: 60px\"></div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
    ";
        } else {
            // line 65
            echo "
        <h3>";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["ipexist"]) ? $context["ipexist"] : $this->getContext($context, "ipexist")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["etatmachine"]) ? $context["etatmachine"] : $this->getContext($context, "etatmachine")), "html", null, true);
            echo "</h3>
        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "Ipmachine", array()))) {
                    // line 68
                    echo "            <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                <p>
                    Ip : ";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                    Auteur : ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                    Etat : ";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                    Date : ";
                    // line 73
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["machine"], "dateMachine", array()), "j F Y"), "html", null, true);
                    echo "
                </p>
            </div>
            <div class=\"col-xs-8 .col-md-9\" style=\"padding: 60px\"></div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "    ";
        }
        // line 79
        echo "
    <p>
        <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

";
        
        $__internal_0954c8634dd34e611f3a6e9a66f16b5bff6dff7844f589167f0f15adc1f51c53->leave($__internal_0954c8634dd34e611f3a6e9a66f16b5bff6dff7844f589167f0f15adc1f51c53_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:ping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 81,  270 => 79,  267 => 78,  255 => 73,  251 => 72,  247 => 71,  243 => 70,  237 => 68,  232 => 67,  226 => 66,  223 => 65,  219 => 63,  207 => 58,  203 => 57,  199 => 56,  195 => 55,  189 => 53,  184 => 52,  180 => 50,  178 => 49,  175 => 48,  168 => 46,  165 => 45,  162 => 44,  159 => 43,  156 => 42,  153 => 41,  150 => 40,  147 => 39,  145 => 38,  142 => 37,  138 => 36,  135 => 35,  132 => 34,  128 => 33,  126 => 32,  120 => 29,  115 => 26,  109 => 25,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 14,  69 => 13,  59 => 10,  53 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformeBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformeBundle::layout.html.twig\" %}

{% block title %}
    Test de connection - {{ parent() }}
{% endblock %}

{% block bouton %}
    <a href=\"{{ path('oc_platforme_home') }}\" class=\"btn btn-warning\">Se déconnecter</a>
{% endblock %}

{% block link %}
    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"{{ path('oc_platforme_view') }}\">Accueil</a></li>
        <li><a href=\"{{ path('oc_platforme_add') }}\">Créer une machine</a></li>
        <li><a href=\"{{ path('oc_platforme_addsalle') }}\">Créer une salle</a></li>
        <li><a href=\"{{ path('oc_platforme_modifmachine') }}\">Modifier/Supprimer une machine</a></li>
        <li><a href=\"{{ path('oc_platforme_modifsalle') }}\">Modifier/Supprimer une salle</a></li>
        <li><a href=\"{{ path('oc_platforme_ping') }}\">Tester la connection d'une salle</a></li>
    </ul>
{% endblock %}

{% block body %}

    <h2>Test de ping</h2>

    {{ include(\"OCPlatformeBundle:Advert:form.html.twig\") }}


    {% set ipexist = \"Cet ip ne correspond à aucune machine\"%}
    {% set etatmachine%}{% endset %}
    {% set connectee = 0 %}

    {% for machine in machines %}

        {% if iptest == machine.ipMachine %}
            {% set ipexist = \"Cet ip existe\"%}
            {% set connectee = 1 %}
            {% if  machine.etatMachine == 'Eteinte'%}
                {% set etatmachine = ' mais la machine est éteinte.'%}
                {% set connectee = 0 %}
            {% endif %}
        {% endif %}

    {% endfor %}

    {% if connectee == 1 %}
        <h3>Cette machine est bien connectée !</h3>

        {% for machine in machines if iptest == machine.Ipmachine%}
            <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid {{ machine.colorMachine }}; border-radius: 15px; margin-bottom: 20\">
                <p>
                    Ip : {{ machine.ipMachine }}<br>
                    Auteur : {{ machine.authorMachine }}<br>
                    Etat : {{ machine.etatMachine }}<br>
                    Date : {{ machine.dateMachine | date('j F Y') }}
                </p>
            </div>
            <div class=\"col-xs-8 .col-md-9\" style=\"padding: 60px\"></div>
        {% endfor %}

    {% else %}

        <h3>{{ ipexist }} {{ etatmachine }}</h3>
        {% for machine in machines if iptest == machine.Ipmachine%}
            <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid {{ machine.colorMachine }}; border-radius: 15px; margin-bottom: 20\">
                <p>
                    Ip : {{ machine.ipMachine }}<br>
                    Auteur : {{ machine.authorMachine }}<br>
                    Etat : {{ machine.etatMachine }}<br>
                    Date : {{ machine.dateMachine | date('j F Y') }}
                </p>
            </div>
            <div class=\"col-xs-8 .col-md-9\" style=\"padding: 60px\"></div>
        {% endfor %}
    {% endif %}

    <p>
        <a href=\"{{ path('oc_platforme_view') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

{% endblock %}", "OCPlatformeBundle:Advert:ping.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/Advert/ping.html.twig");
    }
}

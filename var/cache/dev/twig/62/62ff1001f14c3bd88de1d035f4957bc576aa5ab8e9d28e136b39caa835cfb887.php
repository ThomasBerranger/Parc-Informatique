<?php

/* OCPlatformeBundle:Advert:ping2.html.twig */
class __TwigTemplate_2318b77ff3c0e1906e417ad12858c5222beaec412deb64738f6c48feeba8863f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:ping2.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_45eb0187b2139d1c5c5a728b3fc9984672a8bd3aa818029ef1b87a0475e17ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45eb0187b2139d1c5c5a728b3fc9984672a8bd3aa818029ef1b87a0475e17ebd->enter($__internal_45eb0187b2139d1c5c5a728b3fc9984672a8bd3aa818029ef1b87a0475e17ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:ping2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45eb0187b2139d1c5c5a728b3fc9984672a8bd3aa818029ef1b87a0475e17ebd->leave($__internal_45eb0187b2139d1c5c5a728b3fc9984672a8bd3aa818029ef1b87a0475e17ebd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_14977010966b791404e3afcb5a8658c5e7d482179a43f4bd6cd981857c8a38fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14977010966b791404e3afcb5a8658c5e7d482179a43f4bd6cd981857c8a38fc->enter($__internal_14977010966b791404e3afcb5a8658c5e7d482179a43f4bd6cd981857c8a38fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping2.html.twig"));

        // line 6
        echo "    Test ping - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_14977010966b791404e3afcb5a8658c5e7d482179a43f4bd6cd981857c8a38fc->leave($__internal_14977010966b791404e3afcb5a8658c5e7d482179a43f4bd6cd981857c8a38fc_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_782bde945d579ff0037b521ca58fcd770ae8d35d7ad7d828fd4d64b7d5ef312c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782bde945d579ff0037b521ca58fcd770ae8d35d7ad7d828fd4d64b7d5ef312c->enter($__internal_782bde945d579ff0037b521ca58fcd770ae8d35d7ad7d828fd4d64b7d5ef312c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping2.html.twig"));

        // line 10
        echo "    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_home");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_ping");
        echo "\">Tester la connection d'une salle</a></li>
    </ul>
";
        
        $__internal_782bde945d579ff0037b521ca58fcd770ae8d35d7ad7d828fd4d64b7d5ef312c->leave($__internal_782bde945d579ff0037b521ca58fcd770ae8d35d7ad7d828fd4d64b7d5ef312c_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9e3d1515eef9a6c74ecc42ee5e5b024cfd851425b0f3e34c2cd50660005482c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e3d1515eef9a6c74ecc42ee5e5b024cfd851425b0f3e34c2cd50660005482c->enter($__internal_a9e3d1515eef9a6c74ecc42ee5e5b024cfd851425b0f3e34c2cd50660005482c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping2.html.twig"));

        // line 18
        echo "
    <h2>Test de ping</h2>

    ";
        // line 21
        echo twig_include($this->env, $context, "OCPlatformeBundle:Advert:form.html.twig");
        echo "


    ";
        // line 24
        $context["ipexist"] = "Cet ip ne correspond à aucune machine";
        // line 25
        echo "    ";
        ob_start();
        $context["etatmachine"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "    ";
        $context["connectee"] = 0;
        // line 27
        echo "
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 29
            echo "
        ";
            // line 30
            if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "ipMachine", array()))) {
                // line 31
                echo "            ";
                $context["ipexist"] = "Cet ip existe";
                // line 32
                echo "            ";
                $context["connectee"] = 1;
                // line 33
                echo "            ";
                if (($this->getAttribute($context["machine"], "etatMachine", array()) == "Eteinte")) {
                    // line 34
                    echo "                ";
                    $context["etatmachine"] = " mais la machine est éteinte.";
                    // line 35
                    echo "                ";
                    $context["connectee"] = 0;
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "        ";
            }
            // line 38
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    ";
        // line 41
        if (((isset($context["connectee"]) ? $context["connectee"] : $this->getContext($context, "connectee")) == 1)) {
            // line 42
            echo "        <h3>Cette machine est bien connectée !</h3>

        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "Ipmachine", array()))) {
                    // line 45
                    echo "            <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                <p>
                    Ip : ";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                    Auteur : ";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                    Etat : ";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                    Date : ";
                    // line 50
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
            // line 55
            echo "
    ";
        } else {
            // line 57
            echo "
        <h3>";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["ipexist"]) ? $context["ipexist"] : $this->getContext($context, "ipexist")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["etatmachine"]) ? $context["etatmachine"] : $this->getContext($context, "etatmachine")), "html", null, true);
            echo "</h3>
        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "Ipmachine", array()))) {
                    // line 60
                    echo "            <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                <p>
                    Ip : ";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                    Auteur : ";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                    Etat : ";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                    Date : ";
                    // line 65
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
            // line 70
            echo "    ";
        }
        // line 71
        echo "
    <p>
        <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

";
        
        $__internal_a9e3d1515eef9a6c74ecc42ee5e5b024cfd851425b0f3e34c2cd50660005482c->leave($__internal_a9e3d1515eef9a6c74ecc42ee5e5b024cfd851425b0f3e34c2cd50660005482c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:ping2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 73,  237 => 71,  234 => 70,  222 => 65,  218 => 64,  214 => 63,  210 => 62,  204 => 60,  199 => 59,  193 => 58,  190 => 57,  186 => 55,  174 => 50,  170 => 49,  166 => 48,  162 => 47,  156 => 45,  151 => 44,  147 => 42,  145 => 41,  142 => 40,  135 => 38,  132 => 37,  129 => 36,  126 => 35,  123 => 34,  120 => 33,  117 => 32,  114 => 31,  112 => 30,  109 => 29,  105 => 28,  102 => 27,  99 => 26,  95 => 25,  93 => 24,  87 => 21,  82 => 18,  76 => 17,  66 => 13,  62 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
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
    Test ping - {{ parent() }}
{% endblock %}

{% block link %}
    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"{{ path('oc_platforme_home') }}\">Accueil</a></li>
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

{% endblock %}", "OCPlatformeBundle:Advert:ping2.html.twig", "C:\\wamp64\\www\\Opmk\\src\\OC\\PlatformeBundle/Resources/views/Advert/ping2.html.twig");
    }
}

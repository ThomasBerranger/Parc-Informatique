<?php

/* OCPlatformeBundle:Advert:ping.html.twig */
class __TwigTemplate_f5c7b38f7322be90dbe5c941c4ed1563313d701ae9b8e7e328c8d2f01dd3733c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:ping.html.twig", 3);
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
        $__internal_fb91948f480a6c205fa99d6f0a694b8832323313f7a0bc95e7ce3580d53b247f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb91948f480a6c205fa99d6f0a694b8832323313f7a0bc95e7ce3580d53b247f->enter($__internal_fb91948f480a6c205fa99d6f0a694b8832323313f7a0bc95e7ce3580d53b247f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:ping.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb91948f480a6c205fa99d6f0a694b8832323313f7a0bc95e7ce3580d53b247f->leave($__internal_fb91948f480a6c205fa99d6f0a694b8832323313f7a0bc95e7ce3580d53b247f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_95c4856e47d274e48435596789416570f98dfde8a6059f3140e466b4d1a33486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c4856e47d274e48435596789416570f98dfde8a6059f3140e466b4d1a33486->enter($__internal_95c4856e47d274e48435596789416570f98dfde8a6059f3140e466b4d1a33486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping.html.twig"));

        // line 6
        echo "    Test ping - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_95c4856e47d274e48435596789416570f98dfde8a6059f3140e466b4d1a33486->leave($__internal_95c4856e47d274e48435596789416570f98dfde8a6059f3140e466b4d1a33486_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_16abbe8cd5e33ce1b5471d57fe94ace34a5e784da1104c7f61f07f12566b4bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16abbe8cd5e33ce1b5471d57fe94ace34a5e784da1104c7f61f07f12566b4bae->enter($__internal_16abbe8cd5e33ce1b5471d57fe94ace34a5e784da1104c7f61f07f12566b4bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping.html.twig"));

        // line 10
        echo "    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_add");
        echo "\">Créer une machine</a></li>
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_addsalle");
        echo "\">Créer une salle</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifmachine");
        echo "\">Modifier/Supprimer une machine</a></li>
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifsalle");
        echo "\">Modifier/Supprimer une salle</a></li>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_ping");
        echo "\">Tester la connection d'une salle</a></li>
    </ul>
";
        
        $__internal_16abbe8cd5e33ce1b5471d57fe94ace34a5e784da1104c7f61f07f12566b4bae->leave($__internal_16abbe8cd5e33ce1b5471d57fe94ace34a5e784da1104c7f61f07f12566b4bae_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a195b6160608bd4d22fd7c78f61044fb31c7d0e901b54b603b3b19a2294d953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a195b6160608bd4d22fd7c78f61044fb31c7d0e901b54b603b3b19a2294d953->enter($__internal_2a195b6160608bd4d22fd7c78f61044fb31c7d0e901b54b603b3b19a2294d953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping.html.twig"));

        // line 22
        echo "
    <h2>Test de ping</h2>

    ";
        // line 25
        echo twig_include($this->env, $context, "OCPlatformeBundle:Advert:form.html.twig");
        echo "


    ";
        // line 28
        $context["ipexist"] = "Cet ip ne correspond à aucune machine";
        // line 29
        echo "    ";
        ob_start();
        $context["etatmachine"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $context["connectee"] = 0;
        // line 31
        echo "
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 33
            echo "
        ";
            // line 34
            if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "ipMachine", array()))) {
                // line 35
                echo "            ";
                $context["ipexist"] = "Cet ip existe";
                // line 36
                echo "            ";
                $context["connectee"] = 1;
                // line 37
                echo "            ";
                if (($this->getAttribute($context["machine"], "etatMachine", array()) == "Eteinte")) {
                    // line 38
                    echo "                ";
                    $context["etatmachine"] = " mais la machine est éteinte.";
                    // line 39
                    echo "                ";
                    $context["connectee"] = 0;
                    // line 40
                    echo "            ";
                }
                // line 41
                echo "        ";
            }
            // line 42
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
    ";
        // line 45
        if (((isset($context["connectee"]) ? $context["connectee"] : $this->getContext($context, "connectee")) == 1)) {
            // line 46
            echo "        <h3>Cette machine est bien connectée !</h3>

        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "Ipmachine", array()))) {
                    // line 49
                    echo "            <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                <p>
                    Ip : ";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                    Auteur : ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                    Etat : ";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                    Date : ";
                    // line 54
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
            // line 59
            echo "
    ";
        } else {
            // line 61
            echo "
        <h3>";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["ipexist"]) ? $context["ipexist"] : $this->getContext($context, "ipexist")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["etatmachine"]) ? $context["etatmachine"] : $this->getContext($context, "etatmachine")), "html", null, true);
            echo "</h3>
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "Ipmachine", array()))) {
                    // line 64
                    echo "            <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                <p>
                    Ip : ";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                    Auteur : ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                    Etat : ";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                    Date : ";
                    // line 69
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
            // line 74
            echo "    ";
        }
        // line 75
        echo "
    <p>
        <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

";
        
        $__internal_2a195b6160608bd4d22fd7c78f61044fb31c7d0e901b54b603b3b19a2294d953->leave($__internal_2a195b6160608bd4d22fd7c78f61044fb31c7d0e901b54b603b3b19a2294d953_prof);

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
        return array (  257 => 77,  253 => 75,  250 => 74,  238 => 69,  234 => 68,  230 => 67,  226 => 66,  220 => 64,  215 => 63,  209 => 62,  206 => 61,  202 => 59,  190 => 54,  186 => 53,  182 => 52,  178 => 51,  172 => 49,  167 => 48,  163 => 46,  161 => 45,  158 => 44,  151 => 42,  148 => 41,  145 => 40,  142 => 39,  139 => 38,  136 => 37,  133 => 36,  130 => 35,  128 => 34,  125 => 33,  121 => 32,  118 => 31,  115 => 30,  111 => 29,  109 => 28,  103 => 25,  98 => 22,  92 => 21,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
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

{% endblock %}", "OCPlatformeBundle:Advert:ping.html.twig", "C:\\wamp64\\www\\Opmk\\src\\OC\\PlatformeBundle/Resources/views/Advert/ping.html.twig");
    }
}

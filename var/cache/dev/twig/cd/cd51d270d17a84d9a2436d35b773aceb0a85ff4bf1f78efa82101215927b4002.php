<?php

/* OCPlatformeBundle:Advert:ping2.html.twig */
class __TwigTemplate_6eeb465f8b1aa5065be6227a2b5d48feaa9a6cca0d8978b1fee929e53ff6bed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:ping2.html.twig", 3);
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
        $__internal_b9c5fea1ba6b3ac5c32b2dbee04bf585e0cc9413403e6cfb86bb061d2f345b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c5fea1ba6b3ac5c32b2dbee04bf585e0cc9413403e6cfb86bb061d2f345b0b->enter($__internal_b9c5fea1ba6b3ac5c32b2dbee04bf585e0cc9413403e6cfb86bb061d2f345b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:ping2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c5fea1ba6b3ac5c32b2dbee04bf585e0cc9413403e6cfb86bb061d2f345b0b->leave($__internal_b9c5fea1ba6b3ac5c32b2dbee04bf585e0cc9413403e6cfb86bb061d2f345b0b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_13b5193a616f7ac30fbf8a4ead1ff9b1a0b30bd755555fe7d9dab081a7f545b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b5193a616f7ac30fbf8a4ead1ff9b1a0b30bd755555fe7d9dab081a7f545b3->enter($__internal_13b5193a616f7ac30fbf8a4ead1ff9b1a0b30bd755555fe7d9dab081a7f545b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping2.html.twig"));

        // line 6
        echo "    Test de connection - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_13b5193a616f7ac30fbf8a4ead1ff9b1a0b30bd755555fe7d9dab081a7f545b3->leave($__internal_13b5193a616f7ac30fbf8a4ead1ff9b1a0b30bd755555fe7d9dab081a7f545b3_prof);

    }

    // line 9
    public function block_bouton($context, array $blocks = array())
    {
        $__internal_e334fb0a48bb16d9cca0840f1828b7567becabc43197b64cfdcd6021d1a3d0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e334fb0a48bb16d9cca0840f1828b7567becabc43197b64cfdcd6021d1a3d0b2->enter($__internal_e334fb0a48bb16d9cca0840f1828b7567becabc43197b64cfdcd6021d1a3d0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping2.html.twig"));

        // line 10
        echo "    <!-- Button trigger modal -->
    <button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
        Se connecter en administrateur
    </button>

    <!-- Modal -->

    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Connexion en tant qu'administrateur</h4>
                </div>
                <div class=\"modal-body\">
                    <form class=\"form-horizontal\" method=\"POST\" action=\"index\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Pseudo</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"  placeholder=\"\" name=\"pseudo\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Mot de passe</label>
                            <div class=\"col-sm-10\">
                                <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"\" name=\"mdp\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e334fb0a48bb16d9cca0840f1828b7567becabc43197b64cfdcd6021d1a3d0b2->leave($__internal_e334fb0a48bb16d9cca0840f1828b7567becabc43197b64cfdcd6021d1a3d0b2_prof);

    }

    // line 53
    public function block_link($context, array $blocks = array())
    {
        $__internal_1a7e264048d65a62bbcfe34900e2c7c4639bd3044427e2c48f906df6f702622a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7e264048d65a62bbcfe34900e2c7c4639bd3044427e2c48f906df6f702622a->enter($__internal_1a7e264048d65a62bbcfe34900e2c7c4639bd3044427e2c48f906df6f702622a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping2.html.twig"));

        // line 54
        echo "    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_home");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_ping");
        echo "\">Tester la connexion d'une salle</a></li>
    </ul>
";
        
        $__internal_1a7e264048d65a62bbcfe34900e2c7c4639bd3044427e2c48f906df6f702622a->leave($__internal_1a7e264048d65a62bbcfe34900e2c7c4639bd3044427e2c48f906df6f702622a_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_116a1af818371557ff3a96470b385b9f031e590e5cadacebf46bb44b24e8542b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116a1af818371557ff3a96470b385b9f031e590e5cadacebf46bb44b24e8542b->enter($__internal_116a1af818371557ff3a96470b385b9f031e590e5cadacebf46bb44b24e8542b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:ping2.html.twig"));

        // line 62
        echo "
    <h2>Test de ping</h2>

    ";
        // line 65
        echo twig_include($this->env, $context, "OCPlatformeBundle:Advert:form.html.twig");
        echo "


    ";
        // line 68
        $context["ipexist"] = "Cet ip ne correspond à aucune machine";
        // line 69
        echo "    ";
        ob_start();
        $context["etatmachine"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 70
        echo "    ";
        $context["connectee"] = 0;
        // line 71
        echo "
    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 73
            echo "
        ";
            // line 74
            if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "ipMachine", array()))) {
                // line 75
                echo "            ";
                $context["ipexist"] = "Cet ip existe";
                // line 76
                echo "            ";
                $context["connectee"] = 1;
                // line 77
                echo "            ";
                if (($this->getAttribute($context["machine"], "etatMachine", array()) == "Eteinte")) {
                    // line 78
                    echo "                ";
                    $context["etatmachine"] = " mais la machine est éteinte.";
                    // line 79
                    echo "                ";
                    $context["connectee"] = 0;
                    // line 80
                    echo "            ";
                }
                // line 81
                echo "        ";
            }
            // line 82
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
    ";
        // line 85
        if (((isset($context["connectee"]) ? $context["connectee"] : $this->getContext($context, "connectee")) == 1)) {
            // line 86
            echo "        <h3>Cette machine est bien connectée !</h3>

        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "Ipmachine", array()))) {
                    // line 89
                    echo "            <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                <p>
                    Ip : ";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                    Auteur : ";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                    Etat : ";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                    Date : ";
                    // line 94
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
            // line 99
            echo "
    ";
        } else {
            // line 101
            echo "
        <h3>";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["ipexist"]) ? $context["ipexist"] : $this->getContext($context, "ipexist")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["etatmachine"]) ? $context["etatmachine"] : $this->getContext($context, "etatmachine")), "html", null, true);
            echo "</h3>
        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                if (((isset($context["iptest"]) ? $context["iptest"] : $this->getContext($context, "iptest")) == $this->getAttribute($context["machine"], "Ipmachine", array()))) {
                    // line 104
                    echo "            <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                <p>
                    Ip : ";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                    Auteur : ";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                    Etat : ";
                    // line 108
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                    Date : ";
                    // line 109
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
            // line 114
            echo "    ";
        }
        // line 115
        echo "
    <p>
        <a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

";
        
        $__internal_116a1af818371557ff3a96470b385b9f031e590e5cadacebf46bb44b24e8542b->leave($__internal_116a1af818371557ff3a96470b385b9f031e590e5cadacebf46bb44b24e8542b_prof);

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
        return array (  296 => 117,  292 => 115,  289 => 114,  277 => 109,  273 => 108,  269 => 107,  265 => 106,  259 => 104,  254 => 103,  248 => 102,  245 => 101,  241 => 99,  229 => 94,  225 => 93,  221 => 92,  217 => 91,  211 => 89,  206 => 88,  202 => 86,  200 => 85,  197 => 84,  190 => 82,  187 => 81,  184 => 80,  181 => 79,  178 => 78,  175 => 77,  172 => 76,  169 => 75,  167 => 74,  164 => 73,  160 => 72,  157 => 71,  154 => 70,  150 => 69,  148 => 68,  142 => 65,  137 => 62,  131 => 61,  121 => 57,  117 => 56,  113 => 54,  107 => 53,  59 => 10,  53 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
    <!-- Button trigger modal -->
    <button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
        Se connecter en administrateur
    </button>

    <!-- Modal -->

    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Connexion en tant qu'administrateur</h4>
                </div>
                <div class=\"modal-body\">
                    <form class=\"form-horizontal\" method=\"POST\" action=\"index\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Pseudo</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\"  placeholder=\"\" name=\"pseudo\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Mot de passe</label>
                            <div class=\"col-sm-10\">
                                <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"\" name=\"mdp\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block link %}
    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"{{ path('oc_platforme_home') }}\">Accueil</a></li>
        <li><a href=\"{{ path('oc_platforme_ping') }}\">Tester la connexion d'une salle</a></li>
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

{% endblock %}", "OCPlatformeBundle:Advert:ping2.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/Advert/ping2.html.twig");
    }
}

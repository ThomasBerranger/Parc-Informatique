<?php

/* OCPlatformeBundle:Advert:view.html.twig */
class __TwigTemplate_994bfd1b8ca1bd23a852698a1ed97eb2ec5699edac863a5718aa6eaa5b965884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'refresh' => array($this, 'block_refresh'),
            'title' => array($this, 'block_title'),
            'bouton' => array($this, 'block_bouton'),
            'link' => array($this, 'block_link'),
            'ocplatforme_body' => array($this, 'block_ocplatforme_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e21cec1d30ca0421dd3d57f880c64d2613e4b538bcb7e76ecc9a89320ccb474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e21cec1d30ca0421dd3d57f880c64d2613e4b538bcb7e76ecc9a89320ccb474->enter($__internal_4e21cec1d30ca0421dd3d57f880c64d2613e4b538bcb7e76ecc9a89320ccb474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e21cec1d30ca0421dd3d57f880c64d2613e4b538bcb7e76ecc9a89320ccb474->leave($__internal_4e21cec1d30ca0421dd3d57f880c64d2613e4b538bcb7e76ecc9a89320ccb474_prof);

    }

    // line 5
    public function block_refresh($context, array $blocks = array())
    {
        $__internal_6a2b7b418065a2b90238d12ad6891ffa332626c3cbbba66158559a2eeea07891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2b7b418065a2b90238d12ad6891ffa332626c3cbbba66158559a2eeea07891->enter($__internal_6a2b7b418065a2b90238d12ad6891ffa332626c3cbbba66158559a2eeea07891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        echo "<meta http-equiv=\"refresh\" content=\"30\" >";
        
        $__internal_6a2b7b418065a2b90238d12ad6891ffa332626c3cbbba66158559a2eeea07891->leave($__internal_6a2b7b418065a2b90238d12ad6891ffa332626c3cbbba66158559a2eeea07891_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0079e1ad50a707968e31f3f1389304cc0d2b5312ed75dcb60c98784ab07eced1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0079e1ad50a707968e31f3f1389304cc0d2b5312ed75dcb60c98784ab07eced1->enter($__internal_0079e1ad50a707968e31f3f1389304cc0d2b5312ed75dcb60c98784ab07eced1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        // line 8
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0079e1ad50a707968e31f3f1389304cc0d2b5312ed75dcb60c98784ab07eced1->leave($__internal_0079e1ad50a707968e31f3f1389304cc0d2b5312ed75dcb60c98784ab07eced1_prof);

    }

    // line 11
    public function block_bouton($context, array $blocks = array())
    {
        $__internal_7637d61ba964bc16ac1c7c4d4ebb3c3360255ed18bc43ca954f42eedfec0bdae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7637d61ba964bc16ac1c7c4d4ebb3c3360255ed18bc43ca954f42eedfec0bdae->enter($__internal_7637d61ba964bc16ac1c7c4d4ebb3c3360255ed18bc43ca954f42eedfec0bdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        // line 12
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_home");
        echo "\" class=\"btn btn-warning\">Se déconnecter</a>
";
        
        $__internal_7637d61ba964bc16ac1c7c4d4ebb3c3360255ed18bc43ca954f42eedfec0bdae->leave($__internal_7637d61ba964bc16ac1c7c4d4ebb3c3360255ed18bc43ca954f42eedfec0bdae_prof);

    }

    // line 15
    public function block_link($context, array $blocks = array())
    {
        $__internal_01f0d63491fe7730dbe2fab619fab394e86fe9505404803fb538e36210d75dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f0d63491fe7730dbe2fab619fab394e86fe9505404803fb538e36210d75dee->enter($__internal_01f0d63491fe7730dbe2fab619fab394e86fe9505404803fb538e36210d75dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        // line 16
        echo "<h3>Les pages</h3>
<ul class=\"nav nav-pills nav-stacked\">
    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\">Accueil</a></li>
    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_add");
        echo "\">Créer une machine</a></li>
    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_addsalle");
        echo "\">Créer une salle</a></li>
    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifmachine");
        echo "\">Modifier/Supprimer une machine</a></li>
    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifsalle");
        echo "\">Modifier/Supprimer une salle</a></li>
    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_ping");
        echo "\">Tester la connexion d'une salle</a></li>
</ul>
";
        
        $__internal_01f0d63491fe7730dbe2fab619fab394e86fe9505404803fb538e36210d75dee->leave($__internal_01f0d63491fe7730dbe2fab619fab394e86fe9505404803fb538e36210d75dee_prof);

    }

    // line 27
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_61e94fcdcc87ef080b0636624f24b406f6709020a4b1e2f0f21dd6ae00c1d09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e94fcdcc87ef080b0636624f24b406f6709020a4b1e2f0f21dd6ae00c1d09e->enter($__internal_61e94fcdcc87ef080b0636624f24b406f6709020a4b1e2f0f21dd6ae00c1d09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        // line 28
        echo "
    <h2>Les salles et les machines :</h2>

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) ? $context["salles"] : $this->getContext($context, "salles")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 32
            echo "        <div class=\"row\" style=\"text-align: center; text-decoration: underline; border: 15px solid ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "colorSalle", array()), "html", null, true);
            echo "; border-radius: 30px\">
            <h3>Salle n°";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "numSalle", array()), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nomSalle", array()), "html", null, true);
            echo "\"</h3>
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                // line 35
                echo "            ";
                if (($this->getAttribute($context["salle"], "numSalle", array()) == $this->getAttribute($context["machine"], "numsalleMachine", array()))) {
                    // line 36
                    echo "                <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                    <p>
                        Ip : ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                        Auteur : ";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                        Etat : ";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                        Date : ";
                    // line 41
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["machine"], "dateMachine", array()), "j F Y"), "html", null, true);
                    echo "
                    </p>
                </div>
            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </div>
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
";
        
        $__internal_61e94fcdcc87ef080b0636624f24b406f6709020a4b1e2f0f21dd6ae00c1d09e->leave($__internal_61e94fcdcc87ef080b0636624f24b406f6709020a4b1e2f0f21dd6ae00c1d09e_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 49,  186 => 46,  180 => 45,  173 => 41,  169 => 40,  165 => 39,  161 => 38,  155 => 36,  152 => 35,  148 => 34,  142 => 33,  137 => 32,  133 => 31,  128 => 28,  122 => 27,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 16,  82 => 15,  72 => 12,  66 => 11,  56 => 8,  50 => 7,  38 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformeBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformeBundle::layout.html.twig\" %}

{% block refresh %}<meta http-equiv=\"refresh\" content=\"30\" >{% endblock %}

{% block title %}
    Accueil - {{ parent() }}
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
    <li><a href=\"{{ path('oc_platforme_ping') }}\">Tester la connexion d'une salle</a></li>
</ul>
{% endblock %}

{% block ocplatforme_body %}

    <h2>Les salles et les machines :</h2>

    {% for salle in salles %}
        <div class=\"row\" style=\"text-align: center; text-decoration: underline; border: 15px solid {{ salle.colorSalle }}; border-radius: 30px\">
            <h3>Salle n°{{ salle.numSalle }} \"{{ salle.nomSalle }}\"</h3>
        {% for machine in machines %}
            {% if  salle.numSalle  ==  machine.numsalleMachine  %}
                <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid {{ machine.colorMachine }}; border-radius: 15px; margin-bottom: 20\">
                    <p>
                        Ip : {{ machine.ipMachine }}<br>
                        Auteur : {{ machine.authorMachine }}<br>
                        Etat : {{ machine.etatMachine }}<br>
                        Date : {{ machine.dateMachine | date('j F Y') }}
                    </p>
                </div>
            {% endif %}
        {% endfor %}
        </div>
        <br>
    {% endfor %}

{% endblock %}", "OCPlatformeBundle:Advert:view.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/Advert/view.html.twig");
    }
}

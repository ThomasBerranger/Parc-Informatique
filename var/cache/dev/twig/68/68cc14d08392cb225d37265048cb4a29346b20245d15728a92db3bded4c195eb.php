<?php

/* OCPlatformeBundle:Advert:view.html.twig */
class __TwigTemplate_e73f0f0dfd2941c04062186f75322851ed4ad862c7dd77e01d75b112b9efffa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'refresh' => array($this, 'block_refresh'),
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
        $__internal_8b1bdbf63901c39009cfa6f192c2aa056df02522a7b1dfe45efe5468f385114a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1bdbf63901c39009cfa6f192c2aa056df02522a7b1dfe45efe5468f385114a->enter($__internal_8b1bdbf63901c39009cfa6f192c2aa056df02522a7b1dfe45efe5468f385114a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b1bdbf63901c39009cfa6f192c2aa056df02522a7b1dfe45efe5468f385114a->leave($__internal_8b1bdbf63901c39009cfa6f192c2aa056df02522a7b1dfe45efe5468f385114a_prof);

    }

    // line 5
    public function block_refresh($context, array $blocks = array())
    {
        $__internal_d0644ebb4085eeb69d101b4ddd9a367c6189eb14270676ac8bcbb8aa47b51a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0644ebb4085eeb69d101b4ddd9a367c6189eb14270676ac8bcbb8aa47b51a1b->enter($__internal_d0644ebb4085eeb69d101b4ddd9a367c6189eb14270676ac8bcbb8aa47b51a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        echo "<meta http-equiv=\"refresh\" content=\"30\" >";
        
        $__internal_d0644ebb4085eeb69d101b4ddd9a367c6189eb14270676ac8bcbb8aa47b51a1b->leave($__internal_d0644ebb4085eeb69d101b4ddd9a367c6189eb14270676ac8bcbb8aa47b51a1b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_94083226fa98b86d93aaf91ba0d3c999bc0c8bf3f4823d666e029b268d435b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94083226fa98b86d93aaf91ba0d3c999bc0c8bf3f4823d666e029b268d435b8a->enter($__internal_94083226fa98b86d93aaf91ba0d3c999bc0c8bf3f4823d666e029b268d435b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        // line 7
        echo "    Machines - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_94083226fa98b86d93aaf91ba0d3c999bc0c8bf3f4823d666e029b268d435b8a->leave($__internal_94083226fa98b86d93aaf91ba0d3c999bc0c8bf3f4823d666e029b268d435b8a_prof);

    }

    // line 10
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_bf6070b3192757c5ba30c884563c5c38d396ac5911b1c65861b49b5b9f4f0aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6070b3192757c5ba30c884563c5c38d396ac5911b1c65861b49b5b9f4f0aa0->enter($__internal_bf6070b3192757c5ba30c884563c5c38d396ac5911b1c65861b49b5b9f4f0aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        // line 11
        echo "
    <h2>Les salles et les machines :</h2>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) ? $context["salles"] : $this->getContext($context, "salles")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 15
            echo "        <div class=\"row\" style=\"text-align: center; text-decoration: underline; border: 15px solid ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "colorSalle", array()), "html", null, true);
            echo "; border-radius: 30px\">
            <h3>Salle n°";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "numSalle", array()), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nomSalle", array()), "html", null, true);
            echo "\"</h3>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                // line 18
                echo "            ";
                if (($this->getAttribute($context["salle"], "numSalle", array()) == $this->getAttribute($context["machine"], "numsalleMachine", array()))) {
                    // line 19
                    echo "                <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                    <p>
                        Ip : ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                        Auteur : ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                        Etat : ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                        Date : ";
                    // line 24
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["machine"], "dateMachine", array()), "j F Y"), "html", null, true);
                    echo "
                    </p>
                </div>
            ";
                }
                // line 28
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </div>
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
";
        
        $__internal_bf6070b3192757c5ba30c884563c5c38d396ac5911b1c65861b49b5b9f4f0aa0->leave($__internal_bf6070b3192757c5ba30c884563c5c38d396ac5911b1c65861b49b5b9f4f0aa0_prof);

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
        return array (  136 => 32,  128 => 29,  122 => 28,  115 => 24,  111 => 23,  107 => 22,  103 => 21,  97 => 19,  94 => 18,  90 => 17,  84 => 16,  79 => 15,  75 => 14,  70 => 11,  64 => 10,  54 => 7,  48 => 6,  36 => 5,  11 => 3,);
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
    Machines - {{ parent() }}
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

{% endblock %}", "OCPlatformeBundle:Advert:view.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\src\\OC\\PlatformeBundle/Resources/views/Advert/view.html.twig");
    }
}

<?php

/* OCPlatformeBundle:Advert:index.html.twig */
class __TwigTemplate_13907d8cc42e91e36cc5092a089d81709f70930846543504613ad815ddbbeca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'refresh' => array($this, 'block_refresh'),
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
        $__internal_76af2a02607d01509fd8ea6b2d3a92211b44e2d8cfdf8cecc05879b0fb20fd54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76af2a02607d01509fd8ea6b2d3a92211b44e2d8cfdf8cecc05879b0fb20fd54->enter($__internal_76af2a02607d01509fd8ea6b2d3a92211b44e2d8cfdf8cecc05879b0fb20fd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76af2a02607d01509fd8ea6b2d3a92211b44e2d8cfdf8cecc05879b0fb20fd54->leave($__internal_76af2a02607d01509fd8ea6b2d3a92211b44e2d8cfdf8cecc05879b0fb20fd54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_099fc1e25f09da8718b1332f3aee1271f766304ab36cb1ac8626c3386f99a11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099fc1e25f09da8718b1332f3aee1271f766304ab36cb1ac8626c3386f99a11a->enter($__internal_099fc1e25f09da8718b1332f3aee1271f766304ab36cb1ac8626c3386f99a11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:index.html.twig"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_099fc1e25f09da8718b1332f3aee1271f766304ab36cb1ac8626c3386f99a11a->leave($__internal_099fc1e25f09da8718b1332f3aee1271f766304ab36cb1ac8626c3386f99a11a_prof);

    }

    // line 9
    public function block_refresh($context, array $blocks = array())
    {
        $__internal_5693648ec76bd708ac74b29d82cf128d37839fa118a4f819d59e6c959b7a2b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5693648ec76bd708ac74b29d82cf128d37839fa118a4f819d59e6c959b7a2b87->enter($__internal_5693648ec76bd708ac74b29d82cf128d37839fa118a4f819d59e6c959b7a2b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:index.html.twig"));

        echo "<meta http-equiv=\"refresh\" content=\"30\" >";
        
        $__internal_5693648ec76bd708ac74b29d82cf128d37839fa118a4f819d59e6c959b7a2b87->leave($__internal_5693648ec76bd708ac74b29d82cf128d37839fa118a4f819d59e6c959b7a2b87_prof);

    }

    // line 11
    public function block_link($context, array $blocks = array())
    {
        $__internal_ac8d0f06adf882ad82e2b48c83969e7eada65a729cd7b1cb946e5d8abe9eadbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8d0f06adf882ad82e2b48c83969e7eada65a729cd7b1cb946e5d8abe9eadbf->enter($__internal_ac8d0f06adf882ad82e2b48c83969e7eada65a729cd7b1cb946e5d8abe9eadbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:index.html.twig"));

        // line 12
        echo "    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_home");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_ping2");
        echo "\">Tester la connection d'une salle</a></li>
    </ul>
";
        
        $__internal_ac8d0f06adf882ad82e2b48c83969e7eada65a729cd7b1cb946e5d8abe9eadbf->leave($__internal_ac8d0f06adf882ad82e2b48c83969e7eada65a729cd7b1cb946e5d8abe9eadbf_prof);

    }

    // line 19
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_264ce54d3326c418ac43500c6ab76d10054e6ce151336af8a5f3e0e2df5d6903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264ce54d3326c418ac43500c6ab76d10054e6ce151336af8a5f3e0e2df5d6903->enter($__internal_264ce54d3326c418ac43500c6ab76d10054e6ce151336af8a5f3e0e2df5d6903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:index.html.twig"));

        // line 20
        echo "
    <h2>Les salles et les machines :</h2>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) ? $context["salles"] : $this->getContext($context, "salles")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 24
            echo "        <div class=\"row\" style=\"text-align: center; text-decoration: underline; border: 15px solid ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "colorSalle", array()), "html", null, true);
            echo "; border-radius: 30px\">
            <h3>Salle n°";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "numSalle", array()), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nomSalle", array()), "html", null, true);
            echo "\"</h3>
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                // line 27
                echo "                ";
                if (($this->getAttribute($context["salle"], "numSalle", array()) == $this->getAttribute($context["machine"], "numsalleMachine", array()))) {
                    // line 28
                    echo "                    <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                        <p>
                            Ip : ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                            Auteur : ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                            Etat : ";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                            Date : ";
                    // line 33
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["machine"], "dateMachine", array()), "j F Y"), "html", null, true);
                    echo "
                        </p>
                    </div>
                ";
                }
                // line 37
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </div>
        <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        
        $__internal_264ce54d3326c418ac43500c6ab76d10054e6ce151336af8a5f3e0e2df5d6903->leave($__internal_264ce54d3326c418ac43500c6ab76d10054e6ce151336af8a5f3e0e2df5d6903_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 41,  153 => 38,  147 => 37,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  122 => 28,  119 => 27,  115 => 26,  109 => 25,  104 => 24,  100 => 23,  95 => 20,  89 => 19,  79 => 15,  75 => 14,  71 => 12,  65 => 11,  53 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformeBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block refresh %}<meta http-equiv=\"refresh\" content=\"30\" >{% endblock %}

{% block link %}
    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"{{ path('oc_platforme_home') }}\">Accueil</a></li>
        <li><a href=\"{{ path('oc_platforme_ping2') }}\">Tester la connection d'une salle</a></li>
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

{% endblock %}", "OCPlatformeBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Opmk\\src\\OC\\PlatformeBundle/Resources/views/Advert/index.html.twig");
    }
}

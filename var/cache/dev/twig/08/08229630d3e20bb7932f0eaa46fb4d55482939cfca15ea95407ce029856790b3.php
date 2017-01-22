<?php

/* OCPlatformeBundle:Advert:view.html.twig */
class __TwigTemplate_3a7a1963533e5340db292100a77d0ea864faa89c0c05079fcc1e9b320532a199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'refresh' => array($this, 'block_refresh'),
            'title' => array($this, 'block_title'),
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
        $__internal_3bb5085298eea0933dab9894d1a952fba7d91feba742ee76d58cde913389e506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb5085298eea0933dab9894d1a952fba7d91feba742ee76d58cde913389e506->enter($__internal_3bb5085298eea0933dab9894d1a952fba7d91feba742ee76d58cde913389e506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb5085298eea0933dab9894d1a952fba7d91feba742ee76d58cde913389e506->leave($__internal_3bb5085298eea0933dab9894d1a952fba7d91feba742ee76d58cde913389e506_prof);

    }

    // line 5
    public function block_refresh($context, array $blocks = array())
    {
        $__internal_154ab68e1414fc70addd6799eade66fd5c6edae6b4f964c03da6b34719b16b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154ab68e1414fc70addd6799eade66fd5c6edae6b4f964c03da6b34719b16b6d->enter($__internal_154ab68e1414fc70addd6799eade66fd5c6edae6b4f964c03da6b34719b16b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        echo "<meta http-equiv=\"refresh\" content=\"30\" >";
        
        $__internal_154ab68e1414fc70addd6799eade66fd5c6edae6b4f964c03da6b34719b16b6d->leave($__internal_154ab68e1414fc70addd6799eade66fd5c6edae6b4f964c03da6b34719b16b6d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_57bff43f23a98d9711d5045fb7505f40f1fe58c3ba1b0434ada097aeffa2b6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bff43f23a98d9711d5045fb7505f40f1fe58c3ba1b0434ada097aeffa2b6a5->enter($__internal_57bff43f23a98d9711d5045fb7505f40f1fe58c3ba1b0434ada097aeffa2b6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        // line 8
        echo "    Machines - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_57bff43f23a98d9711d5045fb7505f40f1fe58c3ba1b0434ada097aeffa2b6a5->leave($__internal_57bff43f23a98d9711d5045fb7505f40f1fe58c3ba1b0434ada097aeffa2b6a5_prof);

    }

    // line 11
    public function block_link($context, array $blocks = array())
    {
        $__internal_3f84f133c1e3f39bde67ee5299d71524e3cf655f9b205e9aaf12f66f3bf43587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f84f133c1e3f39bde67ee5299d71524e3cf655f9b205e9aaf12f66f3bf43587->enter($__internal_3f84f133c1e3f39bde67ee5299d71524e3cf655f9b205e9aaf12f66f3bf43587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        // line 12
        echo "<h3>Les pages</h3>
<ul class=\"nav nav-pills nav-stacked\">
    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\">Accueil</a></li>
    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_add");
        echo "\">Créer une machine</a></li>
    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_addsalle");
        echo "\">Créer une salle</a></li>
    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifmachine");
        echo "\">Modifier/Supprimer une machine</a></li>
    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifsalle");
        echo "\">Modifier/Supprimer une salle</a></li>
</ul>
";
        
        $__internal_3f84f133c1e3f39bde67ee5299d71524e3cf655f9b205e9aaf12f66f3bf43587->leave($__internal_3f84f133c1e3f39bde67ee5299d71524e3cf655f9b205e9aaf12f66f3bf43587_prof);

    }

    // line 22
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_b9985a9ea7aacb8f582fbfa67938bdf16b0fbb2e308f8528de18a04aba1fe573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9985a9ea7aacb8f582fbfa67938bdf16b0fbb2e308f8528de18a04aba1fe573->enter($__internal_b9985a9ea7aacb8f582fbfa67938bdf16b0fbb2e308f8528de18a04aba1fe573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:view.html.twig"));

        // line 23
        echo "
    <h2>Les salles et les machines :</h2>

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) ? $context["salles"] : $this->getContext($context, "salles")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 27
            echo "        <div class=\"row\" style=\"text-align: center; text-decoration: underline; border: 15px solid ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "colorSalle", array()), "html", null, true);
            echo "; border-radius: 30px\">
            <h3>Salle n°";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "numSalle", array()), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nomSalle", array()), "html", null, true);
            echo "\"</h3>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                // line 30
                echo "            ";
                if (($this->getAttribute($context["salle"], "numSalle", array()) == $this->getAttribute($context["machine"], "numsalleMachine", array()))) {
                    // line 31
                    echo "                <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                    <p>
                        Ip : ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                        Auteur : ";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                        Etat : ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                        Date : ";
                    // line 36
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["machine"], "dateMachine", array()), "j F Y"), "html", null, true);
                    echo "
                    </p>
                </div>
            ";
                }
                // line 40
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </div>
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
";
        
        $__internal_b9985a9ea7aacb8f582fbfa67938bdf16b0fbb2e308f8528de18a04aba1fe573->leave($__internal_b9985a9ea7aacb8f582fbfa67938bdf16b0fbb2e308f8528de18a04aba1fe573_prof);

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
        return array (  173 => 44,  165 => 41,  159 => 40,  152 => 36,  148 => 35,  144 => 34,  140 => 33,  134 => 31,  131 => 30,  127 => 29,  121 => 28,  116 => 27,  112 => 26,  107 => 23,  101 => 22,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 12,  65 => 11,  55 => 8,  49 => 7,  37 => 5,  11 => 3,);
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

{% block link %}
<h3>Les pages</h3>
<ul class=\"nav nav-pills nav-stacked\">
    <li><a href=\"{{ path('oc_platforme_view') }}\">Accueil</a></li>
    <li><a href=\"{{ path('oc_platforme_add') }}\">Créer une machine</a></li>
    <li><a href=\"{{ path('oc_platforme_addsalle') }}\">Créer une salle</a></li>
    <li><a href=\"{{ path('oc_platforme_modifmachine') }}\">Modifier/Supprimer une machine</a></li>
    <li><a href=\"{{ path('oc_platforme_modifsalle') }}\">Modifier/Supprimer une salle</a></li>
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

{% endblock %}", "OCPlatformeBundle:Advert:view.html.twig", "C:\\wamp64\\www\\Opmk\\src\\OC\\PlatformeBundle/Resources/views/Advert/view.html.twig");
    }
}

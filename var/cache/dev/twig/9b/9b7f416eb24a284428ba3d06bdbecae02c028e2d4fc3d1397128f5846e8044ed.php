<?php

/* OCPlatformeBundle:Advert:modifmachine.html.twig */
class __TwigTemplate_a0c79e16c02dfa7be354db1afa0eaad54aae16b8a989b76c3860a12ff049b2a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:modifmachine.html.twig", 3);
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
        $__internal_f16f8c3f54f0348230c78c6aab48969aa0610c84b8f4a465e8f050a6b0b2872a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16f8c3f54f0348230c78c6aab48969aa0610c84b8f4a465e8f050a6b0b2872a->enter($__internal_f16f8c3f54f0348230c78c6aab48969aa0610c84b8f4a465e8f050a6b0b2872a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:modifmachine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16f8c3f54f0348230c78c6aab48969aa0610c84b8f4a465e8f050a6b0b2872a->leave($__internal_f16f8c3f54f0348230c78c6aab48969aa0610c84b8f4a465e8f050a6b0b2872a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a1a50effc0ad8b80b7fa9890082e75e188927402c3118f664ed76bca6d72952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1a50effc0ad8b80b7fa9890082e75e188927402c3118f664ed76bca6d72952->enter($__internal_9a1a50effc0ad8b80b7fa9890082e75e188927402c3118f664ed76bca6d72952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifmachine.html.twig"));

        // line 6
        echo "    Modif machine - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9a1a50effc0ad8b80b7fa9890082e75e188927402c3118f664ed76bca6d72952->leave($__internal_9a1a50effc0ad8b80b7fa9890082e75e188927402c3118f664ed76bca6d72952_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_197d6ede1f545a301b58ebe80ef476fd660be2ed0f67d4db95a10802fc2844d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197d6ede1f545a301b58ebe80ef476fd660be2ed0f67d4db95a10802fc2844d5->enter($__internal_197d6ede1f545a301b58ebe80ef476fd660be2ed0f67d4db95a10802fc2844d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifmachine.html.twig"));

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
        
        $__internal_197d6ede1f545a301b58ebe80ef476fd660be2ed0f67d4db95a10802fc2844d5->leave($__internal_197d6ede1f545a301b58ebe80ef476fd660be2ed0f67d4db95a10802fc2844d5_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c41df4665062f1f83f8c042c8c80d4ed0e258ba405710a0da55b14fecbaec4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c41df4665062f1f83f8c042c8c80d4ed0e258ba405710a0da55b14fecbaec4f->enter($__internal_8c41df4665062f1f83f8c042c8c80d4ed0e258ba405710a0da55b14fecbaec4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifmachine.html.twig"));

        // line 22
        echo "
    <h2>Toutes les machine :</h2>

    <p>
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Ip de la machine</th>
                <th>Auteur de la machine</th>
                <th>Etat de la machine</th>
                <th>Couleur de la machine</th>
                <th>Salle de la machine</th>
                <th>Dernière modification</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 40
            echo "                    <tr>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "numsalleMachine", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["machine"], "dateMachine", array()), "j F Y"), "html", null, true);
            echo "</td>
                        <td><a href=\"edit/";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Modifier</a></td>
                        <td><a href=\"delete/";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a></td>
                    </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </tbody>
        </table>
    </p>

    <p>
        <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

";
        
        $__internal_8c41df4665062f1f83f8c042c8c80d4ed0e258ba405710a0da55b14fecbaec4f->leave($__internal_8c41df4665062f1f83f8c042c8c80d4ed0e258ba405710a0da55b14fecbaec4f_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:modifmachine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 57,  165 => 52,  156 => 49,  152 => 48,  148 => 47,  144 => 46,  140 => 45,  136 => 44,  132 => 43,  128 => 42,  124 => 41,  121 => 40,  117 => 39,  98 => 22,  92 => 21,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
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
    Modif machine - {{ parent() }}
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

    <h2>Toutes les machine :</h2>

    <p>
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Ip de la machine</th>
                <th>Auteur de la machine</th>
                <th>Etat de la machine</th>
                <th>Couleur de la machine</th>
                <th>Salle de la machine</th>
                <th>Dernière modification</th>
            </tr>
            </thead>
            <tbody>
            {% for machine in machines %}
                    <tr>
                        <td>{{ machine.id }}</td>
                        <td>{{ machine.ipMachine }}</td>
                        <td>{{ machine.authorMachine }}</td>
                        <td>{{ machine.etatMachine }}</td>
                        <td>{{ machine.colorMachine }}</td>
                        <td>{{ machine.numsalleMachine }}</td>
                        <td>{{ machine.dateMachine | date('j F Y') }}</td>
                        <td><a href=\"edit/{{ machine.id }}\" class=\"btn btn-success\">Modifier</a></td>
                        <td><a href=\"delete/{{ machine.id }}\" class=\"btn btn-danger\">Supprimer</a></td>
                    </tr>
            {% endfor %}
            </tbody>
        </table>
    </p>

    <p>
        <a href=\"{{ path('oc_platforme_view') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

{% endblock %}", "OCPlatformeBundle:Advert:modifmachine.html.twig", "C:\\wamp64\\www\\Opmk\\src\\OC\\PlatformeBundle/Resources/views/Advert/modifmachine.html.twig");
    }
}

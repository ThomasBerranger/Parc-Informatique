<?php

/* OCPlatformeBundle:Advert:modifmachine.html.twig */
class __TwigTemplate_47459aaa4d6e232f1cdb15d2cab69eba0c9914b4c6e6b9faa3e54c4e2ed0a0bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:modifmachine.html.twig", 3);
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
        $__internal_80e4a6cb7f6e4c6fee294dc764ded08129954d55c3078479069b3828d0a1b861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e4a6cb7f6e4c6fee294dc764ded08129954d55c3078479069b3828d0a1b861->enter($__internal_80e4a6cb7f6e4c6fee294dc764ded08129954d55c3078479069b3828d0a1b861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:modifmachine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80e4a6cb7f6e4c6fee294dc764ded08129954d55c3078479069b3828d0a1b861->leave($__internal_80e4a6cb7f6e4c6fee294dc764ded08129954d55c3078479069b3828d0a1b861_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_66b68c2c6a1bd58c31e897b59d8eba4448d5aa30849e79fa8bc5ecd65043c569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b68c2c6a1bd58c31e897b59d8eba4448d5aa30849e79fa8bc5ecd65043c569->enter($__internal_66b68c2c6a1bd58c31e897b59d8eba4448d5aa30849e79fa8bc5ecd65043c569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifmachine.html.twig"));

        // line 6
        echo "    Modifier une machine - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_66b68c2c6a1bd58c31e897b59d8eba4448d5aa30849e79fa8bc5ecd65043c569->leave($__internal_66b68c2c6a1bd58c31e897b59d8eba4448d5aa30849e79fa8bc5ecd65043c569_prof);

    }

    // line 9
    public function block_bouton($context, array $blocks = array())
    {
        $__internal_f03d3931fe66f789390738ef2ad6c8b30ebbc5bac5a326336d6a17b1a9f24645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03d3931fe66f789390738ef2ad6c8b30ebbc5bac5a326336d6a17b1a9f24645->enter($__internal_f03d3931fe66f789390738ef2ad6c8b30ebbc5bac5a326336d6a17b1a9f24645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifmachine.html.twig"));

        // line 10
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_home");
        echo "\" class=\"btn btn-warning\">Se déconnecter</a>
";
        
        $__internal_f03d3931fe66f789390738ef2ad6c8b30ebbc5bac5a326336d6a17b1a9f24645->leave($__internal_f03d3931fe66f789390738ef2ad6c8b30ebbc5bac5a326336d6a17b1a9f24645_prof);

    }

    // line 13
    public function block_link($context, array $blocks = array())
    {
        $__internal_ad97c77f111bb7644f5827d80fd48ee440cc8606bd4389a1855f8d5aab7327b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad97c77f111bb7644f5827d80fd48ee440cc8606bd4389a1855f8d5aab7327b6->enter($__internal_ad97c77f111bb7644f5827d80fd48ee440cc8606bd4389a1855f8d5aab7327b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifmachine.html.twig"));

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
        echo "\">Tester la connexion d'une salle</a></li>
    </ul>
";
        
        $__internal_ad97c77f111bb7644f5827d80fd48ee440cc8606bd4389a1855f8d5aab7327b6->leave($__internal_ad97c77f111bb7644f5827d80fd48ee440cc8606bd4389a1855f8d5aab7327b6_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_dce52e092f13654bd882f40771a43f23f43eac0c93c1424dfe329b7e53e6a702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce52e092f13654bd882f40771a43f23f43eac0c93c1424dfe329b7e53e6a702->enter($__internal_dce52e092f13654bd882f40771a43f23f43eac0c93c1424dfe329b7e53e6a702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifmachine.html.twig"));

        // line 26
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
                <th>Salle de la machine</th>
                <th>Dernière modification</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 43
            echo "                    <tr>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "numsalleMachine", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["machine"], "dateMachine", array()), "j F Y"), "html", null, true);
            echo "</td>
                        <td><a href=\"edit/";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Modifier</a></td>
                        <td><a href=\"delete/";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a></td>
                    </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </tbody>
        </table>
    </p>

    <p>
        <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

";
        
        $__internal_dce52e092f13654bd882f40771a43f23f43eac0c93c1424dfe329b7e53e6a702->leave($__internal_dce52e092f13654bd882f40771a43f23f43eac0c93c1424dfe329b7e53e6a702_prof);

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
        return array (  184 => 59,  177 => 54,  168 => 51,  164 => 50,  160 => 49,  156 => 48,  152 => 47,  148 => 46,  144 => 45,  140 => 44,  137 => 43,  133 => 42,  115 => 26,  109 => 25,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 14,  69 => 13,  59 => 10,  53 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
    Modifier une machine - {{ parent() }}
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

{% endblock %}", "OCPlatformeBundle:Advert:modifmachine.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/Advert/modifmachine.html.twig");
    }
}

<?php

/* OCPlatformeBundle:Advert:modifsalle.html.twig */
class __TwigTemplate_bedffe115bfa6941c6ded9d9ca98190ae115f9a1d42627b7be5d89508a301398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:modifsalle.html.twig", 3);
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
        $__internal_ffdc5ed4a01de9d4833a51c799a005a251a9aa1375320ffa2fd5fec8c533ee96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdc5ed4a01de9d4833a51c799a005a251a9aa1375320ffa2fd5fec8c533ee96->enter($__internal_ffdc5ed4a01de9d4833a51c799a005a251a9aa1375320ffa2fd5fec8c533ee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:modifsalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffdc5ed4a01de9d4833a51c799a005a251a9aa1375320ffa2fd5fec8c533ee96->leave($__internal_ffdc5ed4a01de9d4833a51c799a005a251a9aa1375320ffa2fd5fec8c533ee96_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e3e3586e60d13642383995350dc7764204553a72176f6883a0b012cbd71f098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3e3586e60d13642383995350dc7764204553a72176f6883a0b012cbd71f098->enter($__internal_2e3e3586e60d13642383995350dc7764204553a72176f6883a0b012cbd71f098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifsalle.html.twig"));

        // line 6
        echo "    Modifier une salle - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2e3e3586e60d13642383995350dc7764204553a72176f6883a0b012cbd71f098->leave($__internal_2e3e3586e60d13642383995350dc7764204553a72176f6883a0b012cbd71f098_prof);

    }

    // line 9
    public function block_bouton($context, array $blocks = array())
    {
        $__internal_c2c25486b54fd8ddfc5e125f7c603aa12b565f513f92c1254b7b7d05fe86dddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c25486b54fd8ddfc5e125f7c603aa12b565f513f92c1254b7b7d05fe86dddd->enter($__internal_c2c25486b54fd8ddfc5e125f7c603aa12b565f513f92c1254b7b7d05fe86dddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifsalle.html.twig"));

        // line 10
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_home");
        echo "\" class=\"btn btn-warning\">Se déconnecter</a>
";
        
        $__internal_c2c25486b54fd8ddfc5e125f7c603aa12b565f513f92c1254b7b7d05fe86dddd->leave($__internal_c2c25486b54fd8ddfc5e125f7c603aa12b565f513f92c1254b7b7d05fe86dddd_prof);

    }

    // line 13
    public function block_link($context, array $blocks = array())
    {
        $__internal_af1071af9c01ab13f46a018f74359e56ffd759ac21eb591094f5f3f85351aa90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1071af9c01ab13f46a018f74359e56ffd759ac21eb591094f5f3f85351aa90->enter($__internal_af1071af9c01ab13f46a018f74359e56ffd759ac21eb591094f5f3f85351aa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifsalle.html.twig"));

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
        
        $__internal_af1071af9c01ab13f46a018f74359e56ffd759ac21eb591094f5f3f85351aa90->leave($__internal_af1071af9c01ab13f46a018f74359e56ffd759ac21eb591094f5f3f85351aa90_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_de504e3c2880ca61613f1e5b5523286fb14e74dd3ff6c7eb5a8d7cc1b9357362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de504e3c2880ca61613f1e5b5523286fb14e74dd3ff6c7eb5a8d7cc1b9357362->enter($__internal_de504e3c2880ca61613f1e5b5523286fb14e74dd3ff6c7eb5a8d7cc1b9357362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifsalle.html.twig"));

        // line 26
        echo "
    <h2>Toutes les salles :</h2>

    <p>
        <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Numéro de la salle</th>
            <th>Nom de la salle</th>
            <th>Dernière modification</th>
        </tr>
        </thead>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) ? $context["salles"] : $this->getContext($context, "salles")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 40
            echo "        <tbody>
        <tr>
            <td> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "numSalle", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nomSalle", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["salle"], "dateSalle", array()), "j F Y"), "html", null, true);
            echo " </td>
            <td><a href=\"editsalle/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Modifier</a></td>
            <td><a href=\"deletesalle/";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a></td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </table>
    </p>

    <p>
        <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

";
        
        $__internal_de504e3c2880ca61613f1e5b5523286fb14e74dd3ff6c7eb5a8d7cc1b9357362->leave($__internal_de504e3c2880ca61613f1e5b5523286fb14e74dd3ff6c7eb5a8d7cc1b9357362_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:modifsalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 55,  168 => 51,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  134 => 40,  130 => 39,  115 => 26,  109 => 25,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 14,  69 => 13,  59 => 10,  53 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
    Modifier une salle - {{ parent() }}
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

    <h2>Toutes les salles :</h2>

    <p>
        <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Numéro de la salle</th>
            <th>Nom de la salle</th>
            <th>Dernière modification</th>
        </tr>
        </thead>
        {% for salle in salles %}
        <tbody>
        <tr>
            <td> {{ salle.id }} </td>
            <td> {{ salle.numSalle }} </td>
            <td> {{ salle.nomSalle }} </td>
            <td> {{ salle.dateSalle | date('j F Y') }} </td>
            <td><a href=\"editsalle/{{ salle.id }}\" class=\"btn btn-success\">Modifier</a></td>
            <td><a href=\"deletesalle/{{ salle.id }}\" class=\"btn btn-danger\">Supprimer</a></td>
        </tr>
        </tbody>
        {% endfor %}
        </table>
    </p>

    <p>
        <a href=\"{{ path('oc_platforme_view') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

{% endblock %}", "OCPlatformeBundle:Advert:modifsalle.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/Advert/modifsalle.html.twig");
    }
}

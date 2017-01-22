<?php

/* OCPlatformeBundle:Advert:modifsalle.html.twig */
class __TwigTemplate_112e8e6d55f7d3e80bf77d38772ee15e85bfdca723d50da14fed5d19990cfe92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:modifsalle.html.twig", 3);
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
        $__internal_fcf4863fd7fb6a592ce919d28d921218ce9574dc74043f154ee59538c2d9621a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf4863fd7fb6a592ce919d28d921218ce9574dc74043f154ee59538c2d9621a->enter($__internal_fcf4863fd7fb6a592ce919d28d921218ce9574dc74043f154ee59538c2d9621a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:modifsalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcf4863fd7fb6a592ce919d28d921218ce9574dc74043f154ee59538c2d9621a->leave($__internal_fcf4863fd7fb6a592ce919d28d921218ce9574dc74043f154ee59538c2d9621a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99483e306e08917432ce2c833e1281b8bf47bd1fe7b72a11a08d28bca8e0b4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99483e306e08917432ce2c833e1281b8bf47bd1fe7b72a11a08d28bca8e0b4d3->enter($__internal_99483e306e08917432ce2c833e1281b8bf47bd1fe7b72a11a08d28bca8e0b4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifsalle.html.twig"));

        // line 6
        echo "    Modif salle - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_99483e306e08917432ce2c833e1281b8bf47bd1fe7b72a11a08d28bca8e0b4d3->leave($__internal_99483e306e08917432ce2c833e1281b8bf47bd1fe7b72a11a08d28bca8e0b4d3_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_08be2fc58cf57ef7c8898c329ab0e922bc2bef9ff133b014cb50b32468cf3667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08be2fc58cf57ef7c8898c329ab0e922bc2bef9ff133b014cb50b32468cf3667->enter($__internal_08be2fc58cf57ef7c8898c329ab0e922bc2bef9ff133b014cb50b32468cf3667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifsalle.html.twig"));

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
        
        $__internal_08be2fc58cf57ef7c8898c329ab0e922bc2bef9ff133b014cb50b32468cf3667->leave($__internal_08be2fc58cf57ef7c8898c329ab0e922bc2bef9ff133b014cb50b32468cf3667_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccd88f4fa04015bec017d435f1ef499877c488f3ecb8e8566d387a998357c771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd88f4fa04015bec017d435f1ef499877c488f3ecb8e8566d387a998357c771->enter($__internal_ccd88f4fa04015bec017d435f1ef499877c488f3ecb8e8566d387a998357c771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:modifsalle.html.twig"));

        // line 22
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) ? $context["salles"] : $this->getContext($context, "salles")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 36
            echo "        <tbody>
        <tr>
            <td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "numSalle", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nomSalle", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["salle"], "dateSalle", array()), "j F Y"), "html", null, true);
            echo " </td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </table>
    </p>

    <h2>Modifier une salle :</h2>

    <p>
        <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

";
        
        $__internal_ccd88f4fa04015bec017d435f1ef499877c488f3ecb8e8566d387a998357c771->leave($__internal_ccd88f4fa04015bec017d435f1ef499877c488f3ecb8e8566d387a998357c771_prof);

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
        return array (  151 => 51,  143 => 45,  133 => 41,  129 => 40,  125 => 39,  121 => 38,  117 => 36,  113 => 35,  98 => 22,  92 => 21,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
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
    Modif salle - {{ parent() }}
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
        </tr>
        </tbody>
        {% endfor %}
        </table>
    </p>

    <h2>Modifier une salle :</h2>

    <p>
        <a href=\"{{ path('oc_platforme_view') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour au parc
        </a>
    </p>

{% endblock %}", "OCPlatformeBundle:Advert:modifsalle.html.twig", "C:\\wamp64\\www\\Opmk\\src\\OC\\PlatformeBundle/Resources/views/Advert/modifsalle.html.twig");
    }
}

<?php

/* ::layout.html.twig */
class __TwigTemplate_a1ccf7c4c1cacc10c010d7313b687aab15e8d6b75a82b5759f84fd9d23e138e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'refresh' => array($this, 'block_refresh'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'bouton' => array($this, 'block_bouton'),
            'link' => array($this, 'block_link'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1ed84b712b8af53b860d6df63bf0f967a5f96a06cc8a79a9b57ed2b8530819e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ed84b712b8af53b860d6df63bf0f967a5f96a06cc8a79a9b57ed2b8530819e->enter($__internal_e1ed84b712b8af53b860d6df63bf0f967a5f96a06cc8a79a9b57ed2b8530819e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        $this->displayBlock('refresh', $context, $blocks);
        // line 9
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>

    <body>
        <div class=\"container\">
            <div id=\"header\" class=\"jumbotron\">
                <h1>Parc info by ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo " <i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i></h1>

                <p>
                    Cet endroit est dédié à la création de salles et de machines.
                    <i class=\"fa fa-laptop\" aria-hidden=\"true\"></i>
                </p>

                ";
        // line 28
        $this->displayBlock('bouton', $context, $blocks);
        // line 29
        echo "
            </div>

            <div class=\"row\">
                <div id=\"menu\" class=\"col-md-3\">

                    ";
        // line 35
        $this->displayBlock('link', $context, $blocks);
        // line 37
        echo "
                    <h4>Dernières modifications :</h4>
                    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OCPlatformeBundle:Advert:menu", array("limit" => 3)));
        echo "
                </div>
                <div id=\"content\" class=\"col-md-9\">

                    ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "
                </div>
            </div>

            <hr>

            <footer>
                <p>Ce site est sous le développement du groupe ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo " © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</p>
            </footer>
        </div>

        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
    </body>
</html>";
        
        $__internal_e1ed84b712b8af53b860d6df63bf0f967a5f96a06cc8a79a9b57ed2b8530819e->leave($__internal_e1ed84b712b8af53b860d6df63bf0f967a5f96a06cc8a79a9b57ed2b8530819e_prof);

    }

    // line 8
    public function block_refresh($context, array $blocks = array())
    {
        $__internal_c73da82f8b252d0386f55da5b33a7f4faf7d83d35437f56946ccbfe2e73200b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73da82f8b252d0386f55da5b33a7f4faf7d83d35437f56946ccbfe2e73200b6->enter($__internal_c73da82f8b252d0386f55da5b33a7f4faf7d83d35437f56946ccbfe2e73200b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_c73da82f8b252d0386f55da5b33a7f4faf7d83d35437f56946ccbfe2e73200b6->leave($__internal_c73da82f8b252d0386f55da5b33a7f4faf7d83d35437f56946ccbfe2e73200b6_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_1126d19b9bf44d1b072d65c4dc8b04807479f417a6e5353f9606463fdea3b167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1126d19b9bf44d1b072d65c4dc8b04807479f417a6e5353f9606463fdea3b167->enter($__internal_1126d19b9bf44d1b072d65c4dc8b04807479f417a6e5353f9606463fdea3b167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        echo "Parc info";
        
        $__internal_1126d19b9bf44d1b072d65c4dc8b04807479f417a6e5353f9606463fdea3b167->leave($__internal_1126d19b9bf44d1b072d65c4dc8b04807479f417a6e5353f9606463fdea3b167_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aab103b1d9470e0220072640c611d2713605176430052f6abd961951208d2d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab103b1d9470e0220072640c611d2713605176430052f6abd961951208d2d69->enter($__internal_aab103b1d9470e0220072640c611d2713605176430052f6abd961951208d2d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"../../../web/font-awesome-4.7.0/css/font-awesome.min.css\">
        ";
        
        $__internal_aab103b1d9470e0220072640c611d2713605176430052f6abd961951208d2d69->leave($__internal_aab103b1d9470e0220072640c611d2713605176430052f6abd961951208d2d69_prof);

    }

    // line 28
    public function block_bouton($context, array $blocks = array())
    {
        $__internal_8974dfea1fa5dacf1248947c3edcecf8d79ad9f46dfd88363bcf763e1bc2850c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8974dfea1fa5dacf1248947c3edcecf8d79ad9f46dfd88363bcf763e1bc2850c->enter($__internal_8974dfea1fa5dacf1248947c3edcecf8d79ad9f46dfd88363bcf763e1bc2850c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_8974dfea1fa5dacf1248947c3edcecf8d79ad9f46dfd88363bcf763e1bc2850c->leave($__internal_8974dfea1fa5dacf1248947c3edcecf8d79ad9f46dfd88363bcf763e1bc2850c_prof);

    }

    // line 35
    public function block_link($context, array $blocks = array())
    {
        $__internal_afca9ab890e385c7e02aba6c862f7b4c6a0f57fd96e3a9c5722e7f23a69b86bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afca9ab890e385c7e02aba6c862f7b4c6a0f57fd96e3a9c5722e7f23a69b86bf->enter($__internal_afca9ab890e385c7e02aba6c862f7b4c6a0f57fd96e3a9c5722e7f23a69b86bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 36
        echo "                    ";
        
        $__internal_afca9ab890e385c7e02aba6c862f7b4c6a0f57fd96e3a9c5722e7f23a69b86bf->leave($__internal_afca9ab890e385c7e02aba6c862f7b4c6a0f57fd96e3a9c5722e7f23a69b86bf_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_185fdfa8291702fddf880cf7220e2fb9b5728f18cd2cd83c2c89fb4412df5f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185fdfa8291702fddf880cf7220e2fb9b5728f18cd2cd83c2c89fb4412df5f41->enter($__internal_185fdfa8291702fddf880cf7220e2fb9b5728f18cd2cd83c2c89fb4412df5f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 44
        echo "                    ";
        
        $__internal_185fdfa8291702fddf880cf7220e2fb9b5728f18cd2cd83c2c89fb4412df5f41->leave($__internal_185fdfa8291702fddf880cf7220e2fb9b5728f18cd2cd83c2c89fb4412df5f41_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_abb26f2761c7811fdd8a42ac545f26d88be784feecad3f0f54684c0158568fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb26f2761c7811fdd8a42ac545f26d88be784feecad3f0f54684c0158568fde->enter($__internal_abb26f2761c7811fdd8a42ac545f26d88be784feecad3f0f54684c0158568fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 57
        echo "        ";
        // line 58
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_abb26f2761c7811fdd8a42ac545f26d88be784feecad3f0f54684c0158568fde->leave($__internal_abb26f2761c7811fdd8a42ac545f26d88be784feecad3f0f54684c0158568fde_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 58,  201 => 57,  195 => 56,  188 => 44,  182 => 43,  175 => 36,  169 => 35,  158 => 28,  149 => 13,  147 => 12,  141 => 11,  129 => 9,  118 => 8,  109 => 61,  107 => 56,  98 => 52,  89 => 45,  87 => 43,  80 => 39,  76 => 37,  74 => 35,  66 => 29,  64 => 28,  54 => 21,  47 => 16,  45 => 11,  39 => 9,  37 => 8,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% block refresh %}{% endblock %}
        <title>{% block title %}Parc info{% endblock %}</title>

        {% block stylesheets %}
        {# On charge le CSS de bootstrap depuis le site directement #}
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"../../../web/font-awesome-4.7.0/css/font-awesome.min.css\">
        {% endblock %}
    </head>

    <body>
        <div class=\"container\">
            <div id=\"header\" class=\"jumbotron\">
                <h1>Parc info by {{ webmaster }} <i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i></h1>

                <p>
                    Cet endroit est dédié à la création de salles et de machines.
                    <i class=\"fa fa-laptop\" aria-hidden=\"true\"></i>
                </p>

                {% block bouton %}{% endblock %}

            </div>

            <div class=\"row\">
                <div id=\"menu\" class=\"col-md-3\">

                    {% block link %}
                    {% endblock %}

                    <h4>Dernières modifications :</h4>
                    {{ render(controller(\"OCPlatformeBundle:Advert:menu\", {'limit': 3})) }}
                </div>
                <div id=\"content\" class=\"col-md-9\">

                    {% block body %}
                    {% endblock %}

                </div>
            </div>

            <hr>

            <footer>
                <p>Ce site est sous le développement du groupe {{ webmaster }} © {{ 'now'|date('Y') }}.</p>
            </footer>
        </div>

        {% block javascripts %}
        {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        {% endblock %}

    </body>
</html>", "::layout.html.twig", "C:\\wamp64\\www\\Openclassrooms\\app/Resources\\views/layout.html.twig");
    }
}

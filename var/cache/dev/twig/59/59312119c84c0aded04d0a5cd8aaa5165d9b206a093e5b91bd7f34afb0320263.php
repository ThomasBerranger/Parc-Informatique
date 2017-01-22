<?php

/* ::layout.html.twig */
class __TwigTemplate_901ab826ad5844e2ccba1285974b76994fd9c2b7548d2d0f122d34f5d8e2e96c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'refresh' => array($this, 'block_refresh'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'link' => array($this, 'block_link'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f95ba15e0955e09685e1602fa7c325afc042400553e2e653d044b3b4174415dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95ba15e0955e09685e1602fa7c325afc042400553e2e653d044b3b4174415dc->enter($__internal_f95ba15e0955e09685e1602fa7c325afc042400553e2e653d044b3b4174415dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Connection en tant qu'administrateur</h4>
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


            </div>

            <div class=\"row\">
                <div id=\"menu\" class=\"col-md-3\">

                    ";
        // line 76
        $this->displayBlock('link', $context, $blocks);
        // line 78
        echo "
                    <h4>Dernières modifications :</h4>
                    ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OCPlatformeBundle:Advert:menu", array("limit" => 3)));
        echo "
                </div>
                <div id=\"content\" class=\"col-md-9\">

                    ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "
                </div>
            </div>

            <hr>

            <footer>
                <p>Ce site est sous le développement du groupe ";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo " © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</p>
            </footer>
        </div>

        ";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "
    </body>
</html>";
        
        $__internal_f95ba15e0955e09685e1602fa7c325afc042400553e2e653d044b3b4174415dc->leave($__internal_f95ba15e0955e09685e1602fa7c325afc042400553e2e653d044b3b4174415dc_prof);

    }

    // line 8
    public function block_refresh($context, array $blocks = array())
    {
        $__internal_8743e42e026346cd82524c99923649d4e102156bcdd5af0130c82c0a4734aba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8743e42e026346cd82524c99923649d4e102156bcdd5af0130c82c0a4734aba5->enter($__internal_8743e42e026346cd82524c99923649d4e102156bcdd5af0130c82c0a4734aba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_8743e42e026346cd82524c99923649d4e102156bcdd5af0130c82c0a4734aba5->leave($__internal_8743e42e026346cd82524c99923649d4e102156bcdd5af0130c82c0a4734aba5_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_63772ab732040e367509a4bd017c3851af0a25726928d56be0c55d8d733080da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63772ab732040e367509a4bd017c3851af0a25726928d56be0c55d8d733080da->enter($__internal_63772ab732040e367509a4bd017c3851af0a25726928d56be0c55d8d733080da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        echo "Parc info";
        
        $__internal_63772ab732040e367509a4bd017c3851af0a25726928d56be0c55d8d733080da->leave($__internal_63772ab732040e367509a4bd017c3851af0a25726928d56be0c55d8d733080da_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c40fae8a342781fdcf862638e41509b5d377153214332be65bf3f1dcf6bf4361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40fae8a342781fdcf862638e41509b5d377153214332be65bf3f1dcf6bf4361->enter($__internal_c40fae8a342781fdcf862638e41509b5d377153214332be65bf3f1dcf6bf4361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"../../../web/font-awesome-4.7.0/css/font-awesome.min.css\">
        ";
        
        $__internal_c40fae8a342781fdcf862638e41509b5d377153214332be65bf3f1dcf6bf4361->leave($__internal_c40fae8a342781fdcf862638e41509b5d377153214332be65bf3f1dcf6bf4361_prof);

    }

    // line 76
    public function block_link($context, array $blocks = array())
    {
        $__internal_abdd6f63d83e675ae76fe658ea883c266c2c7f00e3f17df81929cbf0eed14110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdd6f63d83e675ae76fe658ea883c266c2c7f00e3f17df81929cbf0eed14110->enter($__internal_abdd6f63d83e675ae76fe658ea883c266c2c7f00e3f17df81929cbf0eed14110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 77
        echo "                    ";
        
        $__internal_abdd6f63d83e675ae76fe658ea883c266c2c7f00e3f17df81929cbf0eed14110->leave($__internal_abdd6f63d83e675ae76fe658ea883c266c2c7f00e3f17df81929cbf0eed14110_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b93ed3ae7f76d8b569cd36c536f76dad271cbae8b9d7f2222b4455ea5688176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b93ed3ae7f76d8b569cd36c536f76dad271cbae8b9d7f2222b4455ea5688176->enter($__internal_7b93ed3ae7f76d8b569cd36c536f76dad271cbae8b9d7f2222b4455ea5688176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 85
        echo "                    ";
        
        $__internal_7b93ed3ae7f76d8b569cd36c536f76dad271cbae8b9d7f2222b4455ea5688176->leave($__internal_7b93ed3ae7f76d8b569cd36c536f76dad271cbae8b9d7f2222b4455ea5688176_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8f800a8cddf963acff3b3d1b824222f30d084895d56e4538e1eb6750e7a29d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f800a8cddf963acff3b3d1b824222f30d084895d56e4538e1eb6750e7a29d5->enter($__internal_a8f800a8cddf963acff3b3d1b824222f30d084895d56e4538e1eb6750e7a29d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 98
        echo "        ";
        // line 99
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_a8f800a8cddf963acff3b3d1b824222f30d084895d56e4538e1eb6750e7a29d5->leave($__internal_a8f800a8cddf963acff3b3d1b824222f30d084895d56e4538e1eb6750e7a29d5_prof);

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
        return array (  229 => 99,  227 => 98,  221 => 97,  214 => 85,  208 => 84,  201 => 77,  195 => 76,  186 => 13,  184 => 12,  178 => 11,  166 => 9,  155 => 8,  146 => 102,  144 => 97,  135 => 93,  126 => 86,  124 => 84,  117 => 80,  113 => 78,  111 => 76,  53 => 21,  46 => 16,  44 => 11,  38 => 9,  36 => 8,  28 => 2,);
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
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Connection en tant qu'administrateur</h4>
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
</html>", "::layout.html.twig", "C:\\wamp64\\www\\Opmk\\app/Resources\\views/layout.html.twig");
    }
}

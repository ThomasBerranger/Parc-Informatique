<?php

/* ::layout.html.twig */
class __TwigTemplate_446d161efed2baa99138698f29960325dfb4e781a5bd5ab46192d5aeea4124b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'refresh' => array($this, 'block_refresh'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24cdc0c3f750e32e307e23246702902982801f71500bd00bb7ad5c1e48c82fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cdc0c3f750e32e307e23246702902982801f71500bd00bb7ad5c1e48c82fdf->enter($__internal_24cdc0c3f750e32e307e23246702902982801f71500bd00bb7ad5c1e48c82fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
                    <h3>Les pages</h3>
                    <ul class=\"nav nav-pills nav-stacked\">
                        <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_view");
        echo "\">Accueil</a></li>
                        <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_add");
        echo "\">Créer une machine</a></li>
                        <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_addsalle");
        echo "\">Créer une salle</a></li>
                        <li><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifmachine");
        echo "\">Modifier/Supprimer une machine</a></li>
                        <li><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_modifsalle");
        echo "\">Modifier/Supprimer une salle</a></li>
                    </ul>

                    <h4>Dernières modifications :</h4>
                    ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OCPlatformeBundle:Advert:menu", array("limit" => 3)));
        echo "
                </div>
                <div id=\"content\" class=\"col-md-9\">
                    ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "                </div>
            </div>

            <hr>

            <footer>
                <p>Ce site est sous le développement du groupe ";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo " © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</p>
            </footer>
        </div>

        ";
        // line 100
        $this->displayBlock('javascripts', $context, $blocks);
        // line 105
        echo "
    </body>
</html>";
        
        $__internal_24cdc0c3f750e32e307e23246702902982801f71500bd00bb7ad5c1e48c82fdf->leave($__internal_24cdc0c3f750e32e307e23246702902982801f71500bd00bb7ad5c1e48c82fdf_prof);

    }

    // line 8
    public function block_refresh($context, array $blocks = array())
    {
        $__internal_74d9ef6f4648dc9f3718d620688ab3d9496eb1dedbc4e92b304eb7f8629fc713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d9ef6f4648dc9f3718d620688ab3d9496eb1dedbc4e92b304eb7f8629fc713->enter($__internal_74d9ef6f4648dc9f3718d620688ab3d9496eb1dedbc4e92b304eb7f8629fc713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_74d9ef6f4648dc9f3718d620688ab3d9496eb1dedbc4e92b304eb7f8629fc713->leave($__internal_74d9ef6f4648dc9f3718d620688ab3d9496eb1dedbc4e92b304eb7f8629fc713_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_e67218e61906a60e17b9dc5aa1573f382b18d89aed5f070a7e65565c64ed24aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67218e61906a60e17b9dc5aa1573f382b18d89aed5f070a7e65565c64ed24aa->enter($__internal_e67218e61906a60e17b9dc5aa1573f382b18d89aed5f070a7e65565c64ed24aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        echo "Parc info";
        
        $__internal_e67218e61906a60e17b9dc5aa1573f382b18d89aed5f070a7e65565c64ed24aa->leave($__internal_e67218e61906a60e17b9dc5aa1573f382b18d89aed5f070a7e65565c64ed24aa_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8e9fd88395d053ea3ab2c80595b19c8b14645bee8c8523fef0546bc3eab123e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e9fd88395d053ea3ab2c80595b19c8b14645bee8c8523fef0546bc3eab123e->enter($__internal_e8e9fd88395d053ea3ab2c80595b19c8b14645bee8c8523fef0546bc3eab123e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"../../../web/font-awesome-4.7.0/css/font-awesome.min.css\">
        ";
        
        $__internal_e8e9fd88395d053ea3ab2c80595b19c8b14645bee8c8523fef0546bc3eab123e->leave($__internal_e8e9fd88395d053ea3ab2c80595b19c8b14645bee8c8523fef0546bc3eab123e_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae02cfde5255411ed34b6fe874f36de690094c09a09fe0569166899c03b665f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae02cfde5255411ed34b6fe874f36de690094c09a09fe0569166899c03b665f4->enter($__internal_ae02cfde5255411ed34b6fe874f36de690094c09a09fe0569166899c03b665f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 89
        echo "                    ";
        
        $__internal_ae02cfde5255411ed34b6fe874f36de690094c09a09fe0569166899c03b665f4->leave($__internal_ae02cfde5255411ed34b6fe874f36de690094c09a09fe0569166899c03b665f4_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb3c695cb68f58bd048f2e41b0f6a50116792ba73980f6d9a79fecf199175900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3c695cb68f58bd048f2e41b0f6a50116792ba73980f6d9a79fecf199175900->enter($__internal_bb3c695cb68f58bd048f2e41b0f6a50116792ba73980f6d9a79fecf199175900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 101
        echo "        ";
        // line 102
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_bb3c695cb68f58bd048f2e41b0f6a50116792ba73980f6d9a79fecf199175900->leave($__internal_bb3c695cb68f58bd048f2e41b0f6a50116792ba73980f6d9a79fecf199175900_prof);

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
        return array (  231 => 102,  229 => 101,  223 => 100,  216 => 89,  210 => 88,  201 => 13,  199 => 12,  193 => 11,  181 => 9,  170 => 8,  161 => 105,  159 => 100,  150 => 96,  142 => 90,  140 => 88,  134 => 85,  127 => 81,  123 => 80,  119 => 79,  115 => 78,  111 => 77,  52 => 21,  45 => 16,  43 => 11,  37 => 9,  35 => 8,  27 => 2,);
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
                    <h3>Les pages</h3>
                    <ul class=\"nav nav-pills nav-stacked\">
                        <li><a href=\"{{ path('oc_platforme_view') }}\">Accueil</a></li>
                        <li><a href=\"{{ path('oc_platforme_add') }}\">Créer une machine</a></li>
                        <li><a href=\"{{ path('oc_platforme_addsalle') }}\">Créer une salle</a></li>
                        <li><a href=\"{{ path('oc_platforme_modifmachine') }}\">Modifier/Supprimer une machine</a></li>
                        <li><a href=\"{{ path('oc_platforme_modifsalle') }}\">Modifier/Supprimer une salle</a></li>
                    </ul>

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
</html>", "::layout.html.twig", "C:\\wamp\\www\\Symfony\\Openclassrooms2 - Copie\\Openclassrooms - Copie\\app/Resources\\views/layout.html.twig");
    }
}

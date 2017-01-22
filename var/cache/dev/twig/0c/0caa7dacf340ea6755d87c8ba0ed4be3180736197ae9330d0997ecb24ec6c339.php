<?php

/* OCPlatformeBundle:Advert:index.html.twig */
class __TwigTemplate_56de348822f1281c1c3ad084449be00dd6d10fa4df9b0d02ab6389ae4d894f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformeBundle::layout.html.twig", "OCPlatformeBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'refresh' => array($this, 'block_refresh'),
            'bouton' => array($this, 'block_bouton'),
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
        $__internal_7cf521fb0776f967639da7242e404c89ceb0b49091d3d321d2a5d4c137c7fa3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf521fb0776f967639da7242e404c89ceb0b49091d3d321d2a5d4c137c7fa3d->enter($__internal_7cf521fb0776f967639da7242e404c89ceb0b49091d3d321d2a5d4c137c7fa3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cf521fb0776f967639da7242e404c89ceb0b49091d3d321d2a5d4c137c7fa3d->leave($__internal_7cf521fb0776f967639da7242e404c89ceb0b49091d3d321d2a5d4c137c7fa3d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99814cad5ab472ec73b544f8ddb99f9dfb15b5491f340904a05cda235d147057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99814cad5ab472ec73b544f8ddb99f9dfb15b5491f340904a05cda235d147057->enter($__internal_99814cad5ab472ec73b544f8ddb99f9dfb15b5491f340904a05cda235d147057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:index.html.twig"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_99814cad5ab472ec73b544f8ddb99f9dfb15b5491f340904a05cda235d147057->leave($__internal_99814cad5ab472ec73b544f8ddb99f9dfb15b5491f340904a05cda235d147057_prof);

    }

    // line 9
    public function block_refresh($context, array $blocks = array())
    {
        $__internal_b5e350e1315140f2904a87963d1fdd5339c88fc5e6cab8e9494dadced2ae8d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e350e1315140f2904a87963d1fdd5339c88fc5e6cab8e9494dadced2ae8d4c->enter($__internal_b5e350e1315140f2904a87963d1fdd5339c88fc5e6cab8e9494dadced2ae8d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:index.html.twig"));

        echo "<meta http-equiv=\"refresh\" content=\"30\" >";
        
        $__internal_b5e350e1315140f2904a87963d1fdd5339c88fc5e6cab8e9494dadced2ae8d4c->leave($__internal_b5e350e1315140f2904a87963d1fdd5339c88fc5e6cab8e9494dadced2ae8d4c_prof);

    }

    // line 11
    public function block_bouton($context, array $blocks = array())
    {
        $__internal_270a6587c224355f8cfdab993cd322215f28b4f137ef7f776bb83bc4b625c422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270a6587c224355f8cfdab993cd322215f28b4f137ef7f776bb83bc4b625c422->enter($__internal_270a6587c224355f8cfdab993cd322215f28b4f137ef7f776bb83bc4b625c422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:index.html.twig"));

        // line 12
        echo "    <!-- Button trigger modal -->
    <button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
        Se connecter en administrateur
    </button>

    <!-- Modal -->

    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Connexion en tant qu'administrateur</h4>
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
";
        
        $__internal_270a6587c224355f8cfdab993cd322215f28b4f137ef7f776bb83bc4b625c422->leave($__internal_270a6587c224355f8cfdab993cd322215f28b4f137ef7f776bb83bc4b625c422_prof);

    }

    // line 55
    public function block_link($context, array $blocks = array())
    {
        $__internal_4bbea00786b3d4b7e520e7cf98ce9ac70912f9a6d9f2d1d2c535f2f0af30dc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbea00786b3d4b7e520e7cf98ce9ac70912f9a6d9f2d1d2c535f2f0af30dc02->enter($__internal_4bbea00786b3d4b7e520e7cf98ce9ac70912f9a6d9f2d1d2c535f2f0af30dc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:index.html.twig"));

        // line 56
        echo "    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_home");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platforme_ping2");
        echo "\">Tester la connexion d'une salle</a></li>
    </ul>
";
        
        $__internal_4bbea00786b3d4b7e520e7cf98ce9ac70912f9a6d9f2d1d2c535f2f0af30dc02->leave($__internal_4bbea00786b3d4b7e520e7cf98ce9ac70912f9a6d9f2d1d2c535f2f0af30dc02_prof);

    }

    // line 63
    public function block_ocplatforme_body($context, array $blocks = array())
    {
        $__internal_16fd6464aa381b05dbe7cd5c9a584307e466710a9fcfe35effa16ddf35230935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fd6464aa381b05dbe7cd5c9a584307e466710a9fcfe35effa16ddf35230935->enter($__internal_16fd6464aa381b05dbe7cd5c9a584307e466710a9fcfe35effa16ddf35230935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformeBundle:Advert:index.html.twig"));

        // line 64
        echo "
    <h2>Les salles et les machines :</h2>

    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) ? $context["salles"] : $this->getContext($context, "salles")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 68
            echo "        <div class=\"row\" style=\"text-align: center; text-decoration: underline; border: 15px solid ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "colorSalle", array()), "html", null, true);
            echo "; border-radius: 30px\">
            <h3>Salle n°";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "numSalle", array()), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nomSalle", array()), "html", null, true);
            echo "\"</h3>
            ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["machines"]) ? $context["machines"] : $this->getContext($context, "machines")));
            foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
                // line 71
                echo "                ";
                if (($this->getAttribute($context["salle"], "numSalle", array()) == $this->getAttribute($context["machine"], "numsalleMachine", array()))) {
                    // line 72
                    echo "                    <div class=\"col-xs-4 .col-md-3\" style=\"border: 10px solid ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "colorMachine", array()), "html", null, true);
                    echo "; border-radius: 15px; margin-bottom: 20\">
                        <p>
                            Ip : ";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "ipMachine", array()), "html", null, true);
                    echo "<br>
                            Auteur : ";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "authorMachine", array()), "html", null, true);
                    echo "<br>
                            Etat : ";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "etatMachine", array()), "html", null, true);
                    echo "<br>
                            Date : ";
                    // line 77
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["machine"], "dateMachine", array()), "j F Y"), "html", null, true);
                    echo "
                        </p>
                    </div>
                ";
                }
                // line 81
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "        </div>
        <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
";
        
        $__internal_16fd6464aa381b05dbe7cd5c9a584307e466710a9fcfe35effa16ddf35230935->leave($__internal_16fd6464aa381b05dbe7cd5c9a584307e466710a9fcfe35effa16ddf35230935_prof);

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
        return array (  216 => 85,  208 => 82,  202 => 81,  195 => 77,  191 => 76,  187 => 75,  183 => 74,  177 => 72,  174 => 71,  170 => 70,  164 => 69,  159 => 68,  155 => 67,  150 => 64,  144 => 63,  134 => 59,  130 => 58,  126 => 56,  120 => 55,  72 => 12,  66 => 11,  54 => 9,  44 => 6,  38 => 5,  11 => 3,);
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

{% block bouton %}
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
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Connexion en tant qu'administrateur</h4>
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
{% endblock %}

{% block link %}
    <h3>Les pages</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"{{ path('oc_platforme_home') }}\">Accueil</a></li>
        <li><a href=\"{{ path('oc_platforme_ping2') }}\">Tester la connexion d'une salle</a></li>
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

{% endblock %}", "OCPlatformeBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/Advert/index.html.twig");
    }
}

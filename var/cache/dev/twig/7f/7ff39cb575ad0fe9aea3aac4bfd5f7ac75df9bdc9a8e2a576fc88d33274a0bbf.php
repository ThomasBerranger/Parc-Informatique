<?php

/* OCPlatformeBundle:Advert:delete.html.twig */
class __TwigTemplate_0fb73e7eed517ba9815290ca060168d9188beb2b789352c41896ed7085c2d63a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f50bcc514ef06ed4961ae5419cbef3f4d82b936270dc17fbead17a1317e97503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50bcc514ef06ed4961ae5419cbef3f4d82b936270dc17fbead17a1317e97503->enter($__internal_f50bcc514ef06ed4961ae5419cbef3f4d82b936270dc17fbead17a1317e97503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformeBundle:Advert:delete.html.twig"));

        // line 1
        echo "<h1>coucou tu es dans delete</h1>";
        
        $__internal_f50bcc514ef06ed4961ae5419cbef3f4d82b936270dc17fbead17a1317e97503->leave($__internal_f50bcc514ef06ed4961ae5419cbef3f4d82b936270dc17fbead17a1317e97503_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformeBundle:Advert:delete.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>coucou tu es dans delete</h1>", "OCPlatformeBundle:Advert:delete.html.twig", "C:\\wamp64\\www\\Openclassrooms\\src\\OC\\PlatformeBundle/Resources/views/Advert/delete.html.twig");
    }
}

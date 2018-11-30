<?php

/* base.html.twig */
class __TwigTemplate_a98a9f4f95160bcc7ca757bb64bf438aca92b2097cb6a04ab98b46ffb079ad92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_124097fa6f002b1453151f225d2c1717aa3b9ddb510b80bd5202e198756a8f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124097fa6f002b1453151f225d2c1717aa3b9ddb510b80bd5202e198756a8f3d->enter($__internal_124097fa6f002b1453151f225d2c1717aa3b9ddb510b80bd5202e198756a8f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_124097fa6f002b1453151f225d2c1717aa3b9ddb510b80bd5202e198756a8f3d->leave($__internal_124097fa6f002b1453151f225d2c1717aa3b9ddb510b80bd5202e198756a8f3d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_20900f7a98f3bfb7296beeefb52fc91e11fad594ce7724a2ed6273970c78783b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20900f7a98f3bfb7296beeefb52fc91e11fad594ce7724a2ed6273970c78783b->enter($__internal_20900f7a98f3bfb7296beeefb52fc91e11fad594ce7724a2ed6273970c78783b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_20900f7a98f3bfb7296beeefb52fc91e11fad594ce7724a2ed6273970c78783b->leave($__internal_20900f7a98f3bfb7296beeefb52fc91e11fad594ce7724a2ed6273970c78783b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba795dc12f671379a5d2e7ac991bea2ecf539e805e158c27fb1120c884f1993b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba795dc12f671379a5d2e7ac991bea2ecf539e805e158c27fb1120c884f1993b->enter($__internal_ba795dc12f671379a5d2e7ac991bea2ecf539e805e158c27fb1120c884f1993b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba795dc12f671379a5d2e7ac991bea2ecf539e805e158c27fb1120c884f1993b->leave($__internal_ba795dc12f671379a5d2e7ac991bea2ecf539e805e158c27fb1120c884f1993b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e493a9464b7f836430e899c7a5ca867abe673d0f0ff5c94fd1d924e8b5f3f3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e493a9464b7f836430e899c7a5ca867abe673d0f0ff5c94fd1d924e8b5f3f3c0->enter($__internal_e493a9464b7f836430e899c7a5ca867abe673d0f0ff5c94fd1d924e8b5f3f3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "ok";
        
        $__internal_e493a9464b7f836430e899c7a5ca867abe673d0f0ff5c94fd1d924e8b5f3f3c0->leave($__internal_e493a9464b7f836430e899c7a5ca867abe673d0f0ff5c94fd1d924e8b5f3f3c0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_953d2bff4a7d6ddd3154898d339b3be61de5ce770c0359c6d8348f861db87d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953d2bff4a7d6ddd3154898d339b3be61de5ce770c0359c6d8348f861db87d69->enter($__internal_953d2bff4a7d6ddd3154898d339b3be61de5ce770c0359c6d8348f861db87d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_953d2bff4a7d6ddd3154898d339b3be61de5ce770c0359c6d8348f861db87d69->leave($__internal_953d2bff4a7d6ddd3154898d339b3be61de5ce770c0359c6d8348f861db87d69_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}ok{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/base.html.twig");
    }
}

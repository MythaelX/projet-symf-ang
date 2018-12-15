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
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fa6e9acbfb1157385aefbffe38a4bae4f4062cff6cdb03353aa199415aee1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa6e9acbfb1157385aefbffe38a4bae4f4062cff6cdb03353aa199415aee1fb->enter($__internal_0fa6e9acbfb1157385aefbffe38a4bae4f4062cff6cdb03353aa199415aee1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        <div id=\"header\">
            ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "        </div>

        <div id=\"content\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        </div>

        <div id=\"footer\">
            ";
        // line 25
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "        </div>
    </body>
</html>
";
        
        $__internal_0fa6e9acbfb1157385aefbffe38a4bae4f4062cff6cdb03353aa199415aee1fb->leave($__internal_0fa6e9acbfb1157385aefbffe38a4bae4f4062cff6cdb03353aa199415aee1fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fc23c1d9a3e04205612678231b9fa7297c0faa806a08f5f93f1ed7eaeb2d206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc23c1d9a3e04205612678231b9fa7297c0faa806a08f5f93f1ed7eaeb2d206->enter($__internal_0fc23c1d9a3e04205612678231b9fa7297c0faa806a08f5f93f1ed7eaeb2d206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_0fc23c1d9a3e04205612678231b9fa7297c0faa806a08f5f93f1ed7eaeb2d206->leave($__internal_0fc23c1d9a3e04205612678231b9fa7297c0faa806a08f5f93f1ed7eaeb2d206_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6efad9920469fe6fdf63c4e6af68f1b5e50c9d78d8b5fadf91c6054542625092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efad9920469fe6fdf63c4e6af68f1b5e50c9d78d8b5fadf91c6054542625092->enter($__internal_6efad9920469fe6fdf63c4e6af68f1b5e50c9d78d8b5fadf91c6054542625092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_6efad9920469fe6fdf63c4e6af68f1b5e50c9d78d8b5fadf91c6054542625092->leave($__internal_6efad9920469fe6fdf63c4e6af68f1b5e50c9d78d8b5fadf91c6054542625092_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_c5c39d6db8abac7b0cc5388e0c6304a16f69679a49c28da7a639b0e52c181ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c39d6db8abac7b0cc5388e0c6304a16f69679a49c28da7a639b0e52c181ddf->enter($__internal_c5c39d6db8abac7b0cc5388e0c6304a16f69679a49c28da7a639b0e52c181ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_office_homepage");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
        echo "\">Modifier son profil</a></li>
            </ul>
            ";
        
        $__internal_c5c39d6db8abac7b0cc5388e0c6304a16f69679a49c28da7a639b0e52c181ddf->leave($__internal_c5c39d6db8abac7b0cc5388e0c6304a16f69679a49c28da7a639b0e52c181ddf_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_a479527bacb350a8cf23a3d02928f0b5c691df55fabb134164e5801283cdb8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a479527bacb350a8cf23a3d02928f0b5c691df55fabb134164e5801283cdb8b8->enter($__internal_a479527bacb350a8cf23a3d02928f0b5c691df55fabb134164e5801283cdb8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a479527bacb350a8cf23a3d02928f0b5c691df55fabb134164e5801283cdb8b8->leave($__internal_a479527bacb350a8cf23a3d02928f0b5c691df55fabb134164e5801283cdb8b8_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1b9978adef8a01d1bb2db654fb98a2ba0ede7aa2d420c29a25dc6cfeeae5dd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9978adef8a01d1bb2db654fb98a2ba0ede7aa2d420c29a25dc6cfeeae5dd4f->enter($__internal_1b9978adef8a01d1bb2db654fb98a2ba0ede7aa2d420c29a25dc6cfeeae5dd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_1b9978adef8a01d1bb2db654fb98a2ba0ede7aa2d420c29a25dc6cfeeae5dd4f->leave($__internal_1b9978adef8a01d1bb2db654fb98a2ba0ede7aa2d420c29a25dc6cfeeae5dd4f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 25,  121 => 21,  111 => 15,  107 => 14,  104 => 13,  98 => 12,  88 => 7,  82 => 6,  70 => 5,  60 => 26,  58 => 25,  53 => 22,  51 => 21,  46 => 18,  44 => 12,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
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
        <meta charset=\"UTF-8\">
        <title>{% block title %}Projet framework{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
    </head>
    <body>
        <div id=\"header\">
            {% block header %}
            <ul>
                <li><a class=\"active\" href=\"{{ path('front_office_homepage') }}\">Home</a></li>
                <li><a href=\"{{ path('profil') }}\">Modifier son profil</a></li>
            </ul>
            {% endblock %}
        </div>

        <div id=\"content\">
            {% block body %}{% endblock %}
        </div>

        <div id=\"footer\">
            {% block footer %}{% endblock %}
        </div>
    </body>
</html>
", "base.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/base.html.twig");
    }
}

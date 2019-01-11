<?php

/* baseBack.html.twig */
class __TwigTemplate_425ce81162a61e67c4a508a17f9e4a47fb3e948220c5159101807ff18e38efa7 extends Twig_Template
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
        $__internal_a8e220dbf022cadbd6c7ab2c08bebf4f5ecf6c8bc22be4a41603e4e0c258bb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e220dbf022cadbd6c7ab2c08bebf4f5ecf6c8bc22be4a41603e4e0c258bb3a->enter($__internal_a8e220dbf022cadbd6c7ab2c08bebf4f5ecf6c8bc22be4a41603e4e0c258bb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

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
        // line 17
        echo "        </div>

        <div id=\"content\">
            ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        </div>

        <div id=\"footer\">
            ";
        // line 24
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        echo "        </div>
    </body>
</html>
";
        
        $__internal_a8e220dbf022cadbd6c7ab2c08bebf4f5ecf6c8bc22be4a41603e4e0c258bb3a->leave($__internal_a8e220dbf022cadbd6c7ab2c08bebf4f5ecf6c8bc22be4a41603e4e0c258bb3a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddd1194e83a2d862daf08bce59404ac550078efc21bb246ee62f6ca81bbc2215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd1194e83a2d862daf08bce59404ac550078efc21bb246ee62f6ca81bbc2215->enter($__internal_ddd1194e83a2d862daf08bce59404ac550078efc21bb246ee62f6ca81bbc2215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_ddd1194e83a2d862daf08bce59404ac550078efc21bb246ee62f6ca81bbc2215->leave($__internal_ddd1194e83a2d862daf08bce59404ac550078efc21bb246ee62f6ca81bbc2215_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_beebc73927fff59fa80d46ca5d7403fc417707c5d70f8a8a455d185f0eb6045e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beebc73927fff59fa80d46ca5d7403fc417707c5d70f8a8a455d185f0eb6045e->enter($__internal_beebc73927fff59fa80d46ca5d7403fc417707c5d70f8a8a455d185f0eb6045e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_beebc73927fff59fa80d46ca5d7403fc417707c5d70f8a8a455d185f0eb6045e->leave($__internal_beebc73927fff59fa80d46ca5d7403fc417707c5d70f8a8a455d185f0eb6045e_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_b66d5ab1617c25eac2e807f71f88caefe396fa7e552800d606429b493a5d55b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66d5ab1617c25eac2e807f71f88caefe396fa7e552800d606429b493a5d55b3->enter($__internal_b66d5ab1617c25eac2e807f71f88caefe396fa7e552800d606429b493a5d55b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_homepage");
        echo "\">Home</a></li>
            </ul>
            ";
        
        $__internal_b66d5ab1617c25eac2e807f71f88caefe396fa7e552800d606429b493a5d55b3->leave($__internal_b66d5ab1617c25eac2e807f71f88caefe396fa7e552800d606429b493a5d55b3_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_224c1098f23091c9ee117476557450ac85caba1ae62a0f81957b0963b0233ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224c1098f23091c9ee117476557450ac85caba1ae62a0f81957b0963b0233ca9->enter($__internal_224c1098f23091c9ee117476557450ac85caba1ae62a0f81957b0963b0233ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_224c1098f23091c9ee117476557450ac85caba1ae62a0f81957b0963b0233ca9->leave($__internal_224c1098f23091c9ee117476557450ac85caba1ae62a0f81957b0963b0233ca9_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_980e8e92d5469cdb47c30ba9f6ed715bf3c97eac7974d56ff7a1889852504d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980e8e92d5469cdb47c30ba9f6ed715bf3c97eac7974d56ff7a1889852504d15->enter($__internal_980e8e92d5469cdb47c30ba9f6ed715bf3c97eac7974d56ff7a1889852504d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_980e8e92d5469cdb47c30ba9f6ed715bf3c97eac7974d56ff7a1889852504d15->leave($__internal_980e8e92d5469cdb47c30ba9f6ed715bf3c97eac7974d56ff7a1889852504d15_prof);

    }

    public function getTemplateName()
    {
        return "baseBack.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  117 => 20,  107 => 14,  104 => 13,  98 => 12,  88 => 7,  82 => 6,  70 => 5,  60 => 25,  58 => 24,  53 => 21,  51 => 20,  46 => 17,  44 => 12,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
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
                <li><a class=\"active\" href=\"{{ path('back_office_homepage') }}\">Home</a></li>
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
", "baseBack.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/baseBack.html.twig");
    }
}

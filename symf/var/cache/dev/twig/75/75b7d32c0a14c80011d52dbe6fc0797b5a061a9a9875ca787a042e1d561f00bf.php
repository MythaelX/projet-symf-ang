<?php

/* base.html.twig */
class __TwigTemplate_18c356e9ff8f7fcd865bf1a3017a722e8695db304a0dfb3b527228140be1c33a extends Twig_Template
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
        $__internal_7ee83d51bacfe9adadb0fe3d5621cacec19a62e4175340778beee366dc60ce0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee83d51bacfe9adadb0fe3d5621cacec19a62e4175340778beee366dc60ce0a->enter($__internal_7ee83d51bacfe9adadb0fe3d5621cacec19a62e4175340778beee366dc60ce0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7ee83d51bacfe9adadb0fe3d5621cacec19a62e4175340778beee366dc60ce0a->leave($__internal_7ee83d51bacfe9adadb0fe3d5621cacec19a62e4175340778beee366dc60ce0a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5511a5fd3b55ed9b9d03c38ddf20ab187d8813ac5c2d34331e5df4e3353c8d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5511a5fd3b55ed9b9d03c38ddf20ab187d8813ac5c2d34331e5df4e3353c8d85->enter($__internal_5511a5fd3b55ed9b9d03c38ddf20ab187d8813ac5c2d34331e5df4e3353c8d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_5511a5fd3b55ed9b9d03c38ddf20ab187d8813ac5c2d34331e5df4e3353c8d85->leave($__internal_5511a5fd3b55ed9b9d03c38ddf20ab187d8813ac5c2d34331e5df4e3353c8d85_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7930ad22fc58c78a77e1c57efc8408b2ea0425715e7323b31cfa9be33747d522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7930ad22fc58c78a77e1c57efc8408b2ea0425715e7323b31cfa9be33747d522->enter($__internal_7930ad22fc58c78a77e1c57efc8408b2ea0425715e7323b31cfa9be33747d522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_7930ad22fc58c78a77e1c57efc8408b2ea0425715e7323b31cfa9be33747d522->leave($__internal_7930ad22fc58c78a77e1c57efc8408b2ea0425715e7323b31cfa9be33747d522_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_d2cf31b8743b39ba0081858e43dbc3cd4c27ba44bd05756d958bfb63c5df8c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cf31b8743b39ba0081858e43dbc3cd4c27ba44bd05756d958bfb63c5df8c74->enter($__internal_d2cf31b8743b39ba0081858e43dbc3cd4c27ba44bd05756d958bfb63c5df8c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_d2cf31b8743b39ba0081858e43dbc3cd4c27ba44bd05756d958bfb63c5df8c74->leave($__internal_d2cf31b8743b39ba0081858e43dbc3cd4c27ba44bd05756d958bfb63c5df8c74_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ebc8af39a97aae3106aadefd382a1be09b64fec1dbd23d892cb5b3643b772e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebc8af39a97aae3106aadefd382a1be09b64fec1dbd23d892cb5b3643b772e8->enter($__internal_8ebc8af39a97aae3106aadefd382a1be09b64fec1dbd23d892cb5b3643b772e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ebc8af39a97aae3106aadefd382a1be09b64fec1dbd23d892cb5b3643b772e8->leave($__internal_8ebc8af39a97aae3106aadefd382a1be09b64fec1dbd23d892cb5b3643b772e8_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_51b437355cb0f87b7a5acdf13b6279788945da621158656c7c327b6119d4d391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b437355cb0f87b7a5acdf13b6279788945da621158656c7c327b6119d4d391->enter($__internal_51b437355cb0f87b7a5acdf13b6279788945da621158656c7c327b6119d4d391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_51b437355cb0f87b7a5acdf13b6279788945da621158656c7c327b6119d4d391->leave($__internal_51b437355cb0f87b7a5acdf13b6279788945da621158656c7c327b6119d4d391_prof);

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

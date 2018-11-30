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
        $__internal_a020f2fbb60052e5e93ca368a3110c25d9b2dd8d457ca7598d333dfce4a6312a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a020f2fbb60052e5e93ca368a3110c25d9b2dd8d457ca7598d333dfce4a6312a->enter($__internal_a020f2fbb60052e5e93ca368a3110c25d9b2dd8d457ca7598d333dfce4a6312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 19
        echo "        </div>

        <div id=\"content\">
            ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </div>

        <div id=\"footer\">
            ";
        // line 26
        $this->displayBlock('footer', $context, $blocks);
        // line 27
        echo "        </div>
    </body>
</html>
";
        
        $__internal_a020f2fbb60052e5e93ca368a3110c25d9b2dd8d457ca7598d333dfce4a6312a->leave($__internal_a020f2fbb60052e5e93ca368a3110c25d9b2dd8d457ca7598d333dfce4a6312a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c02e770d7b53848278d0bb0ea826604637de5514cbbc0b84fdd18e84747b4cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02e770d7b53848278d0bb0ea826604637de5514cbbc0b84fdd18e84747b4cea->enter($__internal_c02e770d7b53848278d0bb0ea826604637de5514cbbc0b84fdd18e84747b4cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_c02e770d7b53848278d0bb0ea826604637de5514cbbc0b84fdd18e84747b4cea->leave($__internal_c02e770d7b53848278d0bb0ea826604637de5514cbbc0b84fdd18e84747b4cea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_389f2b36e551b46f98c686544053d3c9b0fe4b9806ce60900ec85b6e06478113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389f2b36e551b46f98c686544053d3c9b0fe4b9806ce60900ec85b6e06478113->enter($__internal_389f2b36e551b46f98c686544053d3c9b0fe4b9806ce60900ec85b6e06478113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_389f2b36e551b46f98c686544053d3c9b0fe4b9806ce60900ec85b6e06478113->leave($__internal_389f2b36e551b46f98c686544053d3c9b0fe4b9806ce60900ec85b6e06478113_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_9d14cf9ffce4dbf8e0c4598a54391fb58402a420ff487b7c52e4e056a4901e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d14cf9ffce4dbf8e0c4598a54391fb58402a420ff487b7c52e4e056a4901e32->enter($__internal_9d14cf9ffce4dbf8e0c4598a54391fb58402a420ff487b7c52e4e056a4901e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_office_homepage");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
        echo "\">Nouveau trajet</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nouveauTrajet");
        echo "\">Modifier son profil</a></li>
            </ul>
            ";
        
        $__internal_9d14cf9ffce4dbf8e0c4598a54391fb58402a420ff487b7c52e4e056a4901e32->leave($__internal_9d14cf9ffce4dbf8e0c4598a54391fb58402a420ff487b7c52e4e056a4901e32_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_70b715cab4cfc4f4cf99b3510c02a1f5d915dcd1a1514fd2ecc0bd5fae18b974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b715cab4cfc4f4cf99b3510c02a1f5d915dcd1a1514fd2ecc0bd5fae18b974->enter($__internal_70b715cab4cfc4f4cf99b3510c02a1f5d915dcd1a1514fd2ecc0bd5fae18b974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_70b715cab4cfc4f4cf99b3510c02a1f5d915dcd1a1514fd2ecc0bd5fae18b974->leave($__internal_70b715cab4cfc4f4cf99b3510c02a1f5d915dcd1a1514fd2ecc0bd5fae18b974_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9f89e6371aa015a25f4daf56162ccf654e350734c0fcc74b8d3a27378545ae68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f89e6371aa015a25f4daf56162ccf654e350734c0fcc74b8d3a27378545ae68->enter($__internal_9f89e6371aa015a25f4daf56162ccf654e350734c0fcc74b8d3a27378545ae68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_9f89e6371aa015a25f4daf56162ccf654e350734c0fcc74b8d3a27378545ae68->leave($__internal_9f89e6371aa015a25f4daf56162ccf654e350734c0fcc74b8d3a27378545ae68_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 26,  125 => 22,  115 => 16,  111 => 15,  107 => 14,  104 => 13,  98 => 12,  88 => 7,  82 => 6,  70 => 5,  60 => 27,  58 => 26,  53 => 23,  51 => 22,  46 => 19,  44 => 12,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
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
                <li><a href=\"{{ path('profil') }}\">Nouveau trajet</a></li>
                <li><a href=\"{{ path('nouveauTrajet') }}\">Modifier son profil</a></li>
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

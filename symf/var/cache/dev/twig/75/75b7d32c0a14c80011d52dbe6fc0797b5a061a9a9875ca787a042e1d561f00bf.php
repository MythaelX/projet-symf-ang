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
        $__internal_365037e33518e995fd36b0c16ecb5b4979f51712d903a61b6df07f6f39063932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365037e33518e995fd36b0c16ecb5b4979f51712d903a61b6df07f6f39063932->enter($__internal_365037e33518e995fd36b0c16ecb5b4979f51712d903a61b6df07f6f39063932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_365037e33518e995fd36b0c16ecb5b4979f51712d903a61b6df07f6f39063932->leave($__internal_365037e33518e995fd36b0c16ecb5b4979f51712d903a61b6df07f6f39063932_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64bc6f4c30e8d8d1701cb59a2569574afaa47cb14a28461d1454395715e30086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bc6f4c30e8d8d1701cb59a2569574afaa47cb14a28461d1454395715e30086->enter($__internal_64bc6f4c30e8d8d1701cb59a2569574afaa47cb14a28461d1454395715e30086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_64bc6f4c30e8d8d1701cb59a2569574afaa47cb14a28461d1454395715e30086->leave($__internal_64bc6f4c30e8d8d1701cb59a2569574afaa47cb14a28461d1454395715e30086_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b656b820fc65b7e0436474f99e8ce57c199eee0de72652323269a48b0174b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b656b820fc65b7e0436474f99e8ce57c199eee0de72652323269a48b0174b38->enter($__internal_2b656b820fc65b7e0436474f99e8ce57c199eee0de72652323269a48b0174b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_2b656b820fc65b7e0436474f99e8ce57c199eee0de72652323269a48b0174b38->leave($__internal_2b656b820fc65b7e0436474f99e8ce57c199eee0de72652323269a48b0174b38_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_3c8912ea24d3084bce0a01896645ac5758fa023b7e693e4e80a7806d0aaf8427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8912ea24d3084bce0a01896645ac5758fa023b7e693e4e80a7806d0aaf8427->enter($__internal_3c8912ea24d3084bce0a01896645ac5758fa023b7e693e4e80a7806d0aaf8427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_office_homepage");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nouveauTrajet");
        echo "\">Nouveau trajet</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
        echo "\">Modifier son profil</a></li>
            </ul>
            ";
        
        $__internal_3c8912ea24d3084bce0a01896645ac5758fa023b7e693e4e80a7806d0aaf8427->leave($__internal_3c8912ea24d3084bce0a01896645ac5758fa023b7e693e4e80a7806d0aaf8427_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d308890a01f7856924b830d73ed2cbcb7a854f470e3abbf71ca33a50478d2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d308890a01f7856924b830d73ed2cbcb7a854f470e3abbf71ca33a50478d2a1->enter($__internal_6d308890a01f7856924b830d73ed2cbcb7a854f470e3abbf71ca33a50478d2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6d308890a01f7856924b830d73ed2cbcb7a854f470e3abbf71ca33a50478d2a1->leave($__internal_6d308890a01f7856924b830d73ed2cbcb7a854f470e3abbf71ca33a50478d2a1_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bb9f8ee51ddf88a997b8cfecbfb68f8cf4a6921626fef7f678a892336dcb2a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9f8ee51ddf88a997b8cfecbfb68f8cf4a6921626fef7f678a892336dcb2a5b->enter($__internal_bb9f8ee51ddf88a997b8cfecbfb68f8cf4a6921626fef7f678a892336dcb2a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_bb9f8ee51ddf88a997b8cfecbfb68f8cf4a6921626fef7f678a892336dcb2a5b->leave($__internal_bb9f8ee51ddf88a997b8cfecbfb68f8cf4a6921626fef7f678a892336dcb2a5b_prof);

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
                <li><a href=\"{{ path('nouveauTrajet') }}\">Nouveau trajet</a></li>
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

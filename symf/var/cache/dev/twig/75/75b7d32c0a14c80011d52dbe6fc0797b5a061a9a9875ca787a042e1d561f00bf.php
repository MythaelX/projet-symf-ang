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
        $__internal_5804adaa96ec9f663507d4adf1ee26066c793f61b6e4f0b36aa742504e482846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5804adaa96ec9f663507d4adf1ee26066c793f61b6e4f0b36aa742504e482846->enter($__internal_5804adaa96ec9f663507d4adf1ee26066c793f61b6e4f0b36aa742504e482846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5804adaa96ec9f663507d4adf1ee26066c793f61b6e4f0b36aa742504e482846->leave($__internal_5804adaa96ec9f663507d4adf1ee26066c793f61b6e4f0b36aa742504e482846_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_816a79a6417c5c49529e38ac1cca5f5e62bb31be7b5ef4ca73249fa87345e3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816a79a6417c5c49529e38ac1cca5f5e62bb31be7b5ef4ca73249fa87345e3c8->enter($__internal_816a79a6417c5c49529e38ac1cca5f5e62bb31be7b5ef4ca73249fa87345e3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_816a79a6417c5c49529e38ac1cca5f5e62bb31be7b5ef4ca73249fa87345e3c8->leave($__internal_816a79a6417c5c49529e38ac1cca5f5e62bb31be7b5ef4ca73249fa87345e3c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_756356d16ca0d5d112af866fb8ead1a04543bebbdfb097accc535663f2963310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756356d16ca0d5d112af866fb8ead1a04543bebbdfb097accc535663f2963310->enter($__internal_756356d16ca0d5d112af866fb8ead1a04543bebbdfb097accc535663f2963310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_756356d16ca0d5d112af866fb8ead1a04543bebbdfb097accc535663f2963310->leave($__internal_756356d16ca0d5d112af866fb8ead1a04543bebbdfb097accc535663f2963310_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_a7b8d29f16ddc3e8a54e439c091ffdef54aef880b9d5c9b00b53aa7799fcbafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b8d29f16ddc3e8a54e439c091ffdef54aef880b9d5c9b00b53aa7799fcbafe->enter($__internal_a7b8d29f16ddc3e8a54e439c091ffdef54aef880b9d5c9b00b53aa7799fcbafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_a7b8d29f16ddc3e8a54e439c091ffdef54aef880b9d5c9b00b53aa7799fcbafe->leave($__internal_a7b8d29f16ddc3e8a54e439c091ffdef54aef880b9d5c9b00b53aa7799fcbafe_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_f08a021264ec4b6eec6a80eae14c84ae4130d2031f6ba81320ac3bea660516c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08a021264ec4b6eec6a80eae14c84ae4130d2031f6ba81320ac3bea660516c4->enter($__internal_f08a021264ec4b6eec6a80eae14c84ae4130d2031f6ba81320ac3bea660516c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f08a021264ec4b6eec6a80eae14c84ae4130d2031f6ba81320ac3bea660516c4->leave($__internal_f08a021264ec4b6eec6a80eae14c84ae4130d2031f6ba81320ac3bea660516c4_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_863b124718bfe00fa7930b407e4ec407ea47ccc90326ec8fbb81537d935c3878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863b124718bfe00fa7930b407e4ec407ea47ccc90326ec8fbb81537d935c3878->enter($__internal_863b124718bfe00fa7930b407e4ec407ea47ccc90326ec8fbb81537d935c3878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_863b124718bfe00fa7930b407e4ec407ea47ccc90326ec8fbb81537d935c3878->leave($__internal_863b124718bfe00fa7930b407e4ec407ea47ccc90326ec8fbb81537d935c3878_prof);

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

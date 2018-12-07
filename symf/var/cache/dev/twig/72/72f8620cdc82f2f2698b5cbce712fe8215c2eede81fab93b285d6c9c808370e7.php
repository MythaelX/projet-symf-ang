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
        $__internal_6e96d86edc889e4897740b0a6fbc06b71c99451f58a2fce5f1ddf5e77e3e9d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e96d86edc889e4897740b0a6fbc06b71c99451f58a2fce5f1ddf5e77e3e9d27->enter($__internal_6e96d86edc889e4897740b0a6fbc06b71c99451f58a2fce5f1ddf5e77e3e9d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6e96d86edc889e4897740b0a6fbc06b71c99451f58a2fce5f1ddf5e77e3e9d27->leave($__internal_6e96d86edc889e4897740b0a6fbc06b71c99451f58a2fce5f1ddf5e77e3e9d27_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_503d956b25323df96a1cde74728a39f16c229c7f4c6ff35ab2bf504068a647fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503d956b25323df96a1cde74728a39f16c229c7f4c6ff35ab2bf504068a647fc->enter($__internal_503d956b25323df96a1cde74728a39f16c229c7f4c6ff35ab2bf504068a647fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_503d956b25323df96a1cde74728a39f16c229c7f4c6ff35ab2bf504068a647fc->leave($__internal_503d956b25323df96a1cde74728a39f16c229c7f4c6ff35ab2bf504068a647fc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f38452612e28fd05e0f554228ba9bb084f8e3ec2fa42bcf5ffe2928291a1cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f38452612e28fd05e0f554228ba9bb084f8e3ec2fa42bcf5ffe2928291a1cc1->enter($__internal_8f38452612e28fd05e0f554228ba9bb084f8e3ec2fa42bcf5ffe2928291a1cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_8f38452612e28fd05e0f554228ba9bb084f8e3ec2fa42bcf5ffe2928291a1cc1->leave($__internal_8f38452612e28fd05e0f554228ba9bb084f8e3ec2fa42bcf5ffe2928291a1cc1_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_22ffb836cc6d9f4b36789fd4664760316a93f4efd460bde1e762a189ce604565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ffb836cc6d9f4b36789fd4664760316a93f4efd460bde1e762a189ce604565->enter($__internal_22ffb836cc6d9f4b36789fd4664760316a93f4efd460bde1e762a189ce604565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_22ffb836cc6d9f4b36789fd4664760316a93f4efd460bde1e762a189ce604565->leave($__internal_22ffb836cc6d9f4b36789fd4664760316a93f4efd460bde1e762a189ce604565_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f8b61571698767022a57f913d2e8bb63d0b64135ad2fbf173db1f5f5039171f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8b61571698767022a57f913d2e8bb63d0b64135ad2fbf173db1f5f5039171f->enter($__internal_9f8b61571698767022a57f913d2e8bb63d0b64135ad2fbf173db1f5f5039171f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f8b61571698767022a57f913d2e8bb63d0b64135ad2fbf173db1f5f5039171f->leave($__internal_9f8b61571698767022a57f913d2e8bb63d0b64135ad2fbf173db1f5f5039171f_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b7cc8effca607018d609a443022806e8991193e9e6dc74a91182997fc192e7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cc8effca607018d609a443022806e8991193e9e6dc74a91182997fc192e7af->enter($__internal_b7cc8effca607018d609a443022806e8991193e9e6dc74a91182997fc192e7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b7cc8effca607018d609a443022806e8991193e9e6dc74a91182997fc192e7af->leave($__internal_b7cc8effca607018d609a443022806e8991193e9e6dc74a91182997fc192e7af_prof);

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

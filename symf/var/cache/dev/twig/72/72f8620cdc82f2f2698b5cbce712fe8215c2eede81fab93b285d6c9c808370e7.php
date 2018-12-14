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
        $__internal_7031576d6b1d6609f2576943e9d79855d941772aa2bc9c8f78fc4d6f03f2713b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7031576d6b1d6609f2576943e9d79855d941772aa2bc9c8f78fc4d6f03f2713b->enter($__internal_7031576d6b1d6609f2576943e9d79855d941772aa2bc9c8f78fc4d6f03f2713b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7031576d6b1d6609f2576943e9d79855d941772aa2bc9c8f78fc4d6f03f2713b->leave($__internal_7031576d6b1d6609f2576943e9d79855d941772aa2bc9c8f78fc4d6f03f2713b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e04083a014349708d75e0938a1491e80030ff82f2b820c8c7c02e5f008f37efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04083a014349708d75e0938a1491e80030ff82f2b820c8c7c02e5f008f37efe->enter($__internal_e04083a014349708d75e0938a1491e80030ff82f2b820c8c7c02e5f008f37efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_e04083a014349708d75e0938a1491e80030ff82f2b820c8c7c02e5f008f37efe->leave($__internal_e04083a014349708d75e0938a1491e80030ff82f2b820c8c7c02e5f008f37efe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e182eae11987c2b6e1ffbbc648a8b3172fed67467a1b10d0236d75571a8f915c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e182eae11987c2b6e1ffbbc648a8b3172fed67467a1b10d0236d75571a8f915c->enter($__internal_e182eae11987c2b6e1ffbbc648a8b3172fed67467a1b10d0236d75571a8f915c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_e182eae11987c2b6e1ffbbc648a8b3172fed67467a1b10d0236d75571a8f915c->leave($__internal_e182eae11987c2b6e1ffbbc648a8b3172fed67467a1b10d0236d75571a8f915c_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_0bc72eeb546130d185d68d61fc94ef8b3b091467f3de44711699e8117e132093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc72eeb546130d185d68d61fc94ef8b3b091467f3de44711699e8117e132093->enter($__internal_0bc72eeb546130d185d68d61fc94ef8b3b091467f3de44711699e8117e132093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_0bc72eeb546130d185d68d61fc94ef8b3b091467f3de44711699e8117e132093->leave($__internal_0bc72eeb546130d185d68d61fc94ef8b3b091467f3de44711699e8117e132093_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a11987eff09092a262b09c16e4a3d919169221edddff65961dac7e2b210946a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a11987eff09092a262b09c16e4a3d919169221edddff65961dac7e2b210946a->enter($__internal_2a11987eff09092a262b09c16e4a3d919169221edddff65961dac7e2b210946a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a11987eff09092a262b09c16e4a3d919169221edddff65961dac7e2b210946a->leave($__internal_2a11987eff09092a262b09c16e4a3d919169221edddff65961dac7e2b210946a_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9a8b4ccedfdf67b79e2742a21925868f7c0cb06dd70d33cdfb4e2e5989de12db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8b4ccedfdf67b79e2742a21925868f7c0cb06dd70d33cdfb4e2e5989de12db->enter($__internal_9a8b4ccedfdf67b79e2742a21925868f7c0cb06dd70d33cdfb4e2e5989de12db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_9a8b4ccedfdf67b79e2742a21925868f7c0cb06dd70d33cdfb4e2e5989de12db->leave($__internal_9a8b4ccedfdf67b79e2742a21925868f7c0cb06dd70d33cdfb4e2e5989de12db_prof);

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

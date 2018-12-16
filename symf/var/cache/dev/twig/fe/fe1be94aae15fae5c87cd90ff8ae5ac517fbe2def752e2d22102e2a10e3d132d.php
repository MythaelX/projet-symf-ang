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
        $__internal_46a3018c114eec43a31daef2527a120a3ab4b17ebc1185222b0c995eda926c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a3018c114eec43a31daef2527a120a3ab4b17ebc1185222b0c995eda926c27->enter($__internal_46a3018c114eec43a31daef2527a120a3ab4b17ebc1185222b0c995eda926c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

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
        
        $__internal_46a3018c114eec43a31daef2527a120a3ab4b17ebc1185222b0c995eda926c27->leave($__internal_46a3018c114eec43a31daef2527a120a3ab4b17ebc1185222b0c995eda926c27_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5babba9596257d428fd16f9e38f99304a862dbf7daa99f635998752749c4a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5babba9596257d428fd16f9e38f99304a862dbf7daa99f635998752749c4a7b->enter($__internal_b5babba9596257d428fd16f9e38f99304a862dbf7daa99f635998752749c4a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_b5babba9596257d428fd16f9e38f99304a862dbf7daa99f635998752749c4a7b->leave($__internal_b5babba9596257d428fd16f9e38f99304a862dbf7daa99f635998752749c4a7b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd37bf45dc0db5a5d7bba5f4360716f2766e258a0e0016c80726bf941fa48ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd37bf45dc0db5a5d7bba5f4360716f2766e258a0e0016c80726bf941fa48ceb->enter($__internal_fd37bf45dc0db5a5d7bba5f4360716f2766e258a0e0016c80726bf941fa48ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_fd37bf45dc0db5a5d7bba5f4360716f2766e258a0e0016c80726bf941fa48ceb->leave($__internal_fd37bf45dc0db5a5d7bba5f4360716f2766e258a0e0016c80726bf941fa48ceb_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_f9abb0a585dbe6fb4c4ec415e461aca761d95a5dcbb5b3ccef71414386735266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9abb0a585dbe6fb4c4ec415e461aca761d95a5dcbb5b3ccef71414386735266->enter($__internal_f9abb0a585dbe6fb4c4ec415e461aca761d95a5dcbb5b3ccef71414386735266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_homepage");
        echo "\">Home</a></li>
            </ul>
            ";
        
        $__internal_f9abb0a585dbe6fb4c4ec415e461aca761d95a5dcbb5b3ccef71414386735266->leave($__internal_f9abb0a585dbe6fb4c4ec415e461aca761d95a5dcbb5b3ccef71414386735266_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_83625af5045e2201f5964d41a51fe18a386a30bbd4d8f67beb26677c6c893596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83625af5045e2201f5964d41a51fe18a386a30bbd4d8f67beb26677c6c893596->enter($__internal_83625af5045e2201f5964d41a51fe18a386a30bbd4d8f67beb26677c6c893596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83625af5045e2201f5964d41a51fe18a386a30bbd4d8f67beb26677c6c893596->leave($__internal_83625af5045e2201f5964d41a51fe18a386a30bbd4d8f67beb26677c6c893596_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8885531103002d5d900f527e6b19a8251bc470653d4a0f93ee82b4723efa01c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8885531103002d5d900f527e6b19a8251bc470653d4a0f93ee82b4723efa01c8->enter($__internal_8885531103002d5d900f527e6b19a8251bc470653d4a0f93ee82b4723efa01c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_8885531103002d5d900f527e6b19a8251bc470653d4a0f93ee82b4723efa01c8->leave($__internal_8885531103002d5d900f527e6b19a8251bc470653d4a0f93ee82b4723efa01c8_prof);

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

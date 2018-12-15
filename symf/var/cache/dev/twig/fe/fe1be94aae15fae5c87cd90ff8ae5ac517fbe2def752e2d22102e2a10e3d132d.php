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
        $__internal_3fadcf831a83ed773141dea9f3135a64e432746a84bb81a2bd1a01e0cafb2d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fadcf831a83ed773141dea9f3135a64e432746a84bb81a2bd1a01e0cafb2d08->enter($__internal_3fadcf831a83ed773141dea9f3135a64e432746a84bb81a2bd1a01e0cafb2d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

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
        
        $__internal_3fadcf831a83ed773141dea9f3135a64e432746a84bb81a2bd1a01e0cafb2d08->leave($__internal_3fadcf831a83ed773141dea9f3135a64e432746a84bb81a2bd1a01e0cafb2d08_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_020beadb7fd56f728351af5a89646a9f232af6e4a8db9f9be301eccbafc1c67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020beadb7fd56f728351af5a89646a9f232af6e4a8db9f9be301eccbafc1c67a->enter($__internal_020beadb7fd56f728351af5a89646a9f232af6e4a8db9f9be301eccbafc1c67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_020beadb7fd56f728351af5a89646a9f232af6e4a8db9f9be301eccbafc1c67a->leave($__internal_020beadb7fd56f728351af5a89646a9f232af6e4a8db9f9be301eccbafc1c67a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe9cbf505e0bae079079fab0ea328cb35b7c14707e812fccdbbab35cbda12538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9cbf505e0bae079079fab0ea328cb35b7c14707e812fccdbbab35cbda12538->enter($__internal_fe9cbf505e0bae079079fab0ea328cb35b7c14707e812fccdbbab35cbda12538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_fe9cbf505e0bae079079fab0ea328cb35b7c14707e812fccdbbab35cbda12538->leave($__internal_fe9cbf505e0bae079079fab0ea328cb35b7c14707e812fccdbbab35cbda12538_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_f40c1e1a3d6256ff1eee04aacffaf371d926438dc72c71f61250f1abf57b312b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40c1e1a3d6256ff1eee04aacffaf371d926438dc72c71f61250f1abf57b312b->enter($__internal_f40c1e1a3d6256ff1eee04aacffaf371d926438dc72c71f61250f1abf57b312b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_homepage");
        echo "\">Home</a></li>
            </ul>
            ";
        
        $__internal_f40c1e1a3d6256ff1eee04aacffaf371d926438dc72c71f61250f1abf57b312b->leave($__internal_f40c1e1a3d6256ff1eee04aacffaf371d926438dc72c71f61250f1abf57b312b_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_06178ca52edd5c5fd851db17763052af72a047ee7dc8bdebc44f25a812c86525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06178ca52edd5c5fd851db17763052af72a047ee7dc8bdebc44f25a812c86525->enter($__internal_06178ca52edd5c5fd851db17763052af72a047ee7dc8bdebc44f25a812c86525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_06178ca52edd5c5fd851db17763052af72a047ee7dc8bdebc44f25a812c86525->leave($__internal_06178ca52edd5c5fd851db17763052af72a047ee7dc8bdebc44f25a812c86525_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a1760ab2e2f67654f9b27a742d439b43d431dccd845fe0ee87997069066add9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1760ab2e2f67654f9b27a742d439b43d431dccd845fe0ee87997069066add9e->enter($__internal_a1760ab2e2f67654f9b27a742d439b43d431dccd845fe0ee87997069066add9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a1760ab2e2f67654f9b27a742d439b43d431dccd845fe0ee87997069066add9e->leave($__internal_a1760ab2e2f67654f9b27a742d439b43d431dccd845fe0ee87997069066add9e_prof);

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

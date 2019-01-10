<?php

/* baseBack.html.twig */
class __TwigTemplate_c8ca75215d6e316757b8f2198578c7a23892be67b04f7be2c3299fa28f64aaa8 extends Twig_Template
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
        $__internal_b2e7a0614da7a2c7b8b5b71a66c80f135b8b67a05841fd6c1d6bf8bde049ad90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e7a0614da7a2c7b8b5b71a66c80f135b8b67a05841fd6c1d6bf8bde049ad90->enter($__internal_b2e7a0614da7a2c7b8b5b71a66c80f135b8b67a05841fd6c1d6bf8bde049ad90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

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
        
        $__internal_b2e7a0614da7a2c7b8b5b71a66c80f135b8b67a05841fd6c1d6bf8bde049ad90->leave($__internal_b2e7a0614da7a2c7b8b5b71a66c80f135b8b67a05841fd6c1d6bf8bde049ad90_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dbb44e59960f0ad12c68e403193c407e21b3b63dc0869f098851f37fd98a8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbb44e59960f0ad12c68e403193c407e21b3b63dc0869f098851f37fd98a8f4->enter($__internal_7dbb44e59960f0ad12c68e403193c407e21b3b63dc0869f098851f37fd98a8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_7dbb44e59960f0ad12c68e403193c407e21b3b63dc0869f098851f37fd98a8f4->leave($__internal_7dbb44e59960f0ad12c68e403193c407e21b3b63dc0869f098851f37fd98a8f4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a88c75f29d3691f1ad3fa1dfa82278d040ccc38aef8ebee2d110537968f7132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a88c75f29d3691f1ad3fa1dfa82278d040ccc38aef8ebee2d110537968f7132->enter($__internal_0a88c75f29d3691f1ad3fa1dfa82278d040ccc38aef8ebee2d110537968f7132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_0a88c75f29d3691f1ad3fa1dfa82278d040ccc38aef8ebee2d110537968f7132->leave($__internal_0a88c75f29d3691f1ad3fa1dfa82278d040ccc38aef8ebee2d110537968f7132_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_83897e86063996f61ec586a3bcab418ea23ba7c03c0ca51cb948ceac9b394bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83897e86063996f61ec586a3bcab418ea23ba7c03c0ca51cb948ceac9b394bb2->enter($__internal_83897e86063996f61ec586a3bcab418ea23ba7c03c0ca51cb948ceac9b394bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_homepage");
        echo "\">Home</a></li>
            </ul>
            ";
        
        $__internal_83897e86063996f61ec586a3bcab418ea23ba7c03c0ca51cb948ceac9b394bb2->leave($__internal_83897e86063996f61ec586a3bcab418ea23ba7c03c0ca51cb948ceac9b394bb2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_a32db2d2d4020d47b2ee53c5c5daccdbec41d1cb98ce654d2c853f41d6bff9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32db2d2d4020d47b2ee53c5c5daccdbec41d1cb98ce654d2c853f41d6bff9d9->enter($__internal_a32db2d2d4020d47b2ee53c5c5daccdbec41d1cb98ce654d2c853f41d6bff9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a32db2d2d4020d47b2ee53c5c5daccdbec41d1cb98ce654d2c853f41d6bff9d9->leave($__internal_a32db2d2d4020d47b2ee53c5c5daccdbec41d1cb98ce654d2c853f41d6bff9d9_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_155309eab95670550c9b1da94d3443d082a79a6f6d5c52a4f5f5ac4359163344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155309eab95670550c9b1da94d3443d082a79a6f6d5c52a4f5f5ac4359163344->enter($__internal_155309eab95670550c9b1da94d3443d082a79a6f6d5c52a4f5f5ac4359163344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_155309eab95670550c9b1da94d3443d082a79a6f6d5c52a4f5f5ac4359163344->leave($__internal_155309eab95670550c9b1da94d3443d082a79a6f6d5c52a4f5f5ac4359163344_prof);

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
", "baseBack.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/baseBack.html.twig");
    }
}

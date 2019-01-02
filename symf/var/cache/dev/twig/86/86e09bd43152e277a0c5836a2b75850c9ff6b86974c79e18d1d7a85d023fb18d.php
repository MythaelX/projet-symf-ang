<?php

/* baseBack.html.twig */
class __TwigTemplate_75729e264dae2fb6b97e5a659a2d3ec17ae54ef08a2fcc67d8c94917277fa2f0 extends Twig_Template
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
        $__internal_5f702c41d2ff9593ed5e38e7411dd103d80d3ebee9278ccd0ad0e89e42b75656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f702c41d2ff9593ed5e38e7411dd103d80d3ebee9278ccd0ad0e89e42b75656->enter($__internal_5f702c41d2ff9593ed5e38e7411dd103d80d3ebee9278ccd0ad0e89e42b75656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

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
        
        $__internal_5f702c41d2ff9593ed5e38e7411dd103d80d3ebee9278ccd0ad0e89e42b75656->leave($__internal_5f702c41d2ff9593ed5e38e7411dd103d80d3ebee9278ccd0ad0e89e42b75656_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dc5db819add4d190b50728e724d060fd4e7360d195a1886649d43373e5a818c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc5db819add4d190b50728e724d060fd4e7360d195a1886649d43373e5a818c->enter($__internal_4dc5db819add4d190b50728e724d060fd4e7360d195a1886649d43373e5a818c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_4dc5db819add4d190b50728e724d060fd4e7360d195a1886649d43373e5a818c->leave($__internal_4dc5db819add4d190b50728e724d060fd4e7360d195a1886649d43373e5a818c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a444a4e3c9351525fe8f42638853d624b1a68299eea931a1f426085f2f483ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a444a4e3c9351525fe8f42638853d624b1a68299eea931a1f426085f2f483ad->enter($__internal_3a444a4e3c9351525fe8f42638853d624b1a68299eea931a1f426085f2f483ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_3a444a4e3c9351525fe8f42638853d624b1a68299eea931a1f426085f2f483ad->leave($__internal_3a444a4e3c9351525fe8f42638853d624b1a68299eea931a1f426085f2f483ad_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_8dcc004adb5d95c72ba1a0a6382d8bc9ae13261f247a20cd2abbe1c298a5bf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dcc004adb5d95c72ba1a0a6382d8bc9ae13261f247a20cd2abbe1c298a5bf70->enter($__internal_8dcc004adb5d95c72ba1a0a6382d8bc9ae13261f247a20cd2abbe1c298a5bf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_homepage");
        echo "\">Home</a></li>
            </ul>
            ";
        
        $__internal_8dcc004adb5d95c72ba1a0a6382d8bc9ae13261f247a20cd2abbe1c298a5bf70->leave($__internal_8dcc004adb5d95c72ba1a0a6382d8bc9ae13261f247a20cd2abbe1c298a5bf70_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_298a51dd8e00e1d7a2195a2532db02b2ec0560b7224041a48a4f2dd14f200ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298a51dd8e00e1d7a2195a2532db02b2ec0560b7224041a48a4f2dd14f200ebe->enter($__internal_298a51dd8e00e1d7a2195a2532db02b2ec0560b7224041a48a4f2dd14f200ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_298a51dd8e00e1d7a2195a2532db02b2ec0560b7224041a48a4f2dd14f200ebe->leave($__internal_298a51dd8e00e1d7a2195a2532db02b2ec0560b7224041a48a4f2dd14f200ebe_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6742cc7650b9c203a13d7eea6f56ee89a41f7d411d4c1f6bb393b960de34c434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6742cc7650b9c203a13d7eea6f56ee89a41f7d411d4c1f6bb393b960de34c434->enter($__internal_6742cc7650b9c203a13d7eea6f56ee89a41f7d411d4c1f6bb393b960de34c434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6742cc7650b9c203a13d7eea6f56ee89a41f7d411d4c1f6bb393b960de34c434->leave($__internal_6742cc7650b9c203a13d7eea6f56ee89a41f7d411d4c1f6bb393b960de34c434_prof);

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

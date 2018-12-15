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
        $__internal_12e92803e004eec5317f2a57d4202389d4741919153868a87cf38feef19e3b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e92803e004eec5317f2a57d4202389d4741919153868a87cf38feef19e3b9c->enter($__internal_12e92803e004eec5317f2a57d4202389d4741919153868a87cf38feef19e3b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

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
        
        $__internal_12e92803e004eec5317f2a57d4202389d4741919153868a87cf38feef19e3b9c->leave($__internal_12e92803e004eec5317f2a57d4202389d4741919153868a87cf38feef19e3b9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3e52475c041b161ea4fa7f7fec77ea4dc16f2b114d582bb6ece058f0c2aea85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e52475c041b161ea4fa7f7fec77ea4dc16f2b114d582bb6ece058f0c2aea85->enter($__internal_d3e52475c041b161ea4fa7f7fec77ea4dc16f2b114d582bb6ece058f0c2aea85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_d3e52475c041b161ea4fa7f7fec77ea4dc16f2b114d582bb6ece058f0c2aea85->leave($__internal_d3e52475c041b161ea4fa7f7fec77ea4dc16f2b114d582bb6ece058f0c2aea85_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb3989b21794da9e23f96501079a6eb6418e11fa51e1243f08cc2a7f20302977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3989b21794da9e23f96501079a6eb6418e11fa51e1243f08cc2a7f20302977->enter($__internal_fb3989b21794da9e23f96501079a6eb6418e11fa51e1243f08cc2a7f20302977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_fb3989b21794da9e23f96501079a6eb6418e11fa51e1243f08cc2a7f20302977->leave($__internal_fb3989b21794da9e23f96501079a6eb6418e11fa51e1243f08cc2a7f20302977_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_418e87d95e950e6f10cd86e1200132bf209cf178b087c7fcbfb771e33e57ac06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418e87d95e950e6f10cd86e1200132bf209cf178b087c7fcbfb771e33e57ac06->enter($__internal_418e87d95e950e6f10cd86e1200132bf209cf178b087c7fcbfb771e33e57ac06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_homepage");
        echo "\">Home</a></li>
            </ul>
            ";
        
        $__internal_418e87d95e950e6f10cd86e1200132bf209cf178b087c7fcbfb771e33e57ac06->leave($__internal_418e87d95e950e6f10cd86e1200132bf209cf178b087c7fcbfb771e33e57ac06_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_65f21961daf3fc03c4b847b5de28c8e5253ad7a596d2bb289d1f125b46bc6df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f21961daf3fc03c4b847b5de28c8e5253ad7a596d2bb289d1f125b46bc6df7->enter($__internal_65f21961daf3fc03c4b847b5de28c8e5253ad7a596d2bb289d1f125b46bc6df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65f21961daf3fc03c4b847b5de28c8e5253ad7a596d2bb289d1f125b46bc6df7->leave($__internal_65f21961daf3fc03c4b847b5de28c8e5253ad7a596d2bb289d1f125b46bc6df7_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2eeb7e28e538a31e1e79bb5dc8d320655f09c62a37317773f4f33460e2f9d485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eeb7e28e538a31e1e79bb5dc8d320655f09c62a37317773f4f33460e2f9d485->enter($__internal_2eeb7e28e538a31e1e79bb5dc8d320655f09c62a37317773f4f33460e2f9d485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_2eeb7e28e538a31e1e79bb5dc8d320655f09c62a37317773f4f33460e2f9d485->leave($__internal_2eeb7e28e538a31e1e79bb5dc8d320655f09c62a37317773f4f33460e2f9d485_prof);

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

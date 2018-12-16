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
        $__internal_f012b925aeaf628781e8c23a529a5e083c466ccd85951ff4b3dec872c10847f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f012b925aeaf628781e8c23a529a5e083c466ccd85951ff4b3dec872c10847f7->enter($__internal_f012b925aeaf628781e8c23a529a5e083c466ccd85951ff4b3dec872c10847f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

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
        
        $__internal_f012b925aeaf628781e8c23a529a5e083c466ccd85951ff4b3dec872c10847f7->leave($__internal_f012b925aeaf628781e8c23a529a5e083c466ccd85951ff4b3dec872c10847f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_38ec0f0aafc2e6cc7eab667043ff710f13487b7fde37c1c2502c4d36a338fcbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ec0f0aafc2e6cc7eab667043ff710f13487b7fde37c1c2502c4d36a338fcbf->enter($__internal_38ec0f0aafc2e6cc7eab667043ff710f13487b7fde37c1c2502c4d36a338fcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_38ec0f0aafc2e6cc7eab667043ff710f13487b7fde37c1c2502c4d36a338fcbf->leave($__internal_38ec0f0aafc2e6cc7eab667043ff710f13487b7fde37c1c2502c4d36a338fcbf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f318b15c63191d5928e75bfdad1cef65a6de180b4cf41652dd7101a04fc9294a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f318b15c63191d5928e75bfdad1cef65a6de180b4cf41652dd7101a04fc9294a->enter($__internal_f318b15c63191d5928e75bfdad1cef65a6de180b4cf41652dd7101a04fc9294a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_f318b15c63191d5928e75bfdad1cef65a6de180b4cf41652dd7101a04fc9294a->leave($__internal_f318b15c63191d5928e75bfdad1cef65a6de180b4cf41652dd7101a04fc9294a_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_9498cabf373235fb2246e2c8ff9d2d0264e26d9cdcedaa502fbc60e164cf9b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9498cabf373235fb2246e2c8ff9d2d0264e26d9cdcedaa502fbc60e164cf9b0d->enter($__internal_9498cabf373235fb2246e2c8ff9d2d0264e26d9cdcedaa502fbc60e164cf9b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_homepage");
        echo "\">Home</a></li>
            </ul>
            ";
        
        $__internal_9498cabf373235fb2246e2c8ff9d2d0264e26d9cdcedaa502fbc60e164cf9b0d->leave($__internal_9498cabf373235fb2246e2c8ff9d2d0264e26d9cdcedaa502fbc60e164cf9b0d_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_702da64f591b9ed43094b8032f0de1a3b04cca9e65dba48b55c63ae0035dccd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702da64f591b9ed43094b8032f0de1a3b04cca9e65dba48b55c63ae0035dccd4->enter($__internal_702da64f591b9ed43094b8032f0de1a3b04cca9e65dba48b55c63ae0035dccd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_702da64f591b9ed43094b8032f0de1a3b04cca9e65dba48b55c63ae0035dccd4->leave($__internal_702da64f591b9ed43094b8032f0de1a3b04cca9e65dba48b55c63ae0035dccd4_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2ef1f9e94496f0761d4f1c375f3dd3ca146a69f96f057ec5a9eb810820387bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef1f9e94496f0761d4f1c375f3dd3ca146a69f96f057ec5a9eb810820387bfa->enter($__internal_2ef1f9e94496f0761d4f1c375f3dd3ca146a69f96f057ec5a9eb810820387bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_2ef1f9e94496f0761d4f1c375f3dd3ca146a69f96f057ec5a9eb810820387bfa->leave($__internal_2ef1f9e94496f0761d4f1c375f3dd3ca146a69f96f057ec5a9eb810820387bfa_prof);

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

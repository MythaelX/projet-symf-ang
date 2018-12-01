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
        $__internal_595bd4ff477237319e10717763367ffad8282de7660c0329bbb9e31b04a62a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595bd4ff477237319e10717763367ffad8282de7660c0329bbb9e31b04a62a70->enter($__internal_595bd4ff477237319e10717763367ffad8282de7660c0329bbb9e31b04a62a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_595bd4ff477237319e10717763367ffad8282de7660c0329bbb9e31b04a62a70->leave($__internal_595bd4ff477237319e10717763367ffad8282de7660c0329bbb9e31b04a62a70_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c70ef632b1f64bd378b92d2d057779f81f17360761e63a706dd20715ee2d24cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70ef632b1f64bd378b92d2d057779f81f17360761e63a706dd20715ee2d24cc->enter($__internal_c70ef632b1f64bd378b92d2d057779f81f17360761e63a706dd20715ee2d24cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_c70ef632b1f64bd378b92d2d057779f81f17360761e63a706dd20715ee2d24cc->leave($__internal_c70ef632b1f64bd378b92d2d057779f81f17360761e63a706dd20715ee2d24cc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00b60fe40202d10a2746984d0900fdd0e62d3c946be9b96fb6bbb289991ef81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b60fe40202d10a2746984d0900fdd0e62d3c946be9b96fb6bbb289991ef81f->enter($__internal_00b60fe40202d10a2746984d0900fdd0e62d3c946be9b96fb6bbb289991ef81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_00b60fe40202d10a2746984d0900fdd0e62d3c946be9b96fb6bbb289991ef81f->leave($__internal_00b60fe40202d10a2746984d0900fdd0e62d3c946be9b96fb6bbb289991ef81f_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_620be43d173ab1b37340aa88ead50f32e42e24a18b8eea0fc200c9e8e295f0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620be43d173ab1b37340aa88ead50f32e42e24a18b8eea0fc200c9e8e295f0c1->enter($__internal_620be43d173ab1b37340aa88ead50f32e42e24a18b8eea0fc200c9e8e295f0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_620be43d173ab1b37340aa88ead50f32e42e24a18b8eea0fc200c9e8e295f0c1->leave($__internal_620be43d173ab1b37340aa88ead50f32e42e24a18b8eea0fc200c9e8e295f0c1_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_7828b67a9deef0f6b5a7e158d814050fcc4942c3f63a3df510a0ad0807b114a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7828b67a9deef0f6b5a7e158d814050fcc4942c3f63a3df510a0ad0807b114a1->enter($__internal_7828b67a9deef0f6b5a7e158d814050fcc4942c3f63a3df510a0ad0807b114a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7828b67a9deef0f6b5a7e158d814050fcc4942c3f63a3df510a0ad0807b114a1->leave($__internal_7828b67a9deef0f6b5a7e158d814050fcc4942c3f63a3df510a0ad0807b114a1_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0c0a3123645a617ca4ee11bb4beaf6885a4a6c6b21b38bdd903018bfb7fc0f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0a3123645a617ca4ee11bb4beaf6885a4a6c6b21b38bdd903018bfb7fc0f2d->enter($__internal_0c0a3123645a617ca4ee11bb4beaf6885a4a6c6b21b38bdd903018bfb7fc0f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_0c0a3123645a617ca4ee11bb4beaf6885a4a6c6b21b38bdd903018bfb7fc0f2d->leave($__internal_0c0a3123645a617ca4ee11bb4beaf6885a4a6c6b21b38bdd903018bfb7fc0f2d_prof);

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

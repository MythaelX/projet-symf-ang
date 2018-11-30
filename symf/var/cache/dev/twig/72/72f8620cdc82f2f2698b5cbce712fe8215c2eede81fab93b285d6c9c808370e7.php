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
        $__internal_0f3ba4d1c7ab13ec42c82803d6e891258887f9aa1ca6c0c0ac818dd6ab2b9563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3ba4d1c7ab13ec42c82803d6e891258887f9aa1ca6c0c0ac818dd6ab2b9563->enter($__internal_0f3ba4d1c7ab13ec42c82803d6e891258887f9aa1ca6c0c0ac818dd6ab2b9563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0f3ba4d1c7ab13ec42c82803d6e891258887f9aa1ca6c0c0ac818dd6ab2b9563->leave($__internal_0f3ba4d1c7ab13ec42c82803d6e891258887f9aa1ca6c0c0ac818dd6ab2b9563_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8260c8d9521dceb0498c894fd5427114bbaae12a3d438bcbef6628a368deac94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8260c8d9521dceb0498c894fd5427114bbaae12a3d438bcbef6628a368deac94->enter($__internal_8260c8d9521dceb0498c894fd5427114bbaae12a3d438bcbef6628a368deac94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_8260c8d9521dceb0498c894fd5427114bbaae12a3d438bcbef6628a368deac94->leave($__internal_8260c8d9521dceb0498c894fd5427114bbaae12a3d438bcbef6628a368deac94_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48c139ff0da1af2078276ad9d8a233bbdf6bddf43775ebaf6800bc8e169248b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c139ff0da1af2078276ad9d8a233bbdf6bddf43775ebaf6800bc8e169248b2->enter($__internal_48c139ff0da1af2078276ad9d8a233bbdf6bddf43775ebaf6800bc8e169248b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_48c139ff0da1af2078276ad9d8a233bbdf6bddf43775ebaf6800bc8e169248b2->leave($__internal_48c139ff0da1af2078276ad9d8a233bbdf6bddf43775ebaf6800bc8e169248b2_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_f041486cb318998108c1ee9db24903b1762a65138126c33333f1799ff03e310d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f041486cb318998108c1ee9db24903b1762a65138126c33333f1799ff03e310d->enter($__internal_f041486cb318998108c1ee9db24903b1762a65138126c33333f1799ff03e310d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_office_homepage");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
        echo "\">Nouveau trajet</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nouveauTrajet");
        echo "\">Modifier son profil</a></li>
            </ul>
            ";
        
        $__internal_f041486cb318998108c1ee9db24903b1762a65138126c33333f1799ff03e310d->leave($__internal_f041486cb318998108c1ee9db24903b1762a65138126c33333f1799ff03e310d_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_130b0cbbff5f0b84281cf48537c719f4a016b8dc92885161b72aa0af8a7eeb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130b0cbbff5f0b84281cf48537c719f4a016b8dc92885161b72aa0af8a7eeb13->enter($__internal_130b0cbbff5f0b84281cf48537c719f4a016b8dc92885161b72aa0af8a7eeb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_130b0cbbff5f0b84281cf48537c719f4a016b8dc92885161b72aa0af8a7eeb13->leave($__internal_130b0cbbff5f0b84281cf48537c719f4a016b8dc92885161b72aa0af8a7eeb13_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_defa334996a042bfaef0802617ad753d8cba88f9a206f1b5455a571d939c919d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defa334996a042bfaef0802617ad753d8cba88f9a206f1b5455a571d939c919d->enter($__internal_defa334996a042bfaef0802617ad753d8cba88f9a206f1b5455a571d939c919d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_defa334996a042bfaef0802617ad753d8cba88f9a206f1b5455a571d939c919d->leave($__internal_defa334996a042bfaef0802617ad753d8cba88f9a206f1b5455a571d939c919d_prof);

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
                <li><a href=\"{{ path('profil') }}\">Nouveau trajet</a></li>
                <li><a href=\"{{ path('nouveauTrajet') }}\">Modifier son profil</a></li>
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

<?php

/* base.html.twig */
class __TwigTemplate_e2d21215726556d7a2b9206e83e6061cc251f39bee62896aecdbb35410598892 extends Twig_Template
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
        $__internal_81f0428a1d28ebb0967e5195ffe8fcd9f1c99cfaa57ad6e51698c8260cf52a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f0428a1d28ebb0967e5195ffe8fcd9f1c99cfaa57ad6e51698c8260cf52a39->enter($__internal_81f0428a1d28ebb0967e5195ffe8fcd9f1c99cfaa57ad6e51698c8260cf52a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_81f0428a1d28ebb0967e5195ffe8fcd9f1c99cfaa57ad6e51698c8260cf52a39->leave($__internal_81f0428a1d28ebb0967e5195ffe8fcd9f1c99cfaa57ad6e51698c8260cf52a39_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_33b33673daf69ab5974073a425cea924660b29a943a3cd3e0189a82eb6db09a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b33673daf69ab5974073a425cea924660b29a943a3cd3e0189a82eb6db09a9->enter($__internal_33b33673daf69ab5974073a425cea924660b29a943a3cd3e0189a82eb6db09a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_33b33673daf69ab5974073a425cea924660b29a943a3cd3e0189a82eb6db09a9->leave($__internal_33b33673daf69ab5974073a425cea924660b29a943a3cd3e0189a82eb6db09a9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a331529e4aeed480e0d66e888fa20e7719f4ef4b0f0f24d5c3654afd682d95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a331529e4aeed480e0d66e888fa20e7719f4ef4b0f0f24d5c3654afd682d95d->enter($__internal_9a331529e4aeed480e0d66e888fa20e7719f4ef4b0f0f24d5c3654afd682d95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_9a331529e4aeed480e0d66e888fa20e7719f4ef4b0f0f24d5c3654afd682d95d->leave($__internal_9a331529e4aeed480e0d66e888fa20e7719f4ef4b0f0f24d5c3654afd682d95d_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_82cc6845367615806f57f088e4df59ac3b399cc51c7261c533be8d12e4261478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cc6845367615806f57f088e4df59ac3b399cc51c7261c533be8d12e4261478->enter($__internal_82cc6845367615806f57f088e4df59ac3b399cc51c7261c533be8d12e4261478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_82cc6845367615806f57f088e4df59ac3b399cc51c7261c533be8d12e4261478->leave($__internal_82cc6845367615806f57f088e4df59ac3b399cc51c7261c533be8d12e4261478_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_043ac0be39a08d60b687d83a3ca6f1067dd9b755b816267ffffa4f0fcf976c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043ac0be39a08d60b687d83a3ca6f1067dd9b755b816267ffffa4f0fcf976c1e->enter($__internal_043ac0be39a08d60b687d83a3ca6f1067dd9b755b816267ffffa4f0fcf976c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_043ac0be39a08d60b687d83a3ca6f1067dd9b755b816267ffffa4f0fcf976c1e->leave($__internal_043ac0be39a08d60b687d83a3ca6f1067dd9b755b816267ffffa4f0fcf976c1e_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_76bef789849274d56a1c91662088fea386e77e1c1765104c0ac7d4d7ccd6df24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bef789849274d56a1c91662088fea386e77e1c1765104c0ac7d4d7ccd6df24->enter($__internal_76bef789849274d56a1c91662088fea386e77e1c1765104c0ac7d4d7ccd6df24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_76bef789849274d56a1c91662088fea386e77e1c1765104c0ac7d4d7ccd6df24->leave($__internal_76bef789849274d56a1c91662088fea386e77e1c1765104c0ac7d4d7ccd6df24_prof);

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
", "base.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/base.html.twig");
    }
}

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
        $__internal_164eb271301da4994d781ee6fb635a8eefe4cb4a9976a0155230108685889279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164eb271301da4994d781ee6fb635a8eefe4cb4a9976a0155230108685889279->enter($__internal_164eb271301da4994d781ee6fb635a8eefe4cb4a9976a0155230108685889279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

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
        
        $__internal_164eb271301da4994d781ee6fb635a8eefe4cb4a9976a0155230108685889279->leave($__internal_164eb271301da4994d781ee6fb635a8eefe4cb4a9976a0155230108685889279_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f89b9d888fa78b27dd85c3ee6ee2c7d2ae1d35c1a9d0dea813876a955801aa60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89b9d888fa78b27dd85c3ee6ee2c7d2ae1d35c1a9d0dea813876a955801aa60->enter($__internal_f89b9d888fa78b27dd85c3ee6ee2c7d2ae1d35c1a9d0dea813876a955801aa60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_f89b9d888fa78b27dd85c3ee6ee2c7d2ae1d35c1a9d0dea813876a955801aa60->leave($__internal_f89b9d888fa78b27dd85c3ee6ee2c7d2ae1d35c1a9d0dea813876a955801aa60_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_871745f4717c8bdf028f7dc718ab817eedc7da72adf02f021422c9ce4ecc9dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871745f4717c8bdf028f7dc718ab817eedc7da72adf02f021422c9ce4ecc9dde->enter($__internal_871745f4717c8bdf028f7dc718ab817eedc7da72adf02f021422c9ce4ecc9dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_871745f4717c8bdf028f7dc718ab817eedc7da72adf02f021422c9ce4ecc9dde->leave($__internal_871745f4717c8bdf028f7dc718ab817eedc7da72adf02f021422c9ce4ecc9dde_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_98a4494c8b2123eee0c10a076c41090dd2b1a80dc31b8d60fa4e2917bb64a424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a4494c8b2123eee0c10a076c41090dd2b1a80dc31b8d60fa4e2917bb64a424->enter($__internal_98a4494c8b2123eee0c10a076c41090dd2b1a80dc31b8d60fa4e2917bb64a424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_homepage");
        echo "\">Home</a></li>
            </ul>
            ";
        
        $__internal_98a4494c8b2123eee0c10a076c41090dd2b1a80dc31b8d60fa4e2917bb64a424->leave($__internal_98a4494c8b2123eee0c10a076c41090dd2b1a80dc31b8d60fa4e2917bb64a424_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_f94ca8dc267affc508537dea2e29c368ff18127b421f88ee275e7858cf54ebb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94ca8dc267affc508537dea2e29c368ff18127b421f88ee275e7858cf54ebb4->enter($__internal_f94ca8dc267affc508537dea2e29c368ff18127b421f88ee275e7858cf54ebb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f94ca8dc267affc508537dea2e29c368ff18127b421f88ee275e7858cf54ebb4->leave($__internal_f94ca8dc267affc508537dea2e29c368ff18127b421f88ee275e7858cf54ebb4_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6a17a3d6f7e8b026669352ea346130310117049cf4044a87a479515593c853e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a17a3d6f7e8b026669352ea346130310117049cf4044a87a479515593c853e8->enter($__internal_6a17a3d6f7e8b026669352ea346130310117049cf4044a87a479515593c853e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6a17a3d6f7e8b026669352ea346130310117049cf4044a87a479515593c853e8->leave($__internal_6a17a3d6f7e8b026669352ea346130310117049cf4044a87a479515593c853e8_prof);

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

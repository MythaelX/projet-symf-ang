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
        $__internal_dff702b1f72ebfcf6b03edd979990fa68a5af9d5f5e3d35a7917d5ecd263b850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff702b1f72ebfcf6b03edd979990fa68a5af9d5f5e3d35a7917d5ecd263b850->enter($__internal_dff702b1f72ebfcf6b03edd979990fa68a5af9d5f5e3d35a7917d5ecd263b850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 18
        echo "        </div>

        <div id=\"content\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        </div>

        <div id=\"footer\">
            ";
        // line 25
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "        </div>
    </body>
</html>
";
        
        $__internal_dff702b1f72ebfcf6b03edd979990fa68a5af9d5f5e3d35a7917d5ecd263b850->leave($__internal_dff702b1f72ebfcf6b03edd979990fa68a5af9d5f5e3d35a7917d5ecd263b850_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a89832ccc44cca1be4e47e0410093f066e5526c4fceb866110c796dcfbf5dcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89832ccc44cca1be4e47e0410093f066e5526c4fceb866110c796dcfbf5dcd3->enter($__internal_a89832ccc44cca1be4e47e0410093f066e5526c4fceb866110c796dcfbf5dcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_a89832ccc44cca1be4e47e0410093f066e5526c4fceb866110c796dcfbf5dcd3->leave($__internal_a89832ccc44cca1be4e47e0410093f066e5526c4fceb866110c796dcfbf5dcd3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77bd3685e8eed5fd27949226e1902f28a3efe902a5c930dcb86c3cf0b2489b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bd3685e8eed5fd27949226e1902f28a3efe902a5c930dcb86c3cf0b2489b7d->enter($__internal_77bd3685e8eed5fd27949226e1902f28a3efe902a5c930dcb86c3cf0b2489b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_77bd3685e8eed5fd27949226e1902f28a3efe902a5c930dcb86c3cf0b2489b7d->leave($__internal_77bd3685e8eed5fd27949226e1902f28a3efe902a5c930dcb86c3cf0b2489b7d_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_0db4a805bc629ff9d9fe98bce80ad8fde7aa7a7a1cf863061e49c6cacb1a1667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db4a805bc629ff9d9fe98bce80ad8fde7aa7a7a1cf863061e49c6cacb1a1667->enter($__internal_0db4a805bc629ff9d9fe98bce80ad8fde7aa7a7a1cf863061e49c6cacb1a1667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_office_homepage");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
        echo "\">Modifier son profil</a></li>
            </ul>
            ";
        
        $__internal_0db4a805bc629ff9d9fe98bce80ad8fde7aa7a7a1cf863061e49c6cacb1a1667->leave($__internal_0db4a805bc629ff9d9fe98bce80ad8fde7aa7a7a1cf863061e49c6cacb1a1667_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5c37bc6b14784737d5cc728338f64ba43d0c990ae27e2adbdf47efb535da0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c37bc6b14784737d5cc728338f64ba43d0c990ae27e2adbdf47efb535da0ef->enter($__internal_f5c37bc6b14784737d5cc728338f64ba43d0c990ae27e2adbdf47efb535da0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5c37bc6b14784737d5cc728338f64ba43d0c990ae27e2adbdf47efb535da0ef->leave($__internal_f5c37bc6b14784737d5cc728338f64ba43d0c990ae27e2adbdf47efb535da0ef_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f7eded3e6d09162532d3a4e6dbcf276678ce2c84071f9998e9a6111cf323b3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7eded3e6d09162532d3a4e6dbcf276678ce2c84071f9998e9a6111cf323b3c1->enter($__internal_f7eded3e6d09162532d3a4e6dbcf276678ce2c84071f9998e9a6111cf323b3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_f7eded3e6d09162532d3a4e6dbcf276678ce2c84071f9998e9a6111cf323b3c1->leave($__internal_f7eded3e6d09162532d3a4e6dbcf276678ce2c84071f9998e9a6111cf323b3c1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 25,  121 => 21,  111 => 15,  107 => 14,  104 => 13,  98 => 12,  88 => 7,  82 => 6,  70 => 5,  60 => 26,  58 => 25,  53 => 22,  51 => 21,  46 => 18,  44 => 12,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
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

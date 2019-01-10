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
        $__internal_e1324b08078508855afa0c31553896e56b9fde3a07c36d78bc1aae260ec7e28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1324b08078508855afa0c31553896e56b9fde3a07c36d78bc1aae260ec7e28d->enter($__internal_e1324b08078508855afa0c31553896e56b9fde3a07c36d78bc1aae260ec7e28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

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
        
        $__internal_e1324b08078508855afa0c31553896e56b9fde3a07c36d78bc1aae260ec7e28d->leave($__internal_e1324b08078508855afa0c31553896e56b9fde3a07c36d78bc1aae260ec7e28d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_40ad67e741184352a708e2729079c3eb6483133f22265ae1e08582dc6dd99a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ad67e741184352a708e2729079c3eb6483133f22265ae1e08582dc6dd99a39->enter($__internal_40ad67e741184352a708e2729079c3eb6483133f22265ae1e08582dc6dd99a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_40ad67e741184352a708e2729079c3eb6483133f22265ae1e08582dc6dd99a39->leave($__internal_40ad67e741184352a708e2729079c3eb6483133f22265ae1e08582dc6dd99a39_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a88184065061fc2fb0b4014c848ff05760fa4372c2ba5365ea2f08eaded470c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a88184065061fc2fb0b4014c848ff05760fa4372c2ba5365ea2f08eaded470c->enter($__internal_1a88184065061fc2fb0b4014c848ff05760fa4372c2ba5365ea2f08eaded470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_1a88184065061fc2fb0b4014c848ff05760fa4372c2ba5365ea2f08eaded470c->leave($__internal_1a88184065061fc2fb0b4014c848ff05760fa4372c2ba5365ea2f08eaded470c_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_d120554bed4cc1fbc971c8640c179328bce89c7538a4e1a4ab4c622511ae0945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d120554bed4cc1fbc971c8640c179328bce89c7538a4e1a4ab4c622511ae0945->enter($__internal_d120554bed4cc1fbc971c8640c179328bce89c7538a4e1a4ab4c622511ae0945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_homepage");
        echo "\">Home</a></li>
            </ul>
            ";
        
        $__internal_d120554bed4cc1fbc971c8640c179328bce89c7538a4e1a4ab4c622511ae0945->leave($__internal_d120554bed4cc1fbc971c8640c179328bce89c7538a4e1a4ab4c622511ae0945_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b462b5a650e697596a819a819a7c232ab82bea74f08bd5c15a28d8fe15cc2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b462b5a650e697596a819a819a7c232ab82bea74f08bd5c15a28d8fe15cc2ac->enter($__internal_2b462b5a650e697596a819a819a7c232ab82bea74f08bd5c15a28d8fe15cc2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b462b5a650e697596a819a819a7c232ab82bea74f08bd5c15a28d8fe15cc2ac->leave($__internal_2b462b5a650e697596a819a819a7c232ab82bea74f08bd5c15a28d8fe15cc2ac_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a635149a5be03ef9ec226608d3c522d2ef107e0884ac743c2f9499a68070fd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a635149a5be03ef9ec226608d3c522d2ef107e0884ac743c2f9499a68070fd3c->enter($__internal_a635149a5be03ef9ec226608d3c522d2ef107e0884ac743c2f9499a68070fd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a635149a5be03ef9ec226608d3c522d2ef107e0884ac743c2f9499a68070fd3c->leave($__internal_a635149a5be03ef9ec226608d3c522d2ef107e0884ac743c2f9499a68070fd3c_prof);

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

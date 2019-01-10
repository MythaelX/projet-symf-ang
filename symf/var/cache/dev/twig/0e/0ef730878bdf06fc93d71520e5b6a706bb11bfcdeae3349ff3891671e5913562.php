<?php

/* :deplacement:new.html.twig */
class __TwigTemplate_68e291eec1bf0badcd6640ebaf2468e2555cf3f01ef7c646559da36e9f93da31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":deplacement:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13f9312085b42401f3d03aea4d185397b03ee4508edbf02d7f531bd0758fa46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f9312085b42401f3d03aea4d185397b03ee4508edbf02d7f531bd0758fa46a->enter($__internal_13f9312085b42401f3d03aea4d185397b03ee4508edbf02d7f531bd0758fa46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deplacement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f9312085b42401f3d03aea4d185397b03ee4508edbf02d7f531bd0758fa46a->leave($__internal_13f9312085b42401f3d03aea4d185397b03ee4508edbf02d7f531bd0758fa46a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfc8b87578f6a889def243f661acf10b919979f64eded4f72d9f2175b794d39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc8b87578f6a889def243f661acf10b919979f64eded4f72d9f2175b794d39e->enter($__internal_bfc8b87578f6a889def243f661acf10b919979f64eded4f72d9f2175b794d39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacement creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bfc8b87578f6a889def243f661acf10b919979f64eded4f72d9f2175b794d39e->leave($__internal_bfc8b87578f6a889def243f661acf10b919979f64eded4f72d9f2175b794d39e_prof);

    }

    public function getTemplateName()
    {
        return ":deplacement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseBack.html.twig' %}

{% block body %}
    <h1>Deplacement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('deplacement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":deplacement:new.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/deplacement/new.html.twig");
    }
}

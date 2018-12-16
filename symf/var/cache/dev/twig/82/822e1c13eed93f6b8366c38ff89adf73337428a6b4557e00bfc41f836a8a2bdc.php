<?php

/* :service:edit.html.twig */
class __TwigTemplate_b5559422737fdc4098cc60939f61e7ddb8bfe49ee929ef260d5b56ab0e2be4f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":service:edit.html.twig", 1);
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
        $__internal_2810abd500da39fb4af663a858eb4c857f3bec1d5bf085fa3a291fa80243bd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2810abd500da39fb4af663a858eb4c857f3bec1d5bf085fa3a291fa80243bd3c->enter($__internal_2810abd500da39fb4af663a858eb4c857f3bec1d5bf085fa3a291fa80243bd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2810abd500da39fb4af663a858eb4c857f3bec1d5bf085fa3a291fa80243bd3c->leave($__internal_2810abd500da39fb4af663a858eb4c857f3bec1d5bf085fa3a291fa80243bd3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b21e3a98aaef65a70440eb9488bf76a736eb5e0d6acfc77ef21d6d81cc70d0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21e3a98aaef65a70440eb9488bf76a736eb5e0d6acfc77ef21d6d81cc70d0ab->enter($__internal_b21e3a98aaef65a70440eb9488bf76a736eb5e0d6acfc77ef21d6d81cc70d0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Service edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b21e3a98aaef65a70440eb9488bf76a736eb5e0d6acfc77ef21d6d81cc70d0ab->leave($__internal_b21e3a98aaef65a70440eb9488bf76a736eb5e0d6acfc77ef21d6d81cc70d0ab_prof);

    }

    public function getTemplateName()
    {
        return ":service:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Service edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('service_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":service:edit.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/service/edit.html.twig");
    }
}

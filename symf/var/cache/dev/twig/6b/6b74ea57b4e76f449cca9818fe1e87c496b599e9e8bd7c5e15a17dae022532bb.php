<?php

/* user/new.html.twig */
class __TwigTemplate_5a6c453192940c3482c4b406d14cac34bcd1aca836fde3ecb4a6a659b7b97bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", "user/new.html.twig", 1);
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
        $__internal_47042d44e3aaf093154609c2f5559be04ca47b75c74a7feea7e7ebde7a4d821b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47042d44e3aaf093154609c2f5559be04ca47b75c74a7feea7e7ebde7a4d821b->enter($__internal_47042d44e3aaf093154609c2f5559be04ca47b75c74a7feea7e7ebde7a4d821b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47042d44e3aaf093154609c2f5559be04ca47b75c74a7feea7e7ebde7a4d821b->leave($__internal_47042d44e3aaf093154609c2f5559be04ca47b75c74a7feea7e7ebde7a4d821b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_990df79b2cd951d6e8ddb4ab49f0c89afa0014a6ed88dca29979e833ce7a5383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990df79b2cd951d6e8ddb4ab49f0c89afa0014a6ed88dca29979e833ce7a5383->enter($__internal_990df79b2cd951d6e8ddb4ab49f0c89afa0014a6ed88dca29979e833ce7a5383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_990df79b2cd951d6e8ddb4ab49f0c89afa0014a6ed88dca29979e833ce7a5383->leave($__internal_990df79b2cd951d6e8ddb4ab49f0c89afa0014a6ed88dca29979e833ce7a5383_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/user/new.html.twig");
    }
}

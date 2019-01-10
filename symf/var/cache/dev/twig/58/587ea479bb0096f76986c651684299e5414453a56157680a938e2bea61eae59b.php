<?php

/* :typedeplacement:new.html.twig */
class __TwigTemplate_d1e95465857fb134ad5dd23ec06c36291030aa399016ebb4e5afc53a3ac1e1ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":typedeplacement:new.html.twig", 1);
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
        $__internal_b974d6c063cf3a4443f6a4469eb27a22732e0df3bfa0f11c498efdf6d45845f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b974d6c063cf3a4443f6a4469eb27a22732e0df3bfa0f11c498efdf6d45845f6->enter($__internal_b974d6c063cf3a4443f6a4469eb27a22732e0df3bfa0f11c498efdf6d45845f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typedeplacement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b974d6c063cf3a4443f6a4469eb27a22732e0df3bfa0f11c498efdf6d45845f6->leave($__internal_b974d6c063cf3a4443f6a4469eb27a22732e0df3bfa0f11c498efdf6d45845f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae831e1d299589b54e0bfc7351babefb9cce7a8e5d47f894cbcdd39bd100d8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae831e1d299589b54e0bfc7351babefb9cce7a8e5d47f894cbcdd39bd100d8ec->enter($__internal_ae831e1d299589b54e0bfc7351babefb9cce7a8e5d47f894cbcdd39bd100d8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Typedeplacement creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedeplacement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ae831e1d299589b54e0bfc7351babefb9cce7a8e5d47f894cbcdd39bd100d8ec->leave($__internal_ae831e1d299589b54e0bfc7351babefb9cce7a8e5d47f894cbcdd39bd100d8ec_prof);

    }

    public function getTemplateName()
    {
        return ":typedeplacement:new.html.twig";
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
    <h1>Typedeplacement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('typedeplacement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":typedeplacement:new.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/typedeplacement/new.html.twig");
    }
}

<?php

/* :ville:new.html.twig */
class __TwigTemplate_4cefa1b555e1241bfe272925d10d78cddfd789a3c6754973d4d797fa5d1611df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":ville:new.html.twig", 1);
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
        $__internal_79191f502f260d99eb1c1d1ca35d6a3b233da7dbb2f6c9b129578fd04ef571c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79191f502f260d99eb1c1d1ca35d6a3b233da7dbb2f6c9b129578fd04ef571c7->enter($__internal_79191f502f260d99eb1c1d1ca35d6a3b233da7dbb2f6c9b129578fd04ef571c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ville:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79191f502f260d99eb1c1d1ca35d6a3b233da7dbb2f6c9b129578fd04ef571c7->leave($__internal_79191f502f260d99eb1c1d1ca35d6a3b233da7dbb2f6c9b129578fd04ef571c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3d1fbffab83ff133604be91f641817849fe13b0117649cb731a4467554edb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d1fbffab83ff133604be91f641817849fe13b0117649cb731a4467554edb67->enter($__internal_e3d1fbffab83ff133604be91f641817849fe13b0117649cb731a4467554edb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ville creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e3d1fbffab83ff133604be91f641817849fe13b0117649cb731a4467554edb67->leave($__internal_e3d1fbffab83ff133604be91f641817849fe13b0117649cb731a4467554edb67_prof);

    }

    public function getTemplateName()
    {
        return ":ville:new.html.twig";
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
    <h1>Ville creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ville_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":ville:new.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/ville/new.html.twig");
    }
}

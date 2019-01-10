<?php

/* :service:new.html.twig */
class __TwigTemplate_cd88381acdd10591d1c7a5a2a154463d9a59c4e38adb21d12938a4976d691814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":service:new.html.twig", 1);
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
        $__internal_1b7cf6c4498d903ae0aae717dd4df78c4ffc44ce020a71be9ca21c89524cad35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7cf6c4498d903ae0aae717dd4df78c4ffc44ce020a71be9ca21c89524cad35->enter($__internal_1b7cf6c4498d903ae0aae717dd4df78c4ffc44ce020a71be9ca21c89524cad35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b7cf6c4498d903ae0aae717dd4df78c4ffc44ce020a71be9ca21c89524cad35->leave($__internal_1b7cf6c4498d903ae0aae717dd4df78c4ffc44ce020a71be9ca21c89524cad35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eb00e8300e95231a20fdf9030a271ea14ca4d6c5b4e21afd0adcab3537c6418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb00e8300e95231a20fdf9030a271ea14ca4d6c5b4e21afd0adcab3537c6418->enter($__internal_5eb00e8300e95231a20fdf9030a271ea14ca4d6c5b4e21afd0adcab3537c6418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Service creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5eb00e8300e95231a20fdf9030a271ea14ca4d6c5b4e21afd0adcab3537c6418->leave($__internal_5eb00e8300e95231a20fdf9030a271ea14ca4d6c5b4e21afd0adcab3537c6418_prof);

    }

    public function getTemplateName()
    {
        return ":service:new.html.twig";
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
    <h1>Service creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('service_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":service:new.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/service/new.html.twig");
    }
}

<?php

/* :societe:new.html.twig */
class __TwigTemplate_4aa60e4be665f2d749cd44bb4749ac981e904a4dff9dd5b1f45cd721dc225d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":societe:new.html.twig", 1);
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
        $__internal_8026e01e28abd6a530e9e0f8e1b0f94df6d84da0b8e0131736400f269e83aba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8026e01e28abd6a530e9e0f8e1b0f94df6d84da0b8e0131736400f269e83aba5->enter($__internal_8026e01e28abd6a530e9e0f8e1b0f94df6d84da0b8e0131736400f269e83aba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":societe:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8026e01e28abd6a530e9e0f8e1b0f94df6d84da0b8e0131736400f269e83aba5->leave($__internal_8026e01e28abd6a530e9e0f8e1b0f94df6d84da0b8e0131736400f269e83aba5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80a5bb16b7920c011c5140a3764fe7da005bfd72e9df2a40bf31fa2e7b2c7136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a5bb16b7920c011c5140a3764fe7da005bfd72e9df2a40bf31fa2e7b2c7136->enter($__internal_80a5bb16b7920c011c5140a3764fe7da005bfd72e9df2a40bf31fa2e7b2c7136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Societe creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("societe_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_80a5bb16b7920c011c5140a3764fe7da005bfd72e9df2a40bf31fa2e7b2c7136->leave($__internal_80a5bb16b7920c011c5140a3764fe7da005bfd72e9df2a40bf31fa2e7b2c7136_prof);

    }

    public function getTemplateName()
    {
        return ":societe:new.html.twig";
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
    <h1>Societe creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('societe_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":societe:new.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/societe/new.html.twig");
    }
}

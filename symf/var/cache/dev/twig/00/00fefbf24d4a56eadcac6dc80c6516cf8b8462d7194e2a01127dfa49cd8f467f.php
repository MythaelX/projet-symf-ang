<?php

/* typedeplacement/edit.html.twig */
class __TwigTemplate_4836e8cfcf3f709f4ae991b3d0714c12b4dea901d468ea878ff60ddcc577a27d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", "typedeplacement/edit.html.twig", 1);
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
        $__internal_9a0498915014ded7a5f7ccaea6d07bb992766e44b425a4e2e8a17d0ed2b68b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0498915014ded7a5f7ccaea6d07bb992766e44b425a4e2e8a17d0ed2b68b76->enter($__internal_9a0498915014ded7a5f7ccaea6d07bb992766e44b425a4e2e8a17d0ed2b68b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typedeplacement/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a0498915014ded7a5f7ccaea6d07bb992766e44b425a4e2e8a17d0ed2b68b76->leave($__internal_9a0498915014ded7a5f7ccaea6d07bb992766e44b425a4e2e8a17d0ed2b68b76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32a40754828bc16250d967a405bf28b8121763fa0e14f139a1313f42c8c7c37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a40754828bc16250d967a405bf28b8121763fa0e14f139a1313f42c8c7c37a->enter($__internal_32a40754828bc16250d967a405bf28b8121763fa0e14f139a1313f42c8c7c37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Typedeplacement edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedeplacement_index");
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
        
        $__internal_32a40754828bc16250d967a405bf28b8121763fa0e14f139a1313f42c8c7c37a->leave($__internal_32a40754828bc16250d967a405bf28b8121763fa0e14f139a1313f42c8c7c37a_prof);

    }

    public function getTemplateName()
    {
        return "typedeplacement/edit.html.twig";
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
    <h1>Typedeplacement edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('typedeplacement_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "typedeplacement/edit.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/typedeplacement/edit.html.twig");
    }
}

<?php

/* :deplacementjour:edit.html.twig */
class __TwigTemplate_5b522da0f568e4822fb0c7e1261cfc39e8f429a408328b5ebdbf3328a6368045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":deplacementjour:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff516ed2d8248bf069e56cc782f9dcd7e59569948852cfcb9d88e9af6d43cede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff516ed2d8248bf069e56cc782f9dcd7e59569948852cfcb9d88e9af6d43cede->enter($__internal_ff516ed2d8248bf069e56cc782f9dcd7e59569948852cfcb9d88e9af6d43cede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deplacementjour:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff516ed2d8248bf069e56cc782f9dcd7e59569948852cfcb9d88e9af6d43cede->leave($__internal_ff516ed2d8248bf069e56cc782f9dcd7e59569948852cfcb9d88e9af6d43cede_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02e08b5c033a45bd2236a9835177379036b14cf706b5d138e1c1fb22996e7596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e08b5c033a45bd2236a9835177379036b14cf706b5d138e1c1fb22996e7596->enter($__internal_02e08b5c033a45bd2236a9835177379036b14cf706b5d138e1c1fb22996e7596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacementjour edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacementjour_index");
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
        
        $__internal_02e08b5c033a45bd2236a9835177379036b14cf706b5d138e1c1fb22996e7596->leave($__internal_02e08b5c033a45bd2236a9835177379036b14cf706b5d138e1c1fb22996e7596_prof);

    }

    public function getTemplateName()
    {
        return ":deplacementjour:edit.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Deplacementjour edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('deplacementjour_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":deplacementjour:edit.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/deplacementjour/edit.html.twig");
    }
}

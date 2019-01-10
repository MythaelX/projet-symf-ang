<?php

/* :deplacementjour:edit.html.twig */
class __TwigTemplate_12c0acf2445346d105f76408bdcce7df427b5f9c4e869d0f2afa382993ceff0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":deplacementjour:edit.html.twig", 1);
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
        $__internal_49bcb24f3e2196570e5e8fd95113a04759422cc6f97b6dd4a0b07576017826b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bcb24f3e2196570e5e8fd95113a04759422cc6f97b6dd4a0b07576017826b5->enter($__internal_49bcb24f3e2196570e5e8fd95113a04759422cc6f97b6dd4a0b07576017826b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deplacementjour:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49bcb24f3e2196570e5e8fd95113a04759422cc6f97b6dd4a0b07576017826b5->leave($__internal_49bcb24f3e2196570e5e8fd95113a04759422cc6f97b6dd4a0b07576017826b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a3e1a94cdd52e0005a34cffb1d0b6f2d4234e6b6f1323e0ff22f0bb1abae87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3e1a94cdd52e0005a34cffb1d0b6f2d4234e6b6f1323e0ff22f0bb1abae87a->enter($__internal_2a3e1a94cdd52e0005a34cffb1d0b6f2d4234e6b6f1323e0ff22f0bb1abae87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2a3e1a94cdd52e0005a34cffb1d0b6f2d4234e6b6f1323e0ff22f0bb1abae87a->leave($__internal_2a3e1a94cdd52e0005a34cffb1d0b6f2d4234e6b6f1323e0ff22f0bb1abae87a_prof);

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
        return new Twig_Source("{% extends 'baseBack.html.twig' %}

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
", ":deplacementjour:edit.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/deplacementjour/edit.html.twig");
    }
}

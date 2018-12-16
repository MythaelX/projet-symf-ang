<?php

/* :typeuser:edit.html.twig */
class __TwigTemplate_c39bec9bb950e0d899bb65f021f4b196b94b69cd6dd3e9d8828fad40619e6ea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":typeuser:edit.html.twig", 1);
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
        $__internal_3b9ebe58ce4f0325f1cd82bc746036417a8a3c03eb7cda67be31970df2a46f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9ebe58ce4f0325f1cd82bc746036417a8a3c03eb7cda67be31970df2a46f73->enter($__internal_3b9ebe58ce4f0325f1cd82bc746036417a8a3c03eb7cda67be31970df2a46f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typeuser:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b9ebe58ce4f0325f1cd82bc746036417a8a3c03eb7cda67be31970df2a46f73->leave($__internal_3b9ebe58ce4f0325f1cd82bc746036417a8a3c03eb7cda67be31970df2a46f73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0afa3133f8c83aad7e73c0113faaf2fbd4cc503dc22b5d40e1077054f8e164b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0afa3133f8c83aad7e73c0113faaf2fbd4cc503dc22b5d40e1077054f8e164b->enter($__internal_d0afa3133f8c83aad7e73c0113faaf2fbd4cc503dc22b5d40e1077054f8e164b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Typeuser edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeuser_index");
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
        
        $__internal_d0afa3133f8c83aad7e73c0113faaf2fbd4cc503dc22b5d40e1077054f8e164b->leave($__internal_d0afa3133f8c83aad7e73c0113faaf2fbd4cc503dc22b5d40e1077054f8e164b_prof);

    }

    public function getTemplateName()
    {
        return ":typeuser:edit.html.twig";
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
    <h1>Typeuser edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('typeuser_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":typeuser:edit.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/typeuser/edit.html.twig");
    }
}

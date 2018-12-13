<?php

/* deplacementjour/new.html.twig */
class __TwigTemplate_9c36a462978c2085858c94ebf41d75483c933d0127667ffbce99456fb0c986ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "deplacementjour/new.html.twig", 1);
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
        $__internal_2620d9913d72d070d2c2c7adaade9924a64ff63c371904057c25b2f52467796a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2620d9913d72d070d2c2c7adaade9924a64ff63c371904057c25b2f52467796a->enter($__internal_2620d9913d72d070d2c2c7adaade9924a64ff63c371904057c25b2f52467796a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "deplacementjour/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2620d9913d72d070d2c2c7adaade9924a64ff63c371904057c25b2f52467796a->leave($__internal_2620d9913d72d070d2c2c7adaade9924a64ff63c371904057c25b2f52467796a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2481375e800689c05e0786990a5bbf6691f42611b875fb6fa44b28f853316529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2481375e800689c05e0786990a5bbf6691f42611b875fb6fa44b28f853316529->enter($__internal_2481375e800689c05e0786990a5bbf6691f42611b875fb6fa44b28f853316529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacementjour creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacementjour_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2481375e800689c05e0786990a5bbf6691f42611b875fb6fa44b28f853316529->leave($__internal_2481375e800689c05e0786990a5bbf6691f42611b875fb6fa44b28f853316529_prof);

    }

    public function getTemplateName()
    {
        return "deplacementjour/new.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Deplacementjour creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('deplacementjour_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "deplacementjour/new.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/deplacementjour/new.html.twig");
    }
}

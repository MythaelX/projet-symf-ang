<?php

/* ville/new.html.twig */
class __TwigTemplate_744be19f3b545c324a66d56ab3415960eb930606b4553939da507f6dbd0e282f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", "ville/new.html.twig", 1);
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
        $__internal_7b7de181958c2620c8bb8c1883a4f98e48473ef51fed78e3f93df817303359a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7de181958c2620c8bb8c1883a4f98e48473ef51fed78e3f93df817303359a0->enter($__internal_7b7de181958c2620c8bb8c1883a4f98e48473ef51fed78e3f93df817303359a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ville/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b7de181958c2620c8bb8c1883a4f98e48473ef51fed78e3f93df817303359a0->leave($__internal_7b7de181958c2620c8bb8c1883a4f98e48473ef51fed78e3f93df817303359a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d78bd0050179a41370b92909c1a17fa7b0dae80a37de72b9166ebb75569b13c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78bd0050179a41370b92909c1a17fa7b0dae80a37de72b9166ebb75569b13c5->enter($__internal_d78bd0050179a41370b92909c1a17fa7b0dae80a37de72b9166ebb75569b13c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d78bd0050179a41370b92909c1a17fa7b0dae80a37de72b9166ebb75569b13c5->leave($__internal_d78bd0050179a41370b92909c1a17fa7b0dae80a37de72b9166ebb75569b13c5_prof);

    }

    public function getTemplateName()
    {
        return "ville/new.html.twig";
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
", "ville/new.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/ville/new.html.twig");
    }
}

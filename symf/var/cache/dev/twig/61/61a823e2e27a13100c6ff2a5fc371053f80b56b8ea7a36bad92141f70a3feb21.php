<?php

/* :typedeplacement:new.html.twig */
class __TwigTemplate_511c8c4b1640a44ecac2101b2ef6c50b67fde0118e406a1be84dc866f9267fa8 extends Twig_Template
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
        $__internal_6f442c920061c91edf11bd1797b70b53505facd0af47043693c559991a5dfdec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f442c920061c91edf11bd1797b70b53505facd0af47043693c559991a5dfdec->enter($__internal_6f442c920061c91edf11bd1797b70b53505facd0af47043693c559991a5dfdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typedeplacement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f442c920061c91edf11bd1797b70b53505facd0af47043693c559991a5dfdec->leave($__internal_6f442c920061c91edf11bd1797b70b53505facd0af47043693c559991a5dfdec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27b6ca040a6d0094af378e5b68756346d344971eaac94582e98dd719a0a1592c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b6ca040a6d0094af378e5b68756346d344971eaac94582e98dd719a0a1592c->enter($__internal_27b6ca040a6d0094af378e5b68756346d344971eaac94582e98dd719a0a1592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_27b6ca040a6d0094af378e5b68756346d344971eaac94582e98dd719a0a1592c->leave($__internal_27b6ca040a6d0094af378e5b68756346d344971eaac94582e98dd719a0a1592c_prof);

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
", ":typedeplacement:new.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/typedeplacement/new.html.twig");
    }
}

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
        $__internal_62ec07161f88a76f56775d735d9198dc9890857daba9cf409486855e0e1f0b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ec07161f88a76f56775d735d9198dc9890857daba9cf409486855e0e1f0b44->enter($__internal_62ec07161f88a76f56775d735d9198dc9890857daba9cf409486855e0e1f0b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typedeplacement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62ec07161f88a76f56775d735d9198dc9890857daba9cf409486855e0e1f0b44->leave($__internal_62ec07161f88a76f56775d735d9198dc9890857daba9cf409486855e0e1f0b44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_56d247ca141edcb6e0ff430b3da1ee0b2e989d2075acb1fc37d689dd5951590e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d247ca141edcb6e0ff430b3da1ee0b2e989d2075acb1fc37d689dd5951590e->enter($__internal_56d247ca141edcb6e0ff430b3da1ee0b2e989d2075acb1fc37d689dd5951590e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_56d247ca141edcb6e0ff430b3da1ee0b2e989d2075acb1fc37d689dd5951590e->leave($__internal_56d247ca141edcb6e0ff430b3da1ee0b2e989d2075acb1fc37d689dd5951590e_prof);

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

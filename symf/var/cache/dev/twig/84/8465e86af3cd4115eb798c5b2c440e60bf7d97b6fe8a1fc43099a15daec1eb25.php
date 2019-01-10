<?php

/* :societe:new.html.twig */
class __TwigTemplate_37c7f84f29d2cdf0be4324c8d0139324718d9bf37cc056cbcb6944c1cfdc9f33 extends Twig_Template
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
        $__internal_ebf00fd714a7c66f72396c808cc9a044dd80607bbdfe53e2428d2d2cbae31086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf00fd714a7c66f72396c808cc9a044dd80607bbdfe53e2428d2d2cbae31086->enter($__internal_ebf00fd714a7c66f72396c808cc9a044dd80607bbdfe53e2428d2d2cbae31086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":societe:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebf00fd714a7c66f72396c808cc9a044dd80607bbdfe53e2428d2d2cbae31086->leave($__internal_ebf00fd714a7c66f72396c808cc9a044dd80607bbdfe53e2428d2d2cbae31086_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2084573e4793d38312d763a4ac861c103eff8cc91fe72c74d36bcb34a5b97298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2084573e4793d38312d763a4ac861c103eff8cc91fe72c74d36bcb34a5b97298->enter($__internal_2084573e4793d38312d763a4ac861c103eff8cc91fe72c74d36bcb34a5b97298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2084573e4793d38312d763a4ac861c103eff8cc91fe72c74d36bcb34a5b97298->leave($__internal_2084573e4793d38312d763a4ac861c103eff8cc91fe72c74d36bcb34a5b97298_prof);

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
", ":societe:new.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/societe/new.html.twig");
    }
}

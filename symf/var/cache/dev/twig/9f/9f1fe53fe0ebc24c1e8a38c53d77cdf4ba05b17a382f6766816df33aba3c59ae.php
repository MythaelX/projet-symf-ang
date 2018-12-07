<?php

/* deplacement/new.html.twig */
class __TwigTemplate_064a5e8cc01230928222ee64444a8c146d0c650630bfff28445cc37736939c94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "deplacement/new.html.twig", 1);
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
        $__internal_59bc277093a004f2ea0f32bb58680092424b3ecaca9057b0e8c57a1a65fac3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bc277093a004f2ea0f32bb58680092424b3ecaca9057b0e8c57a1a65fac3f6->enter($__internal_59bc277093a004f2ea0f32bb58680092424b3ecaca9057b0e8c57a1a65fac3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "deplacement/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59bc277093a004f2ea0f32bb58680092424b3ecaca9057b0e8c57a1a65fac3f6->leave($__internal_59bc277093a004f2ea0f32bb58680092424b3ecaca9057b0e8c57a1a65fac3f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_107a71ae1a547749d3c346c1fec3f06473f4ebb8f29486adba8f4fc26c60461e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107a71ae1a547749d3c346c1fec3f06473f4ebb8f29486adba8f4fc26c60461e->enter($__internal_107a71ae1a547749d3c346c1fec3f06473f4ebb8f29486adba8f4fc26c60461e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacement creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_107a71ae1a547749d3c346c1fec3f06473f4ebb8f29486adba8f4fc26c60461e->leave($__internal_107a71ae1a547749d3c346c1fec3f06473f4ebb8f29486adba8f4fc26c60461e_prof);

    }

    public function getTemplateName()
    {
        return "deplacement/new.html.twig";
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
    <h1>Deplacement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('deplacement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "deplacement/new.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/deplacement/new.html.twig");
    }
}

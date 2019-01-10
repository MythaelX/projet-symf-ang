<?php

/* :deplacement:new.html.twig */
class __TwigTemplate_b4bd5f908ecc101928a31adb34a8f28442e0169c14049b7734bdd08540934d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":deplacement:new.html.twig", 1);
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
        $__internal_8ecda13912615e17df41c2816b8bffc30062265525234743fd16b689cbbaf9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecda13912615e17df41c2816b8bffc30062265525234743fd16b689cbbaf9cd->enter($__internal_8ecda13912615e17df41c2816b8bffc30062265525234743fd16b689cbbaf9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deplacement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ecda13912615e17df41c2816b8bffc30062265525234743fd16b689cbbaf9cd->leave($__internal_8ecda13912615e17df41c2816b8bffc30062265525234743fd16b689cbbaf9cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96d626770611c75de3e081b01059b97e4ccbd43aaa14c0b5a86e0799e1061a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d626770611c75de3e081b01059b97e4ccbd43aaa14c0b5a86e0799e1061a3d->enter($__internal_96d626770611c75de3e081b01059b97e4ccbd43aaa14c0b5a86e0799e1061a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_96d626770611c75de3e081b01059b97e4ccbd43aaa14c0b5a86e0799e1061a3d->leave($__internal_96d626770611c75de3e081b01059b97e4ccbd43aaa14c0b5a86e0799e1061a3d_prof);

    }

    public function getTemplateName()
    {
        return ":deplacement:new.html.twig";
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
", ":deplacement:new.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/deplacement/new.html.twig");
    }
}

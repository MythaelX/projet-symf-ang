<?php

/* FrontOfficeBundle:Default:profil.html.twig */
class __TwigTemplate_60b48e0367ba55e968ebf7044d964038aac1df53e0266fa83d6bb6fcf72907a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontOfficeBundle:Default:profil.html.twig", 1);
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
        $__internal_cfe90b9829e72c454ac5e4069d712a7a9d9ec7b07513e152a546698670720315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe90b9829e72c454ac5e4069d712a7a9d9ec7b07513e152a546698670720315->enter($__internal_cfe90b9829e72c454ac5e4069d712a7a9d9ec7b07513e152a546698670720315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfe90b9829e72c454ac5e4069d712a7a9d9ec7b07513e152a546698670720315->leave($__internal_cfe90b9829e72c454ac5e4069d712a7a9d9ec7b07513e152a546698670720315_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6af6089ac8681c349e3ffbbf2bac2151cadd01aac178f39831bda43f16ad9463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af6089ac8681c349e3ffbbf2bac2151cadd01aac178f39831bda43f16ad9463->enter($__internal_6af6089ac8681c349e3ffbbf2bac2151cadd01aac178f39831bda43f16ad9463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1> formulaire </h1>
  ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
  <input type=\"submit\">
  ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6af6089ac8681c349e3ffbbf2bac2151cadd01aac178f39831bda43f16ad9463->leave($__internal_6af6089ac8681c349e3ffbbf2bac2151cadd01aac178f39831bda43f16ad9463_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
<h1> formulaire </h1>
  {{form_start(form)}}
  {{form_widget(form)}}
  <input type=\"submit\">
  {{form_end(form)}}
{% endblock %}
", "FrontOfficeBundle:Default:profil.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/src/FrontOfficeBundle/Resources/views/Default/profil.html.twig");
    }
}

<?php

/* FrontOfficeBundle:Default:profil.html.twig */
class __TwigTemplate_6308a3a2c47230b42f8f7d52e5ec6b7ae5580707723a0117af8d292a85b0c653 extends Twig_Template
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
        $__internal_9c32cc876104f1e326591c9836052dec3e100981d58de498c6a3fe7a97efc23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c32cc876104f1e326591c9836052dec3e100981d58de498c6a3fe7a97efc23c->enter($__internal_9c32cc876104f1e326591c9836052dec3e100981d58de498c6a3fe7a97efc23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c32cc876104f1e326591c9836052dec3e100981d58de498c6a3fe7a97efc23c->leave($__internal_9c32cc876104f1e326591c9836052dec3e100981d58de498c6a3fe7a97efc23c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6edc012132d08ae2f59891da82186a4145470fb4978ed005c9623b84a0a4166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6edc012132d08ae2f59891da82186a4145470fb4978ed005c9623b84a0a4166->enter($__internal_a6edc012132d08ae2f59891da82186a4145470fb4978ed005c9623b84a0a4166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div id=\"modifProfil\" >
<h1> Modifier son profil </h1>
  ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
  <input type=\"submit\">
  ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_a6edc012132d08ae2f59891da82186a4145470fb4978ed005c9623b84a0a4166->leave($__internal_a6edc012132d08ae2f59891da82186a4145470fb4978ed005c9623b84a0a4166_prof);

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
        return array (  53 => 8,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
<div id=\"modifProfil\" >
<h1> Modifier son profil </h1>
  {{form_start(form)}}
  {{form_widget(form)}}
  <input type=\"submit\">
  {{form_end(form)}}
</div>
{% endblock %}
", "FrontOfficeBundle:Default:profil.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/Default/profil.html.twig");
    }
}

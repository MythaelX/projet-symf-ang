<?php

/* FrontOfficeBundle:Default:formulaire-trajet.html.twig */
class __TwigTemplate_0d75863e8c46176f7d3746172dbe227d1d2113a3d52ff1fe033b6c9e0164f40e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontOfficeBundle:Default:formulaire-trajet.html.twig", 1);
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
        $__internal_f50ae321b1881a549bdcf1041b42530ee39f1383ee59df091782614e7668135d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50ae321b1881a549bdcf1041b42530ee39f1383ee59df091782614e7668135d->enter($__internal_f50ae321b1881a549bdcf1041b42530ee39f1383ee59df091782614e7668135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:formulaire-trajet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f50ae321b1881a549bdcf1041b42530ee39f1383ee59df091782614e7668135d->leave($__internal_f50ae321b1881a549bdcf1041b42530ee39f1383ee59df091782614e7668135d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_89f54bbf92888dde1d487c5f2d365d3eb5f73fafc792def4b0f3bd911e4a9a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f54bbf92888dde1d487c5f2d365d3eb5f73fafc792def4b0f3bd911e4a9a97->enter($__internal_89f54bbf92888dde1d487c5f2d365d3eb5f73fafc792def4b0f3bd911e4a9a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89f54bbf92888dde1d487c5f2d365d3eb5f73fafc792def4b0f3bd911e4a9a97->leave($__internal_89f54bbf92888dde1d487c5f2d365d3eb5f73fafc792def4b0f3bd911e4a9a97_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:formulaire-trajet.html.twig";
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
", "FrontOfficeBundle:Default:formulaire-trajet.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/Default/formulaire-trajet.html.twig");
    }
}

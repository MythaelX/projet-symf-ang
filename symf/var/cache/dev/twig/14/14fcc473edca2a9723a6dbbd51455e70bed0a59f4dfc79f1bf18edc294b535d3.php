<?php

/* FrontOfficeBundle:Default:profil.html.twig */
class __TwigTemplate_bc71a7069916a924326232b835e133a70e38a1805ff5bf83b1ed0c2340a6a929 extends Twig_Template
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
        $__internal_2f352dde7e1a6791de7666670a797219059111e33316ab1f765862314bfbbab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f352dde7e1a6791de7666670a797219059111e33316ab1f765862314bfbbab1->enter($__internal_2f352dde7e1a6791de7666670a797219059111e33316ab1f765862314bfbbab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f352dde7e1a6791de7666670a797219059111e33316ab1f765862314bfbbab1->leave($__internal_2f352dde7e1a6791de7666670a797219059111e33316ab1f765862314bfbbab1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e32c16f37131cf2c602068da6486cc9895b1a2e10e2cc11bd3481452c42eb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e32c16f37131cf2c602068da6486cc9895b1a2e10e2cc11bd3481452c42eb06->enter($__internal_7e32c16f37131cf2c602068da6486cc9895b1a2e10e2cc11bd3481452c42eb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7e32c16f37131cf2c602068da6486cc9895b1a2e10e2cc11bd3481452c42eb06->leave($__internal_7e32c16f37131cf2c602068da6486cc9895b1a2e10e2cc11bd3481452c42eb06_prof);

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

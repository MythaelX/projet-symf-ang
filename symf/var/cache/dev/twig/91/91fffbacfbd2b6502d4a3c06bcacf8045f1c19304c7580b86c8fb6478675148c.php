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
        $__internal_a5668e2186b4fffaed4f11160e1261ce4871e143139e3abb6bd913a77115a2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5668e2186b4fffaed4f11160e1261ce4871e143139e3abb6bd913a77115a2b0->enter($__internal_a5668e2186b4fffaed4f11160e1261ce4871e143139e3abb6bd913a77115a2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5668e2186b4fffaed4f11160e1261ce4871e143139e3abb6bd913a77115a2b0->leave($__internal_a5668e2186b4fffaed4f11160e1261ce4871e143139e3abb6bd913a77115a2b0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2b9a489326eb6300fe236a5900ebf2bfab98fb126c2d72caa4f47907bc8d35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b9a489326eb6300fe236a5900ebf2bfab98fb126c2d72caa4f47907bc8d35e->enter($__internal_d2b9a489326eb6300fe236a5900ebf2bfab98fb126c2d72caa4f47907bc8d35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2b9a489326eb6300fe236a5900ebf2bfab98fb126c2d72caa4f47907bc8d35e->leave($__internal_d2b9a489326eb6300fe236a5900ebf2bfab98fb126c2d72caa4f47907bc8d35e_prof);

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
", "FrontOfficeBundle:Default:profil.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/Default/profil.html.twig");
    }
}

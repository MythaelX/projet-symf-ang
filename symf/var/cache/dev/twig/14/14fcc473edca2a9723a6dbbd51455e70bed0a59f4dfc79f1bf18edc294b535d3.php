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
        $__internal_7b1f062c83bd5a8dfcb470f3a36d077249503a44eec64684a2695c1068acdc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1f062c83bd5a8dfcb470f3a36d077249503a44eec64684a2695c1068acdc5a->enter($__internal_7b1f062c83bd5a8dfcb470f3a36d077249503a44eec64684a2695c1068acdc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b1f062c83bd5a8dfcb470f3a36d077249503a44eec64684a2695c1068acdc5a->leave($__internal_7b1f062c83bd5a8dfcb470f3a36d077249503a44eec64684a2695c1068acdc5a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_533c99b5afc3bb7b519be44d76770b11416ec26be98f128f8311483d07fa4b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533c99b5afc3bb7b519be44d76770b11416ec26be98f128f8311483d07fa4b6e->enter($__internal_533c99b5afc3bb7b519be44d76770b11416ec26be98f128f8311483d07fa4b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_533c99b5afc3bb7b519be44d76770b11416ec26be98f128f8311483d07fa4b6e->leave($__internal_533c99b5afc3bb7b519be44d76770b11416ec26be98f128f8311483d07fa4b6e_prof);

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

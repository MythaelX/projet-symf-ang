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
        $__internal_81c07ecca5c1d0ebcfd5b8199e6854355562c4bc1270e0cf41a024c25913c1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c07ecca5c1d0ebcfd5b8199e6854355562c4bc1270e0cf41a024c25913c1a3->enter($__internal_81c07ecca5c1d0ebcfd5b8199e6854355562c4bc1270e0cf41a024c25913c1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81c07ecca5c1d0ebcfd5b8199e6854355562c4bc1270e0cf41a024c25913c1a3->leave($__internal_81c07ecca5c1d0ebcfd5b8199e6854355562c4bc1270e0cf41a024c25913c1a3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d14a6e30cdbde5c1387529a3bdcc27825c433d9816a9247f2bf71130a4d28a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14a6e30cdbde5c1387529a3bdcc27825c433d9816a9247f2bf71130a4d28a12->enter($__internal_d14a6e30cdbde5c1387529a3bdcc27825c433d9816a9247f2bf71130a4d28a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d14a6e30cdbde5c1387529a3bdcc27825c433d9816a9247f2bf71130a4d28a12->leave($__internal_d14a6e30cdbde5c1387529a3bdcc27825c433d9816a9247f2bf71130a4d28a12_prof);

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

<?php

/* FrontOfficeBundle:Default:formulaire-trajet.html.twig */
class __TwigTemplate_ff76d03968aab50a08299b7b8b64545ccc07a202e0d525fbf575dfbe39442a5f extends Twig_Template
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
        $__internal_38cd478fbdce7545279ef53ed8022aa52ff6a3a80f359759902f416a3e254d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cd478fbdce7545279ef53ed8022aa52ff6a3a80f359759902f416a3e254d5d->enter($__internal_38cd478fbdce7545279ef53ed8022aa52ff6a3a80f359759902f416a3e254d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:formulaire-trajet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38cd478fbdce7545279ef53ed8022aa52ff6a3a80f359759902f416a3e254d5d->leave($__internal_38cd478fbdce7545279ef53ed8022aa52ff6a3a80f359759902f416a3e254d5d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4e9a8dee2bf1afefce897ef3e2042272f4b382e18fc2c2a77359eabac2d5df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e9a8dee2bf1afefce897ef3e2042272f4b382e18fc2c2a77359eabac2d5df8->enter($__internal_b4e9a8dee2bf1afefce897ef3e2042272f4b382e18fc2c2a77359eabac2d5df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1> formulaire </h1>
Choissez le mois et l'année du deplacement :
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
";
        
        $__internal_b4e9a8dee2bf1afefce897ef3e2042272f4b382e18fc2c2a77359eabac2d5df8->leave($__internal_b4e9a8dee2bf1afefce897ef3e2042272f4b382e18fc2c2a77359eabac2d5df8_prof);

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
<h1> formulaire </h1>
Choissez le mois et l'année du deplacement :
  {{form_start(form)}}
  {{form_widget(form)}}
  <input type=\"submit\">
  {{form_end(form)}}
{% endblock %}
", "FrontOfficeBundle:Default:formulaire-trajet.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/Default/formulaire-trajet.html.twig");
    }
}

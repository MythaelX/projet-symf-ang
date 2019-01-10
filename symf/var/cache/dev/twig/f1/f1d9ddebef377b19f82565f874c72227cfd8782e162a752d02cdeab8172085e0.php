<?php

/* FrontOfficeBundle:Default:formulaire-trajet.html.twig */
class __TwigTemplate_62b741d3f45f64e57d6efec5021af63ae4ebf557cbb2cd50c0894a45c2cee9a2 extends Twig_Template
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
        $__internal_3cb642b3e734b3ce126ef388543f787e3a9a609cae77903cce592b2ab29e5794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb642b3e734b3ce126ef388543f787e3a9a609cae77903cce592b2ab29e5794->enter($__internal_3cb642b3e734b3ce126ef388543f787e3a9a609cae77903cce592b2ab29e5794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:formulaire-trajet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb642b3e734b3ce126ef388543f787e3a9a609cae77903cce592b2ab29e5794->leave($__internal_3cb642b3e734b3ce126ef388543f787e3a9a609cae77903cce592b2ab29e5794_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a901b557c6bdbfae10f3f6a2e2aec687742af2a808e8f1c7c541061af6cf023b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a901b557c6bdbfae10f3f6a2e2aec687742af2a808e8f1c7c541061af6cf023b->enter($__internal_a901b557c6bdbfae10f3f6a2e2aec687742af2a808e8f1c7c541061af6cf023b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a901b557c6bdbfae10f3f6a2e2aec687742af2a808e8f1c7c541061af6cf023b->leave($__internal_a901b557c6bdbfae10f3f6a2e2aec687742af2a808e8f1c7c541061af6cf023b_prof);

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
", "FrontOfficeBundle:Default:formulaire-trajet.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/src/FrontOfficeBundle/Resources/views/Default/formulaire-trajet.html.twig");
    }
}

<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_8ee3f1255cb4c2a02a266c42e62ec077b323eec77d8b25f413d731ed618d4a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BackOfficeBundle:Default:index.html.twig", 1);
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
        $__internal_3db0d3decea81343991de564bb9c204316f7db9030f90c55880998a11b0230c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db0d3decea81343991de564bb9c204316f7db9030f90c55880998a11b0230c3->enter($__internal_3db0d3decea81343991de564bb9c204316f7db9030f90c55880998a11b0230c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3db0d3decea81343991de564bb9c204316f7db9030f90c55880998a11b0230c3->leave($__internal_3db0d3decea81343991de564bb9c204316f7db9030f90c55880998a11b0230c3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a158c2e942abb764f6dfd4ec884353d903f156b95e847b3bb029d3931ed5fd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a158c2e942abb764f6dfd4ec884353d903f156b95e847b3bb029d3931ed5fd81->enter($__internal_a158c2e942abb764f6dfd4ec884353d903f156b95e847b3bb029d3931ed5fd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  Bienvenue ! nom prenom
";
        
        $__internal_a158c2e942abb764f6dfd4ec884353d903f156b95e847b3bb029d3931ed5fd81->leave($__internal_a158c2e942abb764f6dfd4ec884353d903f156b95e847b3bb029d3931ed5fd81_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
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
  Bienvenue ! nom prenom
{% endblock %}
", "BackOfficeBundle:Default:index.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}

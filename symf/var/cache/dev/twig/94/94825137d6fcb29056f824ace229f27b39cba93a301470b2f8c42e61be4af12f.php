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
        $__internal_2ae8b80024d432f4ffb96cd42fd933fe7ff9db4845258266d38ccb4e318df095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae8b80024d432f4ffb96cd42fd933fe7ff9db4845258266d38ccb4e318df095->enter($__internal_2ae8b80024d432f4ffb96cd42fd933fe7ff9db4845258266d38ccb4e318df095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ae8b80024d432f4ffb96cd42fd933fe7ff9db4845258266d38ccb4e318df095->leave($__internal_2ae8b80024d432f4ffb96cd42fd933fe7ff9db4845258266d38ccb4e318df095_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_12ec340bc11692ca9c13ed82a052972d4feec56f058b347ba5f461dd39068b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ec340bc11692ca9c13ed82a052972d4feec56f058b347ba5f461dd39068b31->enter($__internal_12ec340bc11692ca9c13ed82a052972d4feec56f058b347ba5f461dd39068b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  Bienvenue ! nom prenom
";
        
        $__internal_12ec340bc11692ca9c13ed82a052972d4feec56f058b347ba5f461dd39068b31->leave($__internal_12ec340bc11692ca9c13ed82a052972d4feec56f058b347ba5f461dd39068b31_prof);

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

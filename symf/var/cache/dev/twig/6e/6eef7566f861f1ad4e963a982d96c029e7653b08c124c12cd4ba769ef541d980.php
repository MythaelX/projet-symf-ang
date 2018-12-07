<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_e210b62b5f5a2501b3ac085dc4df106e8fd0081aa4b50a025317f39a4fbbceef extends Twig_Template
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
        $__internal_2f30d383eadb7a11b5b8eceda39e71890a0267f5346c9d8657ed3b0fb7cff7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f30d383eadb7a11b5b8eceda39e71890a0267f5346c9d8657ed3b0fb7cff7ee->enter($__internal_2f30d383eadb7a11b5b8eceda39e71890a0267f5346c9d8657ed3b0fb7cff7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f30d383eadb7a11b5b8eceda39e71890a0267f5346c9d8657ed3b0fb7cff7ee->leave($__internal_2f30d383eadb7a11b5b8eceda39e71890a0267f5346c9d8657ed3b0fb7cff7ee_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_676fb41191534df433bc977ef786421ddb1df5dd40dcf356f2757c4bad394094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676fb41191534df433bc977ef786421ddb1df5dd40dcf356f2757c4bad394094->enter($__internal_676fb41191534df433bc977ef786421ddb1df5dd40dcf356f2757c4bad394094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  Bienvenue ! nom prenom
";
        
        $__internal_676fb41191534df433bc977ef786421ddb1df5dd40dcf356f2757c4bad394094->leave($__internal_676fb41191534df433bc977ef786421ddb1df5dd40dcf356f2757c4bad394094_prof);

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
", "BackOfficeBundle:Default:index.html.twig", "/home/clement/cir3/projet 2.0/symf/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}

<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_ea1cb5116c611b8b849250bbd7f977bddaf95282a29f80106726ae858990f4ba extends Twig_Template
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
        $__internal_084b6b03c082d28c03a2d32fea63e3c6a8ac78665ec8b1c801c55f30e6646bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084b6b03c082d28c03a2d32fea63e3c6a8ac78665ec8b1c801c55f30e6646bc2->enter($__internal_084b6b03c082d28c03a2d32fea63e3c6a8ac78665ec8b1c801c55f30e6646bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_084b6b03c082d28c03a2d32fea63e3c6a8ac78665ec8b1c801c55f30e6646bc2->leave($__internal_084b6b03c082d28c03a2d32fea63e3c6a8ac78665ec8b1c801c55f30e6646bc2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c02622fa4e49cdda0bbc9739b8cffb41e8b53effaecfbcd4b26ebab3002328a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02622fa4e49cdda0bbc9739b8cffb41e8b53effaecfbcd4b26ebab3002328a3->enter($__internal_c02622fa4e49cdda0bbc9739b8cffb41e8b53effaecfbcd4b26ebab3002328a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  Bienvenue ! nom prenom
";
        
        $__internal_c02622fa4e49cdda0bbc9739b8cffb41e8b53effaecfbcd4b26ebab3002328a3->leave($__internal_c02622fa4e49cdda0bbc9739b8cffb41e8b53effaecfbcd4b26ebab3002328a3_prof);

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

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6f8cce50c9dd0e6be6ed5659ed08e9e68da3a67340fc805571d452ed48094980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3e8203e6317d9f4c1a6473f657502eb693b2caf8d20ae97da6c70695077c147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e8203e6317d9f4c1a6473f657502eb693b2caf8d20ae97da6c70695077c147->enter($__internal_d3e8203e6317d9f4c1a6473f657502eb693b2caf8d20ae97da6c70695077c147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e8203e6317d9f4c1a6473f657502eb693b2caf8d20ae97da6c70695077c147->leave($__internal_d3e8203e6317d9f4c1a6473f657502eb693b2caf8d20ae97da6c70695077c147_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_501ceb794f5064f4a36b42cf27c9c39cc00205b54acc3c1c19a562ba8f27b536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501ceb794f5064f4a36b42cf27c9c39cc00205b54acc3c1c19a562ba8f27b536->enter($__internal_501ceb794f5064f4a36b42cf27c9c39cc00205b54acc3c1c19a562ba8f27b536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_501ceb794f5064f4a36b42cf27c9c39cc00205b54acc3c1c19a562ba8f27b536->leave($__internal_501ceb794f5064f4a36b42cf27c9c39cc00205b54acc3c1c19a562ba8f27b536_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d36b5f4f1bb06dc8b53a03c0b49275cba3ac6c94ef15dca612b17502eabb792d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36b5f4f1bb06dc8b53a03c0b49275cba3ac6c94ef15dca612b17502eabb792d->enter($__internal_d36b5f4f1bb06dc8b53a03c0b49275cba3ac6c94ef15dca612b17502eabb792d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d36b5f4f1bb06dc8b53a03c0b49275cba3ac6c94ef15dca612b17502eabb792d->leave($__internal_d36b5f4f1bb06dc8b53a03c0b49275cba3ac6c94ef15dca612b17502eabb792d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b76bfffb6dad9afd538cb3dd6d057685073a75180ec4f8c9291f4014ce004bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76bfffb6dad9afd538cb3dd6d057685073a75180ec4f8c9291f4014ce004bf1->enter($__internal_b76bfffb6dad9afd538cb3dd6d057685073a75180ec4f8c9291f4014ce004bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b76bfffb6dad9afd538cb3dd6d057685073a75180ec4f8c9291f4014ce004bf1->leave($__internal_b76bfffb6dad9afd538cb3dd6d057685073a75180ec4f8c9291f4014ce004bf1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

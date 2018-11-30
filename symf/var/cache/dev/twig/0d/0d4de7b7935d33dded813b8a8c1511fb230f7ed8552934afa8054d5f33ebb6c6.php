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
        $__internal_c6f250fdcf286673882192105bfa6d2931f0d3e2e15c91d5f43a6f61edd35f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f250fdcf286673882192105bfa6d2931f0d3e2e15c91d5f43a6f61edd35f21->enter($__internal_c6f250fdcf286673882192105bfa6d2931f0d3e2e15c91d5f43a6f61edd35f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6f250fdcf286673882192105bfa6d2931f0d3e2e15c91d5f43a6f61edd35f21->leave($__internal_c6f250fdcf286673882192105bfa6d2931f0d3e2e15c91d5f43a6f61edd35f21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e727eac502d3f9657037403817be34e2913effbb95ee4ce9c3662a17697d3a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e727eac502d3f9657037403817be34e2913effbb95ee4ce9c3662a17697d3a33->enter($__internal_e727eac502d3f9657037403817be34e2913effbb95ee4ce9c3662a17697d3a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e727eac502d3f9657037403817be34e2913effbb95ee4ce9c3662a17697d3a33->leave($__internal_e727eac502d3f9657037403817be34e2913effbb95ee4ce9c3662a17697d3a33_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e3b65adc74beea3d5223948a2856d9e5580b24034578ae70f9f3a3d880b83bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3b65adc74beea3d5223948a2856d9e5580b24034578ae70f9f3a3d880b83bf->enter($__internal_3e3b65adc74beea3d5223948a2856d9e5580b24034578ae70f9f3a3d880b83bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e3b65adc74beea3d5223948a2856d9e5580b24034578ae70f9f3a3d880b83bf->leave($__internal_3e3b65adc74beea3d5223948a2856d9e5580b24034578ae70f9f3a3d880b83bf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a07a837e5ce6deba09a5e453e78ca14026cb6dedaf6aedba8d241faeac4639c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a07a837e5ce6deba09a5e453e78ca14026cb6dedaf6aedba8d241faeac4639c->enter($__internal_4a07a837e5ce6deba09a5e453e78ca14026cb6dedaf6aedba8d241faeac4639c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4a07a837e5ce6deba09a5e453e78ca14026cb6dedaf6aedba8d241faeac4639c->leave($__internal_4a07a837e5ce6deba09a5e453e78ca14026cb6dedaf6aedba8d241faeac4639c_prof);

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

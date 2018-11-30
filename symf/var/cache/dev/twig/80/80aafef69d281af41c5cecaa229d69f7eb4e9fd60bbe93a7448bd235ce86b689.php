<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_66ba52351e2fef3eb59a79d7329e5e4e3899c555378d35355092ac7e16409afb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f7e460e3ad4e0c492420c59b0a2cdd87a09a0988ee2f624e71598f3dd7f5bcfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e460e3ad4e0c492420c59b0a2cdd87a09a0988ee2f624e71598f3dd7f5bcfb->enter($__internal_f7e460e3ad4e0c492420c59b0a2cdd87a09a0988ee2f624e71598f3dd7f5bcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7e460e3ad4e0c492420c59b0a2cdd87a09a0988ee2f624e71598f3dd7f5bcfb->leave($__internal_f7e460e3ad4e0c492420c59b0a2cdd87a09a0988ee2f624e71598f3dd7f5bcfb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d36292fa7b42b2207c6d201cd96d03ff448f238dfdb78ddf46fa9c2fea42dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d36292fa7b42b2207c6d201cd96d03ff448f238dfdb78ddf46fa9c2fea42dbf->enter($__internal_0d36292fa7b42b2207c6d201cd96d03ff448f238dfdb78ddf46fa9c2fea42dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0d36292fa7b42b2207c6d201cd96d03ff448f238dfdb78ddf46fa9c2fea42dbf->leave($__internal_0d36292fa7b42b2207c6d201cd96d03ff448f238dfdb78ddf46fa9c2fea42dbf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8fc533b8d0dfe4ecf7fea66114091f58260a9492300f2c95f3a1822a160b6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fc533b8d0dfe4ecf7fea66114091f58260a9492300f2c95f3a1822a160b6ae->enter($__internal_e8fc533b8d0dfe4ecf7fea66114091f58260a9492300f2c95f3a1822a160b6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e8fc533b8d0dfe4ecf7fea66114091f58260a9492300f2c95f3a1822a160b6ae->leave($__internal_e8fc533b8d0dfe4ecf7fea66114091f58260a9492300f2c95f3a1822a160b6ae_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bb7b473c7499a87bb7cf6042638f9791f406a4ae666a8d92e36cc2675e331cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb7b473c7499a87bb7cf6042638f9791f406a4ae666a8d92e36cc2675e331cb->enter($__internal_1bb7b473c7499a87bb7cf6042638f9791f406a4ae666a8d92e36cc2675e331cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1bb7b473c7499a87bb7cf6042638f9791f406a4ae666a8d92e36cc2675e331cb->leave($__internal_1bb7b473c7499a87bb7cf6042638f9791f406a4ae666a8d92e36cc2675e331cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

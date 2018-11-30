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
        $__internal_caad1f4bf4bc9c4e7199d9ce39fdb9978af50b0552ffc168dd2418c24e335b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caad1f4bf4bc9c4e7199d9ce39fdb9978af50b0552ffc168dd2418c24e335b36->enter($__internal_caad1f4bf4bc9c4e7199d9ce39fdb9978af50b0552ffc168dd2418c24e335b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caad1f4bf4bc9c4e7199d9ce39fdb9978af50b0552ffc168dd2418c24e335b36->leave($__internal_caad1f4bf4bc9c4e7199d9ce39fdb9978af50b0552ffc168dd2418c24e335b36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26b7d8ee383d9b69fffde94e00f1b5965f4d7576851b4ccebdb7ebbefeed0ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b7d8ee383d9b69fffde94e00f1b5965f4d7576851b4ccebdb7ebbefeed0ca9->enter($__internal_26b7d8ee383d9b69fffde94e00f1b5965f4d7576851b4ccebdb7ebbefeed0ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_26b7d8ee383d9b69fffde94e00f1b5965f4d7576851b4ccebdb7ebbefeed0ca9->leave($__internal_26b7d8ee383d9b69fffde94e00f1b5965f4d7576851b4ccebdb7ebbefeed0ca9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_23f06a84ecfeb2b21ccbd291cfac2b07d676bdea8b5806401f028d2ae86c1d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f06a84ecfeb2b21ccbd291cfac2b07d676bdea8b5806401f028d2ae86c1d3e->enter($__internal_23f06a84ecfeb2b21ccbd291cfac2b07d676bdea8b5806401f028d2ae86c1d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_23f06a84ecfeb2b21ccbd291cfac2b07d676bdea8b5806401f028d2ae86c1d3e->leave($__internal_23f06a84ecfeb2b21ccbd291cfac2b07d676bdea8b5806401f028d2ae86c1d3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_99a978c0debf32aa5b522e5513b48c53b037ebbabf1648aec4803a12637278f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a978c0debf32aa5b522e5513b48c53b037ebbabf1648aec4803a12637278f7->enter($__internal_99a978c0debf32aa5b522e5513b48c53b037ebbabf1648aec4803a12637278f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_99a978c0debf32aa5b522e5513b48c53b037ebbabf1648aec4803a12637278f7->leave($__internal_99a978c0debf32aa5b522e5513b48c53b037ebbabf1648aec4803a12637278f7_prof);

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

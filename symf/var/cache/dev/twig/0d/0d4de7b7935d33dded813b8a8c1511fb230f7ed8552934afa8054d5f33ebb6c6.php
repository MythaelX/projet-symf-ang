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
        $__internal_e6d950366ff57ff507137c6614422ef3b775f72d96d4ac36b93c9bc68741e182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d950366ff57ff507137c6614422ef3b775f72d96d4ac36b93c9bc68741e182->enter($__internal_e6d950366ff57ff507137c6614422ef3b775f72d96d4ac36b93c9bc68741e182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6d950366ff57ff507137c6614422ef3b775f72d96d4ac36b93c9bc68741e182->leave($__internal_e6d950366ff57ff507137c6614422ef3b775f72d96d4ac36b93c9bc68741e182_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_915493e41b85f034c36ba7084f0f34f221622176dd4f40b24d53e1d051d48259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915493e41b85f034c36ba7084f0f34f221622176dd4f40b24d53e1d051d48259->enter($__internal_915493e41b85f034c36ba7084f0f34f221622176dd4f40b24d53e1d051d48259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_915493e41b85f034c36ba7084f0f34f221622176dd4f40b24d53e1d051d48259->leave($__internal_915493e41b85f034c36ba7084f0f34f221622176dd4f40b24d53e1d051d48259_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_539bcce38d2b42cd38b9492f71ab5c47d1e64641446846b5c25e4e77ea2a5828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539bcce38d2b42cd38b9492f71ab5c47d1e64641446846b5c25e4e77ea2a5828->enter($__internal_539bcce38d2b42cd38b9492f71ab5c47d1e64641446846b5c25e4e77ea2a5828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_539bcce38d2b42cd38b9492f71ab5c47d1e64641446846b5c25e4e77ea2a5828->leave($__internal_539bcce38d2b42cd38b9492f71ab5c47d1e64641446846b5c25e4e77ea2a5828_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e33f77ee6d89c629281e85c1213a0994a8bcb5efe029119b1921dd808fb97c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33f77ee6d89c629281e85c1213a0994a8bcb5efe029119b1921dd808fb97c81->enter($__internal_e33f77ee6d89c629281e85c1213a0994a8bcb5efe029119b1921dd808fb97c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e33f77ee6d89c629281e85c1213a0994a8bcb5efe029119b1921dd808fb97c81->leave($__internal_e33f77ee6d89c629281e85c1213a0994a8bcb5efe029119b1921dd808fb97c81_prof);

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

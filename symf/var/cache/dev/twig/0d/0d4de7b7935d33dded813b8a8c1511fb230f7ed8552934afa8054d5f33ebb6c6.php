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
        $__internal_db648228aebdfd9ef97689b96dda3c53076ba6f5c961ac34c4b14e2e22e9499e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db648228aebdfd9ef97689b96dda3c53076ba6f5c961ac34c4b14e2e22e9499e->enter($__internal_db648228aebdfd9ef97689b96dda3c53076ba6f5c961ac34c4b14e2e22e9499e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db648228aebdfd9ef97689b96dda3c53076ba6f5c961ac34c4b14e2e22e9499e->leave($__internal_db648228aebdfd9ef97689b96dda3c53076ba6f5c961ac34c4b14e2e22e9499e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5402b3ea0b05633d7190c570d11507809fde09693bf737156d9b5fc8238130d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5402b3ea0b05633d7190c570d11507809fde09693bf737156d9b5fc8238130d5->enter($__internal_5402b3ea0b05633d7190c570d11507809fde09693bf737156d9b5fc8238130d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5402b3ea0b05633d7190c570d11507809fde09693bf737156d9b5fc8238130d5->leave($__internal_5402b3ea0b05633d7190c570d11507809fde09693bf737156d9b5fc8238130d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a024308473b1fe35c85f77d6714705f82eda83c237654b066137d93b59c93d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a024308473b1fe35c85f77d6714705f82eda83c237654b066137d93b59c93d7f->enter($__internal_a024308473b1fe35c85f77d6714705f82eda83c237654b066137d93b59c93d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a024308473b1fe35c85f77d6714705f82eda83c237654b066137d93b59c93d7f->leave($__internal_a024308473b1fe35c85f77d6714705f82eda83c237654b066137d93b59c93d7f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_59b82e223687aec7b2ee0e5430e15e3436ceff3c0ac2b92ff9cc50a420042abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b82e223687aec7b2ee0e5430e15e3436ceff3c0ac2b92ff9cc50a420042abd->enter($__internal_59b82e223687aec7b2ee0e5430e15e3436ceff3c0ac2b92ff9cc50a420042abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_59b82e223687aec7b2ee0e5430e15e3436ceff3c0ac2b92ff9cc50a420042abd->leave($__internal_59b82e223687aec7b2ee0e5430e15e3436ceff3c0ac2b92ff9cc50a420042abd_prof);

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

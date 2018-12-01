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
        $__internal_1b7bae5dab8a23b3a8bfba3acb7fb1a1f1bb5699575e22a048c67249412c4c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7bae5dab8a23b3a8bfba3acb7fb1a1f1bb5699575e22a048c67249412c4c2a->enter($__internal_1b7bae5dab8a23b3a8bfba3acb7fb1a1f1bb5699575e22a048c67249412c4c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b7bae5dab8a23b3a8bfba3acb7fb1a1f1bb5699575e22a048c67249412c4c2a->leave($__internal_1b7bae5dab8a23b3a8bfba3acb7fb1a1f1bb5699575e22a048c67249412c4c2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9069bdeece10662e2f7c3d98bf06dea2df24ebcb44576a106a9f601bc9cf1f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9069bdeece10662e2f7c3d98bf06dea2df24ebcb44576a106a9f601bc9cf1f6c->enter($__internal_9069bdeece10662e2f7c3d98bf06dea2df24ebcb44576a106a9f601bc9cf1f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9069bdeece10662e2f7c3d98bf06dea2df24ebcb44576a106a9f601bc9cf1f6c->leave($__internal_9069bdeece10662e2f7c3d98bf06dea2df24ebcb44576a106a9f601bc9cf1f6c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53b94a3ceae6d3f58f74dc22b7442a6dd96bf5c95b30a441e07cf812fa23ba89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b94a3ceae6d3f58f74dc22b7442a6dd96bf5c95b30a441e07cf812fa23ba89->enter($__internal_53b94a3ceae6d3f58f74dc22b7442a6dd96bf5c95b30a441e07cf812fa23ba89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_53b94a3ceae6d3f58f74dc22b7442a6dd96bf5c95b30a441e07cf812fa23ba89->leave($__internal_53b94a3ceae6d3f58f74dc22b7442a6dd96bf5c95b30a441e07cf812fa23ba89_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c82862c8642d5f7555e4d1f0f0653057ca2e7c0bd8ae354a4e53d66e9821d367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82862c8642d5f7555e4d1f0f0653057ca2e7c0bd8ae354a4e53d66e9821d367->enter($__internal_c82862c8642d5f7555e4d1f0f0653057ca2e7c0bd8ae354a4e53d66e9821d367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c82862c8642d5f7555e4d1f0f0653057ca2e7c0bd8ae354a4e53d66e9821d367->leave($__internal_c82862c8642d5f7555e4d1f0f0653057ca2e7c0bd8ae354a4e53d66e9821d367_prof);

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

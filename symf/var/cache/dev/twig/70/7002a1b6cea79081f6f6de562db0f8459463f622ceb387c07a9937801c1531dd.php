<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3b65ec5e47a443e0f04562c51d7d085e19eedcc462dfe81ec806101d1e0d1a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d69af5bc55827abc662855e0344fc3caa3782eb1c28a875cf9f2cca84442cb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69af5bc55827abc662855e0344fc3caa3782eb1c28a875cf9f2cca84442cb11->enter($__internal_d69af5bc55827abc662855e0344fc3caa3782eb1c28a875cf9f2cca84442cb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d69af5bc55827abc662855e0344fc3caa3782eb1c28a875cf9f2cca84442cb11->leave($__internal_d69af5bc55827abc662855e0344fc3caa3782eb1c28a875cf9f2cca84442cb11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f61b44e2197aacd9bfe6396f6acee22f9c6e31eccf523378745ec112e81bf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f61b44e2197aacd9bfe6396f6acee22f9c6e31eccf523378745ec112e81bf9b->enter($__internal_5f61b44e2197aacd9bfe6396f6acee22f9c6e31eccf523378745ec112e81bf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5f61b44e2197aacd9bfe6396f6acee22f9c6e31eccf523378745ec112e81bf9b->leave($__internal_5f61b44e2197aacd9bfe6396f6acee22f9c6e31eccf523378745ec112e81bf9b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2743ca87af0f68887bc06441fd9cb1f10712642ee93757c012dcf2f0d37f4c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2743ca87af0f68887bc06441fd9cb1f10712642ee93757c012dcf2f0d37f4c2e->enter($__internal_2743ca87af0f68887bc06441fd9cb1f10712642ee93757c012dcf2f0d37f4c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2743ca87af0f68887bc06441fd9cb1f10712642ee93757c012dcf2f0d37f4c2e->leave($__internal_2743ca87af0f68887bc06441fd9cb1f10712642ee93757c012dcf2f0d37f4c2e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

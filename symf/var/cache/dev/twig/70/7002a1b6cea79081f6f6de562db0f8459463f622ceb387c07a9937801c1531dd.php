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
        $__internal_334b402f8427a2062ea261e4e6d4c6e7b8fc5d81257bacb22bb90e4213afb47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334b402f8427a2062ea261e4e6d4c6e7b8fc5d81257bacb22bb90e4213afb47b->enter($__internal_334b402f8427a2062ea261e4e6d4c6e7b8fc5d81257bacb22bb90e4213afb47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_334b402f8427a2062ea261e4e6d4c6e7b8fc5d81257bacb22bb90e4213afb47b->leave($__internal_334b402f8427a2062ea261e4e6d4c6e7b8fc5d81257bacb22bb90e4213afb47b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67641edf7fa1af50e4123a70f3336938b8f7b0630a921d63cb62d6f661820ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67641edf7fa1af50e4123a70f3336938b8f7b0630a921d63cb62d6f661820ea2->enter($__internal_67641edf7fa1af50e4123a70f3336938b8f7b0630a921d63cb62d6f661820ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_67641edf7fa1af50e4123a70f3336938b8f7b0630a921d63cb62d6f661820ea2->leave($__internal_67641edf7fa1af50e4123a70f3336938b8f7b0630a921d63cb62d6f661820ea2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1602d080cee19154de1d04031132f6a40a28b57645ded9e64633a7c74a4ce9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1602d080cee19154de1d04031132f6a40a28b57645ded9e64633a7c74a4ce9ab->enter($__internal_1602d080cee19154de1d04031132f6a40a28b57645ded9e64633a7c74a4ce9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1602d080cee19154de1d04031132f6a40a28b57645ded9e64633a7c74a4ce9ab->leave($__internal_1602d080cee19154de1d04031132f6a40a28b57645ded9e64633a7c74a4ce9ab_prof);

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

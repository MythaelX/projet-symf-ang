<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eafcbdeefd905f8110ae7893e793eec82c3e00d2c70f441e7e14729e66647293 extends Twig_Template
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
        $__internal_a10de047e982b7e6d208e6a352f42de622bc07000cf9b2d09257d58ea4126b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10de047e982b7e6d208e6a352f42de622bc07000cf9b2d09257d58ea4126b3f->enter($__internal_a10de047e982b7e6d208e6a352f42de622bc07000cf9b2d09257d58ea4126b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a10de047e982b7e6d208e6a352f42de622bc07000cf9b2d09257d58ea4126b3f->leave($__internal_a10de047e982b7e6d208e6a352f42de622bc07000cf9b2d09257d58ea4126b3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74bd54f6d8dfab16a48f04458fe38c22de05af99854fc2ca3ef32c48b28b43b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bd54f6d8dfab16a48f04458fe38c22de05af99854fc2ca3ef32c48b28b43b1->enter($__internal_74bd54f6d8dfab16a48f04458fe38c22de05af99854fc2ca3ef32c48b28b43b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_74bd54f6d8dfab16a48f04458fe38c22de05af99854fc2ca3ef32c48b28b43b1->leave($__internal_74bd54f6d8dfab16a48f04458fe38c22de05af99854fc2ca3ef32c48b28b43b1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_21f046a25f947026cf592bcff1b163496a8748c6f4b7084128d65552669f9029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f046a25f947026cf592bcff1b163496a8748c6f4b7084128d65552669f9029->enter($__internal_21f046a25f947026cf592bcff1b163496a8748c6f4b7084128d65552669f9029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_21f046a25f947026cf592bcff1b163496a8748c6f4b7084128d65552669f9029->leave($__internal_21f046a25f947026cf592bcff1b163496a8748c6f4b7084128d65552669f9029_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

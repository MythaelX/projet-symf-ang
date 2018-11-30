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
        $__internal_79046c18b2b59a89fd9fa6e6cca94519d10fd7a4c6292e203ef1042a1cf9ba02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79046c18b2b59a89fd9fa6e6cca94519d10fd7a4c6292e203ef1042a1cf9ba02->enter($__internal_79046c18b2b59a89fd9fa6e6cca94519d10fd7a4c6292e203ef1042a1cf9ba02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79046c18b2b59a89fd9fa6e6cca94519d10fd7a4c6292e203ef1042a1cf9ba02->leave($__internal_79046c18b2b59a89fd9fa6e6cca94519d10fd7a4c6292e203ef1042a1cf9ba02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83b6701e90783d5535afb676ac5599e62023e435ff969ec15d000fdfe726786b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b6701e90783d5535afb676ac5599e62023e435ff969ec15d000fdfe726786b->enter($__internal_83b6701e90783d5535afb676ac5599e62023e435ff969ec15d000fdfe726786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_83b6701e90783d5535afb676ac5599e62023e435ff969ec15d000fdfe726786b->leave($__internal_83b6701e90783d5535afb676ac5599e62023e435ff969ec15d000fdfe726786b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a4b45c7e74afad8a06e401b445955f3c0cb55e3500a0f54c4915a8652360874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4b45c7e74afad8a06e401b445955f3c0cb55e3500a0f54c4915a8652360874->enter($__internal_6a4b45c7e74afad8a06e401b445955f3c0cb55e3500a0f54c4915a8652360874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a4b45c7e74afad8a06e401b445955f3c0cb55e3500a0f54c4915a8652360874->leave($__internal_6a4b45c7e74afad8a06e401b445955f3c0cb55e3500a0f54c4915a8652360874_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

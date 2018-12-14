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
        $__internal_eeafc3180a10e46b0c65507ba431486b1211bbb03561dccfe118360177caf9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeafc3180a10e46b0c65507ba431486b1211bbb03561dccfe118360177caf9d0->enter($__internal_eeafc3180a10e46b0c65507ba431486b1211bbb03561dccfe118360177caf9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeafc3180a10e46b0c65507ba431486b1211bbb03561dccfe118360177caf9d0->leave($__internal_eeafc3180a10e46b0c65507ba431486b1211bbb03561dccfe118360177caf9d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_388d9d177c87b6ac9cb75f2070933dbb8d9f93615c8bb38c2656e7045086dba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388d9d177c87b6ac9cb75f2070933dbb8d9f93615c8bb38c2656e7045086dba5->enter($__internal_388d9d177c87b6ac9cb75f2070933dbb8d9f93615c8bb38c2656e7045086dba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_388d9d177c87b6ac9cb75f2070933dbb8d9f93615c8bb38c2656e7045086dba5->leave($__internal_388d9d177c87b6ac9cb75f2070933dbb8d9f93615c8bb38c2656e7045086dba5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ac848f653947c1b0115071d0c654fcc9b6304a8235e8b8a2fbc5bbed6a3af96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac848f653947c1b0115071d0c654fcc9b6304a8235e8b8a2fbc5bbed6a3af96->enter($__internal_9ac848f653947c1b0115071d0c654fcc9b6304a8235e8b8a2fbc5bbed6a3af96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9ac848f653947c1b0115071d0c654fcc9b6304a8235e8b8a2fbc5bbed6a3af96->leave($__internal_9ac848f653947c1b0115071d0c654fcc9b6304a8235e8b8a2fbc5bbed6a3af96_prof);

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

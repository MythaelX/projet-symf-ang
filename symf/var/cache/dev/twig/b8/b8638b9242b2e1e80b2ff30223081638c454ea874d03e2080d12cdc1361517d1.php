<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0c06d56bb5ad927f860154cae9330bce134aa21fed6034780e74f5a2d5848db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_628b9cc245f9c9980780dabceb70a1b381bacead3e5ba1a0e0a57e1384973329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628b9cc245f9c9980780dabceb70a1b381bacead3e5ba1a0e0a57e1384973329->enter($__internal_628b9cc245f9c9980780dabceb70a1b381bacead3e5ba1a0e0a57e1384973329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_628b9cc245f9c9980780dabceb70a1b381bacead3e5ba1a0e0a57e1384973329->leave($__internal_628b9cc245f9c9980780dabceb70a1b381bacead3e5ba1a0e0a57e1384973329_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5f36470ea68a982521c40a0466024a6c1988ca4697884810e0eed18a9e170e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f36470ea68a982521c40a0466024a6c1988ca4697884810e0eed18a9e170e0->enter($__internal_b5f36470ea68a982521c40a0466024a6c1988ca4697884810e0eed18a9e170e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b5f36470ea68a982521c40a0466024a6c1988ca4697884810e0eed18a9e170e0->leave($__internal_b5f36470ea68a982521c40a0466024a6c1988ca4697884810e0eed18a9e170e0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_913850574d65cfa97840cede6e3c473c26271b38eb0848f79632ea5d9c3b483f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913850574d65cfa97840cede6e3c473c26271b38eb0848f79632ea5d9c3b483f->enter($__internal_913850574d65cfa97840cede6e3c473c26271b38eb0848f79632ea5d9c3b483f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_913850574d65cfa97840cede6e3c473c26271b38eb0848f79632ea5d9c3b483f->leave($__internal_913850574d65cfa97840cede6e3c473c26271b38eb0848f79632ea5d9c3b483f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eebaf5fc6e922cbd4a4718680711a87e632d4401d8d10ed700f9bf92a8b747fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebaf5fc6e922cbd4a4718680711a87e632d4401d8d10ed700f9bf92a8b747fb->enter($__internal_eebaf5fc6e922cbd4a4718680711a87e632d4401d8d10ed700f9bf92a8b747fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eebaf5fc6e922cbd4a4718680711a87e632d4401d8d10ed700f9bf92a8b747fb->leave($__internal_eebaf5fc6e922cbd4a4718680711a87e632d4401d8d10ed700f9bf92a8b747fb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

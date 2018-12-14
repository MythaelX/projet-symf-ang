<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a80e33120e12cf206d939158a9143359b5d4985b55ab400d2822813c2dcb523e extends Twig_Template
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
        $__internal_3513577f3314fe1c783b47f4bf0e24e04f002de816429bc8fafed755faedbb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3513577f3314fe1c783b47f4bf0e24e04f002de816429bc8fafed755faedbb62->enter($__internal_3513577f3314fe1c783b47f4bf0e24e04f002de816429bc8fafed755faedbb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3513577f3314fe1c783b47f4bf0e24e04f002de816429bc8fafed755faedbb62->leave($__internal_3513577f3314fe1c783b47f4bf0e24e04f002de816429bc8fafed755faedbb62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c74a76187691c32152974cee04ba25e2e7ee19f7d4aadc69a5abab993370d8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74a76187691c32152974cee04ba25e2e7ee19f7d4aadc69a5abab993370d8cd->enter($__internal_c74a76187691c32152974cee04ba25e2e7ee19f7d4aadc69a5abab993370d8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c74a76187691c32152974cee04ba25e2e7ee19f7d4aadc69a5abab993370d8cd->leave($__internal_c74a76187691c32152974cee04ba25e2e7ee19f7d4aadc69a5abab993370d8cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86b9b913fb842dbe415252ba770a9367bf449e4fff5c9bcbb39c1a9278adc09a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b9b913fb842dbe415252ba770a9367bf449e4fff5c9bcbb39c1a9278adc09a->enter($__internal_86b9b913fb842dbe415252ba770a9367bf449e4fff5c9bcbb39c1a9278adc09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86b9b913fb842dbe415252ba770a9367bf449e4fff5c9bcbb39c1a9278adc09a->leave($__internal_86b9b913fb842dbe415252ba770a9367bf449e4fff5c9bcbb39c1a9278adc09a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6a18ff8306258940baff7137cbca912f4854982549564b7a41869152d1d59d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a18ff8306258940baff7137cbca912f4854982549564b7a41869152d1d59d1->enter($__internal_c6a18ff8306258940baff7137cbca912f4854982549564b7a41869152d1d59d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c6a18ff8306258940baff7137cbca912f4854982549564b7a41869152d1d59d1->leave($__internal_c6a18ff8306258940baff7137cbca912f4854982549564b7a41869152d1d59d1_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

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
        $__internal_4ca6bb6cca655017cba0d0d6824f6afd19575437c5c7e7800de8665ff0deb6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca6bb6cca655017cba0d0d6824f6afd19575437c5c7e7800de8665ff0deb6fc->enter($__internal_4ca6bb6cca655017cba0d0d6824f6afd19575437c5c7e7800de8665ff0deb6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ca6bb6cca655017cba0d0d6824f6afd19575437c5c7e7800de8665ff0deb6fc->leave($__internal_4ca6bb6cca655017cba0d0d6824f6afd19575437c5c7e7800de8665ff0deb6fc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bade07f73ffef7e436ea19f144eb8bff5c7f5e440986a0b64337eed86f4af5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bade07f73ffef7e436ea19f144eb8bff5c7f5e440986a0b64337eed86f4af5f4->enter($__internal_bade07f73ffef7e436ea19f144eb8bff5c7f5e440986a0b64337eed86f4af5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bade07f73ffef7e436ea19f144eb8bff5c7f5e440986a0b64337eed86f4af5f4->leave($__internal_bade07f73ffef7e436ea19f144eb8bff5c7f5e440986a0b64337eed86f4af5f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7118e8c3d6817ab721dcd1ef0f8b53135dc2e1587caab006fc462aceafe407cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7118e8c3d6817ab721dcd1ef0f8b53135dc2e1587caab006fc462aceafe407cf->enter($__internal_7118e8c3d6817ab721dcd1ef0f8b53135dc2e1587caab006fc462aceafe407cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7118e8c3d6817ab721dcd1ef0f8b53135dc2e1587caab006fc462aceafe407cf->leave($__internal_7118e8c3d6817ab721dcd1ef0f8b53135dc2e1587caab006fc462aceafe407cf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0f63762e61de7af82484600e7c77b5f045563aed68a65434146121bb5f842ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f63762e61de7af82484600e7c77b5f045563aed68a65434146121bb5f842ef->enter($__internal_a0f63762e61de7af82484600e7c77b5f045563aed68a65434146121bb5f842ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0f63762e61de7af82484600e7c77b5f045563aed68a65434146121bb5f842ef->leave($__internal_a0f63762e61de7af82484600e7c77b5f045563aed68a65434146121bb5f842ef_prof);

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

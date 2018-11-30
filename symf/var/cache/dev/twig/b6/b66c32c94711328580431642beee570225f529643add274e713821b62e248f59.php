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
        $__internal_8e23d714a7c0858d0ff1adb70a739d2cf4b58ad502fd94bef34a623405a42b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e23d714a7c0858d0ff1adb70a739d2cf4b58ad502fd94bef34a623405a42b49->enter($__internal_8e23d714a7c0858d0ff1adb70a739d2cf4b58ad502fd94bef34a623405a42b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e23d714a7c0858d0ff1adb70a739d2cf4b58ad502fd94bef34a623405a42b49->leave($__internal_8e23d714a7c0858d0ff1adb70a739d2cf4b58ad502fd94bef34a623405a42b49_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca7ace89c8a702efc77ae3555e1d2711d71046553ed9b57dad7e921cdec201b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7ace89c8a702efc77ae3555e1d2711d71046553ed9b57dad7e921cdec201b6->enter($__internal_ca7ace89c8a702efc77ae3555e1d2711d71046553ed9b57dad7e921cdec201b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ca7ace89c8a702efc77ae3555e1d2711d71046553ed9b57dad7e921cdec201b6->leave($__internal_ca7ace89c8a702efc77ae3555e1d2711d71046553ed9b57dad7e921cdec201b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17ba683192ab160b553cbd8f0094d424c9ca01f640ff31171e0a1f09df5d7ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ba683192ab160b553cbd8f0094d424c9ca01f640ff31171e0a1f09df5d7ab2->enter($__internal_17ba683192ab160b553cbd8f0094d424c9ca01f640ff31171e0a1f09df5d7ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_17ba683192ab160b553cbd8f0094d424c9ca01f640ff31171e0a1f09df5d7ab2->leave($__internal_17ba683192ab160b553cbd8f0094d424c9ca01f640ff31171e0a1f09df5d7ab2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58c329983215107953766b41a5e2276c7eed1e98d43e91a35e5a51f5b6e9a7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c329983215107953766b41a5e2276c7eed1e98d43e91a35e5a51f5b6e9a7f8->enter($__internal_58c329983215107953766b41a5e2276c7eed1e98d43e91a35e5a51f5b6e9a7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58c329983215107953766b41a5e2276c7eed1e98d43e91a35e5a51f5b6e9a7f8->leave($__internal_58c329983215107953766b41a5e2276c7eed1e98d43e91a35e5a51f5b6e9a7f8_prof);

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

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
        $__internal_30312703cada7f31a722e263f8c3c878cbc5556e0f010f44c79e912effd71aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30312703cada7f31a722e263f8c3c878cbc5556e0f010f44c79e912effd71aa6->enter($__internal_30312703cada7f31a722e263f8c3c878cbc5556e0f010f44c79e912effd71aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30312703cada7f31a722e263f8c3c878cbc5556e0f010f44c79e912effd71aa6->leave($__internal_30312703cada7f31a722e263f8c3c878cbc5556e0f010f44c79e912effd71aa6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78a6ecd0ac3f48e53d541cb22d87c5a66fcd2a33bb02d1e531a59c92f1315675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a6ecd0ac3f48e53d541cb22d87c5a66fcd2a33bb02d1e531a59c92f1315675->enter($__internal_78a6ecd0ac3f48e53d541cb22d87c5a66fcd2a33bb02d1e531a59c92f1315675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78a6ecd0ac3f48e53d541cb22d87c5a66fcd2a33bb02d1e531a59c92f1315675->leave($__internal_78a6ecd0ac3f48e53d541cb22d87c5a66fcd2a33bb02d1e531a59c92f1315675_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb1fd5ec34ccf727f5a39daa6f6a89b04b5506be9e6d05b4a84760a327e86786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1fd5ec34ccf727f5a39daa6f6a89b04b5506be9e6d05b4a84760a327e86786->enter($__internal_bb1fd5ec34ccf727f5a39daa6f6a89b04b5506be9e6d05b4a84760a327e86786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb1fd5ec34ccf727f5a39daa6f6a89b04b5506be9e6d05b4a84760a327e86786->leave($__internal_bb1fd5ec34ccf727f5a39daa6f6a89b04b5506be9e6d05b4a84760a327e86786_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3efbb2643a8d88079de2574e4a255713ad6e7db5ed47cb073f3cfe7b0dd9c123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efbb2643a8d88079de2574e4a255713ad6e7db5ed47cb073f3cfe7b0dd9c123->enter($__internal_3efbb2643a8d88079de2574e4a255713ad6e7db5ed47cb073f3cfe7b0dd9c123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3efbb2643a8d88079de2574e4a255713ad6e7db5ed47cb073f3cfe7b0dd9c123->leave($__internal_3efbb2643a8d88079de2574e4a255713ad6e7db5ed47cb073f3cfe7b0dd9c123_prof);

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

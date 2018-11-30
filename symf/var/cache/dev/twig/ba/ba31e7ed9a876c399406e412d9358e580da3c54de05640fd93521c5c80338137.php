<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3708c37be034b2eb2c92a7db2bdf9c66d2e6fd37b2cc42670c295e34ce233076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2cd3c5bdddfc4f0c3264c2ed3177a9bddb764063caf080088e0218a6c6dff3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd3c5bdddfc4f0c3264c2ed3177a9bddb764063caf080088e0218a6c6dff3f6->enter($__internal_2cd3c5bdddfc4f0c3264c2ed3177a9bddb764063caf080088e0218a6c6dff3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd3c5bdddfc4f0c3264c2ed3177a9bddb764063caf080088e0218a6c6dff3f6->leave($__internal_2cd3c5bdddfc4f0c3264c2ed3177a9bddb764063caf080088e0218a6c6dff3f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d60b45c553934152cf201f6329374fa13d0e660c49a744e9ab083cb9c9ed69aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60b45c553934152cf201f6329374fa13d0e660c49a744e9ab083cb9c9ed69aa->enter($__internal_d60b45c553934152cf201f6329374fa13d0e660c49a744e9ab083cb9c9ed69aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d60b45c553934152cf201f6329374fa13d0e660c49a744e9ab083cb9c9ed69aa->leave($__internal_d60b45c553934152cf201f6329374fa13d0e660c49a744e9ab083cb9c9ed69aa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e47602ed2080acb87f98b6ba1e3889a5f7ef3892b600e89542fdb27670a9ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e47602ed2080acb87f98b6ba1e3889a5f7ef3892b600e89542fdb27670a9ad4->enter($__internal_5e47602ed2080acb87f98b6ba1e3889a5f7ef3892b600e89542fdb27670a9ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5e47602ed2080acb87f98b6ba1e3889a5f7ef3892b600e89542fdb27670a9ad4->leave($__internal_5e47602ed2080acb87f98b6ba1e3889a5f7ef3892b600e89542fdb27670a9ad4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c651d59d7b948f41c5d24a4933b13eca40a6ca7d3b2176e82ee34dfc9ff1ba92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c651d59d7b948f41c5d24a4933b13eca40a6ca7d3b2176e82ee34dfc9ff1ba92->enter($__internal_c651d59d7b948f41c5d24a4933b13eca40a6ca7d3b2176e82ee34dfc9ff1ba92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c651d59d7b948f41c5d24a4933b13eca40a6ca7d3b2176e82ee34dfc9ff1ba92->leave($__internal_c651d59d7b948f41c5d24a4933b13eca40a6ca7d3b2176e82ee34dfc9ff1ba92_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

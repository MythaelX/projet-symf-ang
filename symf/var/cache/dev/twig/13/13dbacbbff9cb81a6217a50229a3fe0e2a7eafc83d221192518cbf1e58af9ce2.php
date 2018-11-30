<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a68b528f65d8049450d83bff62a849be46d8c1263379a10da74e9cb3e95a72f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_30ee3339622ebd1eed7d2c4cbfb566369da5e384c4a6dae37b1057ad8ff0e7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ee3339622ebd1eed7d2c4cbfb566369da5e384c4a6dae37b1057ad8ff0e7b8->enter($__internal_30ee3339622ebd1eed7d2c4cbfb566369da5e384c4a6dae37b1057ad8ff0e7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30ee3339622ebd1eed7d2c4cbfb566369da5e384c4a6dae37b1057ad8ff0e7b8->leave($__internal_30ee3339622ebd1eed7d2c4cbfb566369da5e384c4a6dae37b1057ad8ff0e7b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11d3de5d00a94a0553c657a8a928092726cb0c452d6f4accee780587c51fa663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d3de5d00a94a0553c657a8a928092726cb0c452d6f4accee780587c51fa663->enter($__internal_11d3de5d00a94a0553c657a8a928092726cb0c452d6f4accee780587c51fa663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_11d3de5d00a94a0553c657a8a928092726cb0c452d6f4accee780587c51fa663->leave($__internal_11d3de5d00a94a0553c657a8a928092726cb0c452d6f4accee780587c51fa663_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c49405b13464c40a0d9d3b1d0a22fe776fb2ab7db1a21012da301d2ce12c0282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49405b13464c40a0d9d3b1d0a22fe776fb2ab7db1a21012da301d2ce12c0282->enter($__internal_c49405b13464c40a0d9d3b1d0a22fe776fb2ab7db1a21012da301d2ce12c0282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c49405b13464c40a0d9d3b1d0a22fe776fb2ab7db1a21012da301d2ce12c0282->leave($__internal_c49405b13464c40a0d9d3b1d0a22fe776fb2ab7db1a21012da301d2ce12c0282_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0a8b672660f935b0e29837078e64b94424fdf38956947045b4043fdb8b00c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a8b672660f935b0e29837078e64b94424fdf38956947045b4043fdb8b00c7d->enter($__internal_d0a8b672660f935b0e29837078e64b94424fdf38956947045b4043fdb8b00c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d0a8b672660f935b0e29837078e64b94424fdf38956947045b4043fdb8b00c7d->leave($__internal_d0a8b672660f935b0e29837078e64b94424fdf38956947045b4043fdb8b00c7d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

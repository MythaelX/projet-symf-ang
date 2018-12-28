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
        $__internal_877a4296e2290204c707accd7794ee1535022ef8494f331bc192941af6a75a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877a4296e2290204c707accd7794ee1535022ef8494f331bc192941af6a75a59->enter($__internal_877a4296e2290204c707accd7794ee1535022ef8494f331bc192941af6a75a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_877a4296e2290204c707accd7794ee1535022ef8494f331bc192941af6a75a59->leave($__internal_877a4296e2290204c707accd7794ee1535022ef8494f331bc192941af6a75a59_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_047011179232317e5ae7e22c52f5b720bb2fa900d5eb4ddb6faeab124a0eae31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047011179232317e5ae7e22c52f5b720bb2fa900d5eb4ddb6faeab124a0eae31->enter($__internal_047011179232317e5ae7e22c52f5b720bb2fa900d5eb4ddb6faeab124a0eae31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_047011179232317e5ae7e22c52f5b720bb2fa900d5eb4ddb6faeab124a0eae31->leave($__internal_047011179232317e5ae7e22c52f5b720bb2fa900d5eb4ddb6faeab124a0eae31_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94ce801eed949e1711c983cb106b4b71836c08a4651c4d2675e1d06e19787cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ce801eed949e1711c983cb106b4b71836c08a4651c4d2675e1d06e19787cf6->enter($__internal_94ce801eed949e1711c983cb106b4b71836c08a4651c4d2675e1d06e19787cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94ce801eed949e1711c983cb106b4b71836c08a4651c4d2675e1d06e19787cf6->leave($__internal_94ce801eed949e1711c983cb106b4b71836c08a4651c4d2675e1d06e19787cf6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbc02ad7ed7058b65edb2d1beca096f760c0d63659eb6723474f86d750fb08ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc02ad7ed7058b65edb2d1beca096f760c0d63659eb6723474f86d750fb08ec->enter($__internal_dbc02ad7ed7058b65edb2d1beca096f760c0d63659eb6723474f86d750fb08ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dbc02ad7ed7058b65edb2d1beca096f760c0d63659eb6723474f86d750fb08ec->leave($__internal_dbc02ad7ed7058b65edb2d1beca096f760c0d63659eb6723474f86d750fb08ec_prof);

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

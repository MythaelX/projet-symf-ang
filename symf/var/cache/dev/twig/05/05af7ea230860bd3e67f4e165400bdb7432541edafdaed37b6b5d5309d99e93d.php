<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b9337750eae794301d1a7a0c556c733b356f2474f32bfd1ce4fb641f61cb707a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_a0a4058ee05ef55e9dbe78c0d914ff17366be3f4cc2e50030df3fee87d956e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a4058ee05ef55e9dbe78c0d914ff17366be3f4cc2e50030df3fee87d956e3c->enter($__internal_a0a4058ee05ef55e9dbe78c0d914ff17366be3f4cc2e50030df3fee87d956e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0a4058ee05ef55e9dbe78c0d914ff17366be3f4cc2e50030df3fee87d956e3c->leave($__internal_a0a4058ee05ef55e9dbe78c0d914ff17366be3f4cc2e50030df3fee87d956e3c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c4763a2ed4ae770d60ec1c45699ff4f7b6b39e34f0f41fcf6f8231445ea7b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4763a2ed4ae770d60ec1c45699ff4f7b6b39e34f0f41fcf6f8231445ea7b41->enter($__internal_8c4763a2ed4ae770d60ec1c45699ff4f7b6b39e34f0f41fcf6f8231445ea7b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c4763a2ed4ae770d60ec1c45699ff4f7b6b39e34f0f41fcf6f8231445ea7b41->leave($__internal_8c4763a2ed4ae770d60ec1c45699ff4f7b6b39e34f0f41fcf6f8231445ea7b41_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79ab6a2d6ba1297630abf507d90095ac6e149f41fe6038e0c70cea76d8469118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ab6a2d6ba1297630abf507d90095ac6e149f41fe6038e0c70cea76d8469118->enter($__internal_79ab6a2d6ba1297630abf507d90095ac6e149f41fe6038e0c70cea76d8469118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_79ab6a2d6ba1297630abf507d90095ac6e149f41fe6038e0c70cea76d8469118->leave($__internal_79ab6a2d6ba1297630abf507d90095ac6e149f41fe6038e0c70cea76d8469118_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8effb6d27adb5913dfc59a58da6a1e2225da11311779f96e9f06497b0f9a6576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8effb6d27adb5913dfc59a58da6a1e2225da11311779f96e9f06497b0f9a6576->enter($__internal_8effb6d27adb5913dfc59a58da6a1e2225da11311779f96e9f06497b0f9a6576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8effb6d27adb5913dfc59a58da6a1e2225da11311779f96e9f06497b0f9a6576->leave($__internal_8effb6d27adb5913dfc59a58da6a1e2225da11311779f96e9f06497b0f9a6576_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

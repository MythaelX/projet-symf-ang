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
        $__internal_54300edd200a0ddfd1df8d7bc2036e6930a87232775a6a4442d65fe1341b41c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54300edd200a0ddfd1df8d7bc2036e6930a87232775a6a4442d65fe1341b41c8->enter($__internal_54300edd200a0ddfd1df8d7bc2036e6930a87232775a6a4442d65fe1341b41c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54300edd200a0ddfd1df8d7bc2036e6930a87232775a6a4442d65fe1341b41c8->leave($__internal_54300edd200a0ddfd1df8d7bc2036e6930a87232775a6a4442d65fe1341b41c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b50b19161b1b298bc16088ec7613e0b97666e954f254b3767e860e3940cc5f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50b19161b1b298bc16088ec7613e0b97666e954f254b3767e860e3940cc5f2d->enter($__internal_b50b19161b1b298bc16088ec7613e0b97666e954f254b3767e860e3940cc5f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b50b19161b1b298bc16088ec7613e0b97666e954f254b3767e860e3940cc5f2d->leave($__internal_b50b19161b1b298bc16088ec7613e0b97666e954f254b3767e860e3940cc5f2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fbb0de479f743a39689e5ce117c2c851b83378e0cd96aa938f3e1145b352518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbb0de479f743a39689e5ce117c2c851b83378e0cd96aa938f3e1145b352518->enter($__internal_5fbb0de479f743a39689e5ce117c2c851b83378e0cd96aa938f3e1145b352518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5fbb0de479f743a39689e5ce117c2c851b83378e0cd96aa938f3e1145b352518->leave($__internal_5fbb0de479f743a39689e5ce117c2c851b83378e0cd96aa938f3e1145b352518_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_749294dec72a897a6b362863a8702c74a91beb7ed699e1ed76f6de2e1b37c792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749294dec72a897a6b362863a8702c74a91beb7ed699e1ed76f6de2e1b37c792->enter($__internal_749294dec72a897a6b362863a8702c74a91beb7ed699e1ed76f6de2e1b37c792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_749294dec72a897a6b362863a8702c74a91beb7ed699e1ed76f6de2e1b37c792->leave($__internal_749294dec72a897a6b362863a8702c74a91beb7ed699e1ed76f6de2e1b37c792_prof);

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

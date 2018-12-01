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
        $__internal_52de15c716057506fec1078252cbf81865bda46c656dd96de87d4368101ca7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52de15c716057506fec1078252cbf81865bda46c656dd96de87d4368101ca7a7->enter($__internal_52de15c716057506fec1078252cbf81865bda46c656dd96de87d4368101ca7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52de15c716057506fec1078252cbf81865bda46c656dd96de87d4368101ca7a7->leave($__internal_52de15c716057506fec1078252cbf81865bda46c656dd96de87d4368101ca7a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c3696424489167eedebe86dd9d12e2b980422343ccf628c2ac2e89f557a6da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3696424489167eedebe86dd9d12e2b980422343ccf628c2ac2e89f557a6da6->enter($__internal_5c3696424489167eedebe86dd9d12e2b980422343ccf628c2ac2e89f557a6da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c3696424489167eedebe86dd9d12e2b980422343ccf628c2ac2e89f557a6da6->leave($__internal_5c3696424489167eedebe86dd9d12e2b980422343ccf628c2ac2e89f557a6da6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0cd2aa073e76b07500aa5115059cdbfd3ccec1ff9c1e5ae043b97743660b298d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd2aa073e76b07500aa5115059cdbfd3ccec1ff9c1e5ae043b97743660b298d->enter($__internal_0cd2aa073e76b07500aa5115059cdbfd3ccec1ff9c1e5ae043b97743660b298d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0cd2aa073e76b07500aa5115059cdbfd3ccec1ff9c1e5ae043b97743660b298d->leave($__internal_0cd2aa073e76b07500aa5115059cdbfd3ccec1ff9c1e5ae043b97743660b298d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f91f19697dd34dad7bf62de1b53151502e51fe1ba36065797fea7187f13b341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f91f19697dd34dad7bf62de1b53151502e51fe1ba36065797fea7187f13b341->enter($__internal_2f91f19697dd34dad7bf62de1b53151502e51fe1ba36065797fea7187f13b341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f91f19697dd34dad7bf62de1b53151502e51fe1ba36065797fea7187f13b341->leave($__internal_2f91f19697dd34dad7bf62de1b53151502e51fe1ba36065797fea7187f13b341_prof);

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
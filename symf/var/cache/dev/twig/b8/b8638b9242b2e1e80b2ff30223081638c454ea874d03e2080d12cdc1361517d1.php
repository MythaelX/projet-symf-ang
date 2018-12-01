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
        $__internal_60505cd698f05c341c7d99c512d9a3fe2fa22f94c1e786697dd81919b2297e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60505cd698f05c341c7d99c512d9a3fe2fa22f94c1e786697dd81919b2297e2e->enter($__internal_60505cd698f05c341c7d99c512d9a3fe2fa22f94c1e786697dd81919b2297e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60505cd698f05c341c7d99c512d9a3fe2fa22f94c1e786697dd81919b2297e2e->leave($__internal_60505cd698f05c341c7d99c512d9a3fe2fa22f94c1e786697dd81919b2297e2e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6f43a6321b0b8061ea9d57dccfdadce7ad58f385af9a7d1fc33235ece30ed7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f43a6321b0b8061ea9d57dccfdadce7ad58f385af9a7d1fc33235ece30ed7e->enter($__internal_c6f43a6321b0b8061ea9d57dccfdadce7ad58f385af9a7d1fc33235ece30ed7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6f43a6321b0b8061ea9d57dccfdadce7ad58f385af9a7d1fc33235ece30ed7e->leave($__internal_c6f43a6321b0b8061ea9d57dccfdadce7ad58f385af9a7d1fc33235ece30ed7e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_436c72a87250ac02e1fba70fa872574d74c7e2e4aaf78beb7f66b8f4f294cd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436c72a87250ac02e1fba70fa872574d74c7e2e4aaf78beb7f66b8f4f294cd74->enter($__internal_436c72a87250ac02e1fba70fa872574d74c7e2e4aaf78beb7f66b8f4f294cd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_436c72a87250ac02e1fba70fa872574d74c7e2e4aaf78beb7f66b8f4f294cd74->leave($__internal_436c72a87250ac02e1fba70fa872574d74c7e2e4aaf78beb7f66b8f4f294cd74_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59db96a5afa4d7064d5f5e9faa03eb3b93d0147e90e7e042e83c2d3522acbf28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59db96a5afa4d7064d5f5e9faa03eb3b93d0147e90e7e042e83c2d3522acbf28->enter($__internal_59db96a5afa4d7064d5f5e9faa03eb3b93d0147e90e7e042e83c2d3522acbf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_59db96a5afa4d7064d5f5e9faa03eb3b93d0147e90e7e042e83c2d3522acbf28->leave($__internal_59db96a5afa4d7064d5f5e9faa03eb3b93d0147e90e7e042e83c2d3522acbf28_prof);

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

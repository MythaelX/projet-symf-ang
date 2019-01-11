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
        $__internal_e48d1e8f4e2151d0876271cb426548f8022fc3ae3b36681bd3e383d4d72c4f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48d1e8f4e2151d0876271cb426548f8022fc3ae3b36681bd3e383d4d72c4f83->enter($__internal_e48d1e8f4e2151d0876271cb426548f8022fc3ae3b36681bd3e383d4d72c4f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e48d1e8f4e2151d0876271cb426548f8022fc3ae3b36681bd3e383d4d72c4f83->leave($__internal_e48d1e8f4e2151d0876271cb426548f8022fc3ae3b36681bd3e383d4d72c4f83_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dfd94c3b367df0cf76303f82a5ed9ba79b7eb8bc67ba4c7d6d900e6e7d5dc978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd94c3b367df0cf76303f82a5ed9ba79b7eb8bc67ba4c7d6d900e6e7d5dc978->enter($__internal_dfd94c3b367df0cf76303f82a5ed9ba79b7eb8bc67ba4c7d6d900e6e7d5dc978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dfd94c3b367df0cf76303f82a5ed9ba79b7eb8bc67ba4c7d6d900e6e7d5dc978->leave($__internal_dfd94c3b367df0cf76303f82a5ed9ba79b7eb8bc67ba4c7d6d900e6e7d5dc978_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb05e140f2530a37fa26e9dee935b9ed4ad65aa2dbe06d608c0108ff24124655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb05e140f2530a37fa26e9dee935b9ed4ad65aa2dbe06d608c0108ff24124655->enter($__internal_bb05e140f2530a37fa26e9dee935b9ed4ad65aa2dbe06d608c0108ff24124655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb05e140f2530a37fa26e9dee935b9ed4ad65aa2dbe06d608c0108ff24124655->leave($__internal_bb05e140f2530a37fa26e9dee935b9ed4ad65aa2dbe06d608c0108ff24124655_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_720af9d246144d00d697ebe316555682a73cfaf74cd8e449a67324ff726474e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720af9d246144d00d697ebe316555682a73cfaf74cd8e449a67324ff726474e3->enter($__internal_720af9d246144d00d697ebe316555682a73cfaf74cd8e449a67324ff726474e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_720af9d246144d00d697ebe316555682a73cfaf74cd8e449a67324ff726474e3->leave($__internal_720af9d246144d00d697ebe316555682a73cfaf74cd8e449a67324ff726474e3_prof);

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

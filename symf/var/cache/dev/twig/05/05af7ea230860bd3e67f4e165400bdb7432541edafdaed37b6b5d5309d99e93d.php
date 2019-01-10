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
        $__internal_600f7c6d4a8e5c4914626038cd6c415051fda9227b81ee86c3d8ded21bbd926b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600f7c6d4a8e5c4914626038cd6c415051fda9227b81ee86c3d8ded21bbd926b->enter($__internal_600f7c6d4a8e5c4914626038cd6c415051fda9227b81ee86c3d8ded21bbd926b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_600f7c6d4a8e5c4914626038cd6c415051fda9227b81ee86c3d8ded21bbd926b->leave($__internal_600f7c6d4a8e5c4914626038cd6c415051fda9227b81ee86c3d8ded21bbd926b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e2e7110c7e2ff2df62373acac5fcb7b3248fe0609728c1e7a696f4deb5c51616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e7110c7e2ff2df62373acac5fcb7b3248fe0609728c1e7a696f4deb5c51616->enter($__internal_e2e7110c7e2ff2df62373acac5fcb7b3248fe0609728c1e7a696f4deb5c51616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2e7110c7e2ff2df62373acac5fcb7b3248fe0609728c1e7a696f4deb5c51616->leave($__internal_e2e7110c7e2ff2df62373acac5fcb7b3248fe0609728c1e7a696f4deb5c51616_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7527b237a78ac1b954d040d4b1cb6dc4b3475700994ba8e858500b44e111460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7527b237a78ac1b954d040d4b1cb6dc4b3475700994ba8e858500b44e111460->enter($__internal_d7527b237a78ac1b954d040d4b1cb6dc4b3475700994ba8e858500b44e111460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7527b237a78ac1b954d040d4b1cb6dc4b3475700994ba8e858500b44e111460->leave($__internal_d7527b237a78ac1b954d040d4b1cb6dc4b3475700994ba8e858500b44e111460_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa002345f2853e00166d02c1b540fdb66cf001aa616688e61041dabbbd33e895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa002345f2853e00166d02c1b540fdb66cf001aa616688e61041dabbbd33e895->enter($__internal_aa002345f2853e00166d02c1b540fdb66cf001aa616688e61041dabbbd33e895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa002345f2853e00166d02c1b540fdb66cf001aa616688e61041dabbbd33e895->leave($__internal_aa002345f2853e00166d02c1b540fdb66cf001aa616688e61041dabbbd33e895_prof);

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

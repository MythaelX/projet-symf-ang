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
        $__internal_5f781620d5328f09715265ea7e3e5c396e15d0f0f33536b75c1c7b75e3e8b516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f781620d5328f09715265ea7e3e5c396e15d0f0f33536b75c1c7b75e3e8b516->enter($__internal_5f781620d5328f09715265ea7e3e5c396e15d0f0f33536b75c1c7b75e3e8b516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f781620d5328f09715265ea7e3e5c396e15d0f0f33536b75c1c7b75e3e8b516->leave($__internal_5f781620d5328f09715265ea7e3e5c396e15d0f0f33536b75c1c7b75e3e8b516_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93cc553cddea17333e9c8adb30095182c6393ff897477613e962d37bf127017c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cc553cddea17333e9c8adb30095182c6393ff897477613e962d37bf127017c->enter($__internal_93cc553cddea17333e9c8adb30095182c6393ff897477613e962d37bf127017c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_93cc553cddea17333e9c8adb30095182c6393ff897477613e962d37bf127017c->leave($__internal_93cc553cddea17333e9c8adb30095182c6393ff897477613e962d37bf127017c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_049680245bb0607808bd3cd448622d16319fbc83b2949497d974df269a9f1eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049680245bb0607808bd3cd448622d16319fbc83b2949497d974df269a9f1eca->enter($__internal_049680245bb0607808bd3cd448622d16319fbc83b2949497d974df269a9f1eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_049680245bb0607808bd3cd448622d16319fbc83b2949497d974df269a9f1eca->leave($__internal_049680245bb0607808bd3cd448622d16319fbc83b2949497d974df269a9f1eca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5c5410f96a40f53155a7b8c55a4cbf35a8dbd61d245ba85fb38d57369b9e393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c5410f96a40f53155a7b8c55a4cbf35a8dbd61d245ba85fb38d57369b9e393->enter($__internal_c5c5410f96a40f53155a7b8c55a4cbf35a8dbd61d245ba85fb38d57369b9e393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c5c5410f96a40f53155a7b8c55a4cbf35a8dbd61d245ba85fb38d57369b9e393->leave($__internal_c5c5410f96a40f53155a7b8c55a4cbf35a8dbd61d245ba85fb38d57369b9e393_prof);

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

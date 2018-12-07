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
        $__internal_62d6ca391181068c0e49257ab0bf80ac90949736a8cfb143d35622b46c5beafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d6ca391181068c0e49257ab0bf80ac90949736a8cfb143d35622b46c5beafa->enter($__internal_62d6ca391181068c0e49257ab0bf80ac90949736a8cfb143d35622b46c5beafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d6ca391181068c0e49257ab0bf80ac90949736a8cfb143d35622b46c5beafa->leave($__internal_62d6ca391181068c0e49257ab0bf80ac90949736a8cfb143d35622b46c5beafa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78a0d961de8ad65f955b9b46ed4b101533e9574372c316d4b7b89979cee64b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a0d961de8ad65f955b9b46ed4b101533e9574372c316d4b7b89979cee64b17->enter($__internal_78a0d961de8ad65f955b9b46ed4b101533e9574372c316d4b7b89979cee64b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78a0d961de8ad65f955b9b46ed4b101533e9574372c316d4b7b89979cee64b17->leave($__internal_78a0d961de8ad65f955b9b46ed4b101533e9574372c316d4b7b89979cee64b17_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_245364890ee3c14f6407921ec3c5059e6b3b045fa0779b65708e53d62f2df8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245364890ee3c14f6407921ec3c5059e6b3b045fa0779b65708e53d62f2df8e7->enter($__internal_245364890ee3c14f6407921ec3c5059e6b3b045fa0779b65708e53d62f2df8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_245364890ee3c14f6407921ec3c5059e6b3b045fa0779b65708e53d62f2df8e7->leave($__internal_245364890ee3c14f6407921ec3c5059e6b3b045fa0779b65708e53d62f2df8e7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_156a3d1daa72517083718b1e506f6584482093693da83f3198a31312bd809154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156a3d1daa72517083718b1e506f6584482093693da83f3198a31312bd809154->enter($__internal_156a3d1daa72517083718b1e506f6584482093693da83f3198a31312bd809154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_156a3d1daa72517083718b1e506f6584482093693da83f3198a31312bd809154->leave($__internal_156a3d1daa72517083718b1e506f6584482093693da83f3198a31312bd809154_prof);

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

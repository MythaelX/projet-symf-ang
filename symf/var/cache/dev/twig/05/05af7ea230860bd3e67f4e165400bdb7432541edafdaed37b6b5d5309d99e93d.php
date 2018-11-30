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
        $__internal_2eb03f89574613c54a4110a8520dc8ad1bf911209cc06cba86d4d1eb21f2372b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb03f89574613c54a4110a8520dc8ad1bf911209cc06cba86d4d1eb21f2372b->enter($__internal_2eb03f89574613c54a4110a8520dc8ad1bf911209cc06cba86d4d1eb21f2372b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eb03f89574613c54a4110a8520dc8ad1bf911209cc06cba86d4d1eb21f2372b->leave($__internal_2eb03f89574613c54a4110a8520dc8ad1bf911209cc06cba86d4d1eb21f2372b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3969b96951fc5af6703769080fbfad87fd4c41f507035c07a5d33d4b2a00d863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3969b96951fc5af6703769080fbfad87fd4c41f507035c07a5d33d4b2a00d863->enter($__internal_3969b96951fc5af6703769080fbfad87fd4c41f507035c07a5d33d4b2a00d863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3969b96951fc5af6703769080fbfad87fd4c41f507035c07a5d33d4b2a00d863->leave($__internal_3969b96951fc5af6703769080fbfad87fd4c41f507035c07a5d33d4b2a00d863_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47645bd7adccaf945bcf4ac1117a5b305a3ed5c98b348c24868cffbcf8e328e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47645bd7adccaf945bcf4ac1117a5b305a3ed5c98b348c24868cffbcf8e328e1->enter($__internal_47645bd7adccaf945bcf4ac1117a5b305a3ed5c98b348c24868cffbcf8e328e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47645bd7adccaf945bcf4ac1117a5b305a3ed5c98b348c24868cffbcf8e328e1->leave($__internal_47645bd7adccaf945bcf4ac1117a5b305a3ed5c98b348c24868cffbcf8e328e1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad374f00d00c12bc8285bb9d1263f1d9b124e99119a060bcdae5ee0733269f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad374f00d00c12bc8285bb9d1263f1d9b124e99119a060bcdae5ee0733269f7a->enter($__internal_ad374f00d00c12bc8285bb9d1263f1d9b124e99119a060bcdae5ee0733269f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ad374f00d00c12bc8285bb9d1263f1d9b124e99119a060bcdae5ee0733269f7a->leave($__internal_ad374f00d00c12bc8285bb9d1263f1d9b124e99119a060bcdae5ee0733269f7a_prof);

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

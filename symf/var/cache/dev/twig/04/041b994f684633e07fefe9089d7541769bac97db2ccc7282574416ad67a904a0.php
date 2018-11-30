<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6a697f16029e9b8d18117b97ff4526c724c5a1a7046b43560c4cf84504a483e2 extends Twig_Template
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
        $__internal_baeb389f08f5af51b147bb3b329d0381df256e5990846d1e1fcc4bc698088c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baeb389f08f5af51b147bb3b329d0381df256e5990846d1e1fcc4bc698088c51->enter($__internal_baeb389f08f5af51b147bb3b329d0381df256e5990846d1e1fcc4bc698088c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baeb389f08f5af51b147bb3b329d0381df256e5990846d1e1fcc4bc698088c51->leave($__internal_baeb389f08f5af51b147bb3b329d0381df256e5990846d1e1fcc4bc698088c51_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc0062acf2a413c08f31a0d00ac3dd06ea5a74dec84daa91b1a33630cd31b4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0062acf2a413c08f31a0d00ac3dd06ea5a74dec84daa91b1a33630cd31b4b9->enter($__internal_cc0062acf2a413c08f31a0d00ac3dd06ea5a74dec84daa91b1a33630cd31b4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc0062acf2a413c08f31a0d00ac3dd06ea5a74dec84daa91b1a33630cd31b4b9->leave($__internal_cc0062acf2a413c08f31a0d00ac3dd06ea5a74dec84daa91b1a33630cd31b4b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2cf38ca3f52f89d9b27142bd83a244fcf5b31f3aacdc1b2651febaf547e0a1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf38ca3f52f89d9b27142bd83a244fcf5b31f3aacdc1b2651febaf547e0a1c7->enter($__internal_2cf38ca3f52f89d9b27142bd83a244fcf5b31f3aacdc1b2651febaf547e0a1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2cf38ca3f52f89d9b27142bd83a244fcf5b31f3aacdc1b2651febaf547e0a1c7->leave($__internal_2cf38ca3f52f89d9b27142bd83a244fcf5b31f3aacdc1b2651febaf547e0a1c7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a1373fa5bfe45d161554dc0e47554b0f56887a265b31ebd8e457c3ba9f99d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1373fa5bfe45d161554dc0e47554b0f56887a265b31ebd8e457c3ba9f99d9c->enter($__internal_6a1373fa5bfe45d161554dc0e47554b0f56887a265b31ebd8e457c3ba9f99d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a1373fa5bfe45d161554dc0e47554b0f56887a265b31ebd8e457c3ba9f99d9c->leave($__internal_6a1373fa5bfe45d161554dc0e47554b0f56887a265b31ebd8e457c3ba9f99d9c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

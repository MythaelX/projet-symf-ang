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
        $__internal_2164ac883ee56f6458321af6f807a14fd21b0a2fe1a4b3d737bc7438d5fa4024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2164ac883ee56f6458321af6f807a14fd21b0a2fe1a4b3d737bc7438d5fa4024->enter($__internal_2164ac883ee56f6458321af6f807a14fd21b0a2fe1a4b3d737bc7438d5fa4024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2164ac883ee56f6458321af6f807a14fd21b0a2fe1a4b3d737bc7438d5fa4024->leave($__internal_2164ac883ee56f6458321af6f807a14fd21b0a2fe1a4b3d737bc7438d5fa4024_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2bb37ca90f8818f5a9592ab8bbdf73ea1d0062bb3573b4168ed5bb459d595de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb37ca90f8818f5a9592ab8bbdf73ea1d0062bb3573b4168ed5bb459d595de8->enter($__internal_2bb37ca90f8818f5a9592ab8bbdf73ea1d0062bb3573b4168ed5bb459d595de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2bb37ca90f8818f5a9592ab8bbdf73ea1d0062bb3573b4168ed5bb459d595de8->leave($__internal_2bb37ca90f8818f5a9592ab8bbdf73ea1d0062bb3573b4168ed5bb459d595de8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f75ee85796da8364cc169119bb950e4a2acf9da80e01fca0adb2eec85701d9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75ee85796da8364cc169119bb950e4a2acf9da80e01fca0adb2eec85701d9a9->enter($__internal_f75ee85796da8364cc169119bb950e4a2acf9da80e01fca0adb2eec85701d9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f75ee85796da8364cc169119bb950e4a2acf9da80e01fca0adb2eec85701d9a9->leave($__internal_f75ee85796da8364cc169119bb950e4a2acf9da80e01fca0adb2eec85701d9a9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_777f74622a47c4393cc769882239d707e0c5ccbf1d45206b378b35b222771fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777f74622a47c4393cc769882239d707e0c5ccbf1d45206b378b35b222771fa4->enter($__internal_777f74622a47c4393cc769882239d707e0c5ccbf1d45206b378b35b222771fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_777f74622a47c4393cc769882239d707e0c5ccbf1d45206b378b35b222771fa4->leave($__internal_777f74622a47c4393cc769882239d707e0c5ccbf1d45206b378b35b222771fa4_prof);

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

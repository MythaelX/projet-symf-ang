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
        $__internal_52eb16900669441af751c78534a63b008b1edbd47f6cc6a2b8f745159e3dec48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52eb16900669441af751c78534a63b008b1edbd47f6cc6a2b8f745159e3dec48->enter($__internal_52eb16900669441af751c78534a63b008b1edbd47f6cc6a2b8f745159e3dec48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52eb16900669441af751c78534a63b008b1edbd47f6cc6a2b8f745159e3dec48->leave($__internal_52eb16900669441af751c78534a63b008b1edbd47f6cc6a2b8f745159e3dec48_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6e66c37dad0b5287b5820a9b8f2290ed5732a4ffa5a23cad1f42dd2264644bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e66c37dad0b5287b5820a9b8f2290ed5732a4ffa5a23cad1f42dd2264644bb->enter($__internal_a6e66c37dad0b5287b5820a9b8f2290ed5732a4ffa5a23cad1f42dd2264644bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6e66c37dad0b5287b5820a9b8f2290ed5732a4ffa5a23cad1f42dd2264644bb->leave($__internal_a6e66c37dad0b5287b5820a9b8f2290ed5732a4ffa5a23cad1f42dd2264644bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3818e23e9baedadf121de6ee959cbe968dfca4d146f557aae914a1f42abab5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3818e23e9baedadf121de6ee959cbe968dfca4d146f557aae914a1f42abab5e->enter($__internal_d3818e23e9baedadf121de6ee959cbe968dfca4d146f557aae914a1f42abab5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3818e23e9baedadf121de6ee959cbe968dfca4d146f557aae914a1f42abab5e->leave($__internal_d3818e23e9baedadf121de6ee959cbe968dfca4d146f557aae914a1f42abab5e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e13584d7961c750c79c584fad464d4d7be2de4e666c696012beaa4be011ad8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13584d7961c750c79c584fad464d4d7be2de4e666c696012beaa4be011ad8fb->enter($__internal_e13584d7961c750c79c584fad464d4d7be2de4e666c696012beaa4be011ad8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e13584d7961c750c79c584fad464d4d7be2de4e666c696012beaa4be011ad8fb->leave($__internal_e13584d7961c750c79c584fad464d4d7be2de4e666c696012beaa4be011ad8fb_prof);

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

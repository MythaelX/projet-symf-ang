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
        $__internal_313e0cc7f3b7c7e18293469c1260a6eef1f6c85770a0a4c39098cc34cd98abba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313e0cc7f3b7c7e18293469c1260a6eef1f6c85770a0a4c39098cc34cd98abba->enter($__internal_313e0cc7f3b7c7e18293469c1260a6eef1f6c85770a0a4c39098cc34cd98abba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_313e0cc7f3b7c7e18293469c1260a6eef1f6c85770a0a4c39098cc34cd98abba->leave($__internal_313e0cc7f3b7c7e18293469c1260a6eef1f6c85770a0a4c39098cc34cd98abba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c5f9eef9a9760fec28c0181bc747f0772f64cf55c138b4e2495ab3501dc724b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5f9eef9a9760fec28c0181bc747f0772f64cf55c138b4e2495ab3501dc724b->enter($__internal_2c5f9eef9a9760fec28c0181bc747f0772f64cf55c138b4e2495ab3501dc724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c5f9eef9a9760fec28c0181bc747f0772f64cf55c138b4e2495ab3501dc724b->leave($__internal_2c5f9eef9a9760fec28c0181bc747f0772f64cf55c138b4e2495ab3501dc724b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc379e3d741b047e66a6a63bd29eeca43f703e039c0ae6c5e66d1fd6dced8f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc379e3d741b047e66a6a63bd29eeca43f703e039c0ae6c5e66d1fd6dced8f2c->enter($__internal_fc379e3d741b047e66a6a63bd29eeca43f703e039c0ae6c5e66d1fd6dced8f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc379e3d741b047e66a6a63bd29eeca43f703e039c0ae6c5e66d1fd6dced8f2c->leave($__internal_fc379e3d741b047e66a6a63bd29eeca43f703e039c0ae6c5e66d1fd6dced8f2c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8eeab3357f6592f6889307759c573343f7e5d1e02f4acde26133de146ae5020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8eeab3357f6592f6889307759c573343f7e5d1e02f4acde26133de146ae5020->enter($__internal_f8eeab3357f6592f6889307759c573343f7e5d1e02f4acde26133de146ae5020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f8eeab3357f6592f6889307759c573343f7e5d1e02f4acde26133de146ae5020->leave($__internal_f8eeab3357f6592f6889307759c573343f7e5d1e02f4acde26133de146ae5020_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

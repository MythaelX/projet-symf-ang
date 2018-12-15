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
        $__internal_0a9971d34a753305bec8134553731b72bf7bf466b5fe3355f62584606fea6914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9971d34a753305bec8134553731b72bf7bf466b5fe3355f62584606fea6914->enter($__internal_0a9971d34a753305bec8134553731b72bf7bf466b5fe3355f62584606fea6914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a9971d34a753305bec8134553731b72bf7bf466b5fe3355f62584606fea6914->leave($__internal_0a9971d34a753305bec8134553731b72bf7bf466b5fe3355f62584606fea6914_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f67e90879752b2c680c3e48056d183ea38608129357a3d476885f01ffa96d0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67e90879752b2c680c3e48056d183ea38608129357a3d476885f01ffa96d0b5->enter($__internal_f67e90879752b2c680c3e48056d183ea38608129357a3d476885f01ffa96d0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f67e90879752b2c680c3e48056d183ea38608129357a3d476885f01ffa96d0b5->leave($__internal_f67e90879752b2c680c3e48056d183ea38608129357a3d476885f01ffa96d0b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2bab643f325da06d0569ddf619e1eff208aaccffa9739f44ca879f1068e2b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bab643f325da06d0569ddf619e1eff208aaccffa9739f44ca879f1068e2b8a->enter($__internal_e2bab643f325da06d0569ddf619e1eff208aaccffa9739f44ca879f1068e2b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2bab643f325da06d0569ddf619e1eff208aaccffa9739f44ca879f1068e2b8a->leave($__internal_e2bab643f325da06d0569ddf619e1eff208aaccffa9739f44ca879f1068e2b8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7cb934d7064d3bf92f3aae58ba4814abdd9754c574a308da17d91524c9e48b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cb934d7064d3bf92f3aae58ba4814abdd9754c574a308da17d91524c9e48b8->enter($__internal_b7cb934d7064d3bf92f3aae58ba4814abdd9754c574a308da17d91524c9e48b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7cb934d7064d3bf92f3aae58ba4814abdd9754c574a308da17d91524c9e48b8->leave($__internal_b7cb934d7064d3bf92f3aae58ba4814abdd9754c574a308da17d91524c9e48b8_prof);

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

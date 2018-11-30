<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f9bf44e8a0c6ec3eb87ee4cb2b13cad4f304ee7b3b41e5b27812e57f39e46887 extends Twig_Template
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
        $__internal_cd9adf3ff24cc5f55145ba88a0bb1ab7a8ff61de357fdffa542bc6c8563ee35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9adf3ff24cc5f55145ba88a0bb1ab7a8ff61de357fdffa542bc6c8563ee35b->enter($__internal_cd9adf3ff24cc5f55145ba88a0bb1ab7a8ff61de357fdffa542bc6c8563ee35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd9adf3ff24cc5f55145ba88a0bb1ab7a8ff61de357fdffa542bc6c8563ee35b->leave($__internal_cd9adf3ff24cc5f55145ba88a0bb1ab7a8ff61de357fdffa542bc6c8563ee35b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35bb6c7eb4d6a85e37629cf14dfbfd1a388c4b105d81b9ffadd0b4636c5111d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bb6c7eb4d6a85e37629cf14dfbfd1a388c4b105d81b9ffadd0b4636c5111d5->enter($__internal_35bb6c7eb4d6a85e37629cf14dfbfd1a388c4b105d81b9ffadd0b4636c5111d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_35bb6c7eb4d6a85e37629cf14dfbfd1a388c4b105d81b9ffadd0b4636c5111d5->leave($__internal_35bb6c7eb4d6a85e37629cf14dfbfd1a388c4b105d81b9ffadd0b4636c5111d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ade1d55fe86947f142bcf3ac0f4bc18863b39653b9136ce1829faaf4ac49a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ade1d55fe86947f142bcf3ac0f4bc18863b39653b9136ce1829faaf4ac49a36->enter($__internal_1ade1d55fe86947f142bcf3ac0f4bc18863b39653b9136ce1829faaf4ac49a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ade1d55fe86947f142bcf3ac0f4bc18863b39653b9136ce1829faaf4ac49a36->leave($__internal_1ade1d55fe86947f142bcf3ac0f4bc18863b39653b9136ce1829faaf4ac49a36_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42994a8e73463eeaf58449376fadc7465a4303bbdd6cfce4d45ccb5a051ece1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42994a8e73463eeaf58449376fadc7465a4303bbdd6cfce4d45ccb5a051ece1f->enter($__internal_42994a8e73463eeaf58449376fadc7465a4303bbdd6cfce4d45ccb5a051ece1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_42994a8e73463eeaf58449376fadc7465a4303bbdd6cfce4d45ccb5a051ece1f->leave($__internal_42994a8e73463eeaf58449376fadc7465a4303bbdd6cfce4d45ccb5a051ece1f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/clement/cir3/projet vierge/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

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
        $__internal_dea2be04cc3b43d483a4ba871cd43f4b5f24b5b297fb77872dd192a30507af7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea2be04cc3b43d483a4ba871cd43f4b5f24b5b297fb77872dd192a30507af7e->enter($__internal_dea2be04cc3b43d483a4ba871cd43f4b5f24b5b297fb77872dd192a30507af7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea2be04cc3b43d483a4ba871cd43f4b5f24b5b297fb77872dd192a30507af7e->leave($__internal_dea2be04cc3b43d483a4ba871cd43f4b5f24b5b297fb77872dd192a30507af7e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01554adcd250a9305be4e60f88aa1a4e8c39cce747af311c23c96c0b1ed309ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01554adcd250a9305be4e60f88aa1a4e8c39cce747af311c23c96c0b1ed309ee->enter($__internal_01554adcd250a9305be4e60f88aa1a4e8c39cce747af311c23c96c0b1ed309ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_01554adcd250a9305be4e60f88aa1a4e8c39cce747af311c23c96c0b1ed309ee->leave($__internal_01554adcd250a9305be4e60f88aa1a4e8c39cce747af311c23c96c0b1ed309ee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c05c58e4ff0e79fe48bca5cf7e1c75f280a40edc7c41de144802af96431000d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05c58e4ff0e79fe48bca5cf7e1c75f280a40edc7c41de144802af96431000d0->enter($__internal_c05c58e4ff0e79fe48bca5cf7e1c75f280a40edc7c41de144802af96431000d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c05c58e4ff0e79fe48bca5cf7e1c75f280a40edc7c41de144802af96431000d0->leave($__internal_c05c58e4ff0e79fe48bca5cf7e1c75f280a40edc7c41de144802af96431000d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67c37c54c8b2ec4cacb4e5f6b6ce7f68e44a474aaef6152979a4ca74da2db335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c37c54c8b2ec4cacb4e5f6b6ce7f68e44a474aaef6152979a4ca74da2db335->enter($__internal_67c37c54c8b2ec4cacb4e5f6b6ce7f68e44a474aaef6152979a4ca74da2db335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_67c37c54c8b2ec4cacb4e5f6b6ce7f68e44a474aaef6152979a4ca74da2db335->leave($__internal_67c37c54c8b2ec4cacb4e5f6b6ce7f68e44a474aaef6152979a4ca74da2db335_prof);

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

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
        $__internal_42118ec5756cf60b18892178bc14be060a122fefe33b435cece58ed4420dcfd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42118ec5756cf60b18892178bc14be060a122fefe33b435cece58ed4420dcfd6->enter($__internal_42118ec5756cf60b18892178bc14be060a122fefe33b435cece58ed4420dcfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42118ec5756cf60b18892178bc14be060a122fefe33b435cece58ed4420dcfd6->leave($__internal_42118ec5756cf60b18892178bc14be060a122fefe33b435cece58ed4420dcfd6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4cae458b1445c9b0f4df93cc3591eba8b7a5972da3d8a1f150baf58ee4620cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cae458b1445c9b0f4df93cc3591eba8b7a5972da3d8a1f150baf58ee4620cf9->enter($__internal_4cae458b1445c9b0f4df93cc3591eba8b7a5972da3d8a1f150baf58ee4620cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4cae458b1445c9b0f4df93cc3591eba8b7a5972da3d8a1f150baf58ee4620cf9->leave($__internal_4cae458b1445c9b0f4df93cc3591eba8b7a5972da3d8a1f150baf58ee4620cf9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_562ce9feb48ece6a95a24d0b41fbfc01b305262afb25767964820ca1aeb27a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562ce9feb48ece6a95a24d0b41fbfc01b305262afb25767964820ca1aeb27a52->enter($__internal_562ce9feb48ece6a95a24d0b41fbfc01b305262afb25767964820ca1aeb27a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_562ce9feb48ece6a95a24d0b41fbfc01b305262afb25767964820ca1aeb27a52->leave($__internal_562ce9feb48ece6a95a24d0b41fbfc01b305262afb25767964820ca1aeb27a52_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_997f27a13025423e11b2bf93beb4c838b0a457ee99a8e240381fce79821a0acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997f27a13025423e11b2bf93beb4c838b0a457ee99a8e240381fce79821a0acd->enter($__internal_997f27a13025423e11b2bf93beb4c838b0a457ee99a8e240381fce79821a0acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_997f27a13025423e11b2bf93beb4c838b0a457ee99a8e240381fce79821a0acd->leave($__internal_997f27a13025423e11b2bf93beb4c838b0a457ee99a8e240381fce79821a0acd_prof);

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

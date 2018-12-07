<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8fc1e4352312bd850b230056cf35200c1db9749fefbc53d3d93ac51a4b0692eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4547c06cc81238b21be6e02d0224e0be04f6d13bbe96daea6ecc32fcdac8826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4547c06cc81238b21be6e02d0224e0be04f6d13bbe96daea6ecc32fcdac8826->enter($__internal_b4547c06cc81238b21be6e02d0224e0be04f6d13bbe96daea6ecc32fcdac8826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b4547c06cc81238b21be6e02d0224e0be04f6d13bbe96daea6ecc32fcdac8826->leave($__internal_b4547c06cc81238b21be6e02d0224e0be04f6d13bbe96daea6ecc32fcdac8826_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b6469d11f492f2cb74af5098d0d141ac319fe7df8ba01a2d5ef3d42f534aec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6469d11f492f2cb74af5098d0d141ac319fe7df8ba01a2d5ef3d42f534aec5->enter($__internal_5b6469d11f492f2cb74af5098d0d141ac319fe7df8ba01a2d5ef3d42f534aec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5b6469d11f492f2cb74af5098d0d141ac319fe7df8ba01a2d5ef3d42f534aec5->leave($__internal_5b6469d11f492f2cb74af5098d0d141ac319fe7df8ba01a2d5ef3d42f534aec5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

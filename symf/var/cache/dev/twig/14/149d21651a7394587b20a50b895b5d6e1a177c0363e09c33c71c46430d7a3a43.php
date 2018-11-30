<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_257f8af107cd3dd8b6250e7cc86ac14b28072a6d96f75e9e1a19c0fe43429989 extends Twig_Template
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
        $__internal_5cb9192794ddb55dd840f41429f030045875080f31b7660d503e6fcacfee49bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb9192794ddb55dd840f41429f030045875080f31b7660d503e6fcacfee49bc->enter($__internal_5cb9192794ddb55dd840f41429f030045875080f31b7660d503e6fcacfee49bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5cb9192794ddb55dd840f41429f030045875080f31b7660d503e6fcacfee49bc->leave($__internal_5cb9192794ddb55dd840f41429f030045875080f31b7660d503e6fcacfee49bc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b5a2c7fe0405069171b4e8f7b48a24c6b5d85f3776711b1457b2dc72a61bb12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5a2c7fe0405069171b4e8f7b48a24c6b5d85f3776711b1457b2dc72a61bb12->enter($__internal_4b5a2c7fe0405069171b4e8f7b48a24c6b5d85f3776711b1457b2dc72a61bb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b5a2c7fe0405069171b4e8f7b48a24c6b5d85f3776711b1457b2dc72a61bb12->leave($__internal_4b5a2c7fe0405069171b4e8f7b48a24c6b5d85f3776711b1457b2dc72a61bb12_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

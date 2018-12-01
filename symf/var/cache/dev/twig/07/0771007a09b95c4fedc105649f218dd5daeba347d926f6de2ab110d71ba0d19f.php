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
        $__internal_0c5d3e8d6e6cd397c2174c1bc0676045467a4a4a511ff30db6de304b1429294b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5d3e8d6e6cd397c2174c1bc0676045467a4a4a511ff30db6de304b1429294b->enter($__internal_0c5d3e8d6e6cd397c2174c1bc0676045467a4a4a511ff30db6de304b1429294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0c5d3e8d6e6cd397c2174c1bc0676045467a4a4a511ff30db6de304b1429294b->leave($__internal_0c5d3e8d6e6cd397c2174c1bc0676045467a4a4a511ff30db6de304b1429294b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7a0ccedba0a57bf94fa4727ab9a3861a9b7bf4e20963a545f115bd44611ee41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a0ccedba0a57bf94fa4727ab9a3861a9b7bf4e20963a545f115bd44611ee41->enter($__internal_a7a0ccedba0a57bf94fa4727ab9a3861a9b7bf4e20963a545f115bd44611ee41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a7a0ccedba0a57bf94fa4727ab9a3861a9b7bf4e20963a545f115bd44611ee41->leave($__internal_a7a0ccedba0a57bf94fa4727ab9a3861a9b7bf4e20963a545f115bd44611ee41_prof);

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

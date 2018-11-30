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
        $__internal_f384ecd75d79147e8a8ffe518ae5d7554c4c5a7a9c47671fa2f850751c817f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f384ecd75d79147e8a8ffe518ae5d7554c4c5a7a9c47671fa2f850751c817f29->enter($__internal_f384ecd75d79147e8a8ffe518ae5d7554c4c5a7a9c47671fa2f850751c817f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f384ecd75d79147e8a8ffe518ae5d7554c4c5a7a9c47671fa2f850751c817f29->leave($__internal_f384ecd75d79147e8a8ffe518ae5d7554c4c5a7a9c47671fa2f850751c817f29_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2c789ce82292449c7125a976d370f1b6bd62062700ddf5c68bcd1941d3de7e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c789ce82292449c7125a976d370f1b6bd62062700ddf5c68bcd1941d3de7e3->enter($__internal_d2c789ce82292449c7125a976d370f1b6bd62062700ddf5c68bcd1941d3de7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d2c789ce82292449c7125a976d370f1b6bd62062700ddf5c68bcd1941d3de7e3->leave($__internal_d2c789ce82292449c7125a976d370f1b6bd62062700ddf5c68bcd1941d3de7e3_prof);

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

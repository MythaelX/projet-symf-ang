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
        $__internal_76943c81127649e35f84d1af2cdb739556a6e117f2f90e437dc02420edba45fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76943c81127649e35f84d1af2cdb739556a6e117f2f90e437dc02420edba45fd->enter($__internal_76943c81127649e35f84d1af2cdb739556a6e117f2f90e437dc02420edba45fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_76943c81127649e35f84d1af2cdb739556a6e117f2f90e437dc02420edba45fd->leave($__internal_76943c81127649e35f84d1af2cdb739556a6e117f2f90e437dc02420edba45fd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_221c6516d124731faaa60165273c624abc9a7d862d06a3846f463365e1d4fe58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221c6516d124731faaa60165273c624abc9a7d862d06a3846f463365e1d4fe58->enter($__internal_221c6516d124731faaa60165273c624abc9a7d862d06a3846f463365e1d4fe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_221c6516d124731faaa60165273c624abc9a7d862d06a3846f463365e1d4fe58->leave($__internal_221c6516d124731faaa60165273c624abc9a7d862d06a3846f463365e1d4fe58_prof);

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

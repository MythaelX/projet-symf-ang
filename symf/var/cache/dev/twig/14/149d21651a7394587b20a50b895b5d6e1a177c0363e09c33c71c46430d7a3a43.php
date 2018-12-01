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
        $__internal_7bb3b9b64cdca9225bd1244be19d020fa115b75ea9d8ff8ba0733842d98473b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb3b9b64cdca9225bd1244be19d020fa115b75ea9d8ff8ba0733842d98473b5->enter($__internal_7bb3b9b64cdca9225bd1244be19d020fa115b75ea9d8ff8ba0733842d98473b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7bb3b9b64cdca9225bd1244be19d020fa115b75ea9d8ff8ba0733842d98473b5->leave($__internal_7bb3b9b64cdca9225bd1244be19d020fa115b75ea9d8ff8ba0733842d98473b5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d9aa514b5c75cac6e772ba6e4c56aae0a4cc6ae7a4f0b3d487c2b47c911c8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9aa514b5c75cac6e772ba6e4c56aae0a4cc6ae7a4f0b3d487c2b47c911c8b2->enter($__internal_2d9aa514b5c75cac6e772ba6e4c56aae0a4cc6ae7a4f0b3d487c2b47c911c8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2d9aa514b5c75cac6e772ba6e4c56aae0a4cc6ae7a4f0b3d487c2b47c911c8b2->leave($__internal_2d9aa514b5c75cac6e772ba6e4c56aae0a4cc6ae7a4f0b3d487c2b47c911c8b2_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

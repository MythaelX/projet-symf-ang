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
        $__internal_5e65c9fc092fe99b500ec42c887293d657e087a2797d82df1b56184ebd17da1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e65c9fc092fe99b500ec42c887293d657e087a2797d82df1b56184ebd17da1c->enter($__internal_5e65c9fc092fe99b500ec42c887293d657e087a2797d82df1b56184ebd17da1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5e65c9fc092fe99b500ec42c887293d657e087a2797d82df1b56184ebd17da1c->leave($__internal_5e65c9fc092fe99b500ec42c887293d657e087a2797d82df1b56184ebd17da1c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f4da351cac97d8f1a9b49c03a173343d0c63aefabae83701e9669f109820c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4da351cac97d8f1a9b49c03a173343d0c63aefabae83701e9669f109820c42->enter($__internal_4f4da351cac97d8f1a9b49c03a173343d0c63aefabae83701e9669f109820c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4f4da351cac97d8f1a9b49c03a173343d0c63aefabae83701e9669f109820c42->leave($__internal_4f4da351cac97d8f1a9b49c03a173343d0c63aefabae83701e9669f109820c42_prof);

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

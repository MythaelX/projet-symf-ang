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
        $__internal_ae088068a8daec8eae2b0fac3784ea10d9faa7a8607b477c8107aa43493e2c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae088068a8daec8eae2b0fac3784ea10d9faa7a8607b477c8107aa43493e2c44->enter($__internal_ae088068a8daec8eae2b0fac3784ea10d9faa7a8607b477c8107aa43493e2c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ae088068a8daec8eae2b0fac3784ea10d9faa7a8607b477c8107aa43493e2c44->leave($__internal_ae088068a8daec8eae2b0fac3784ea10d9faa7a8607b477c8107aa43493e2c44_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_59eb199262390147305bcbf91bcf2794ab42935e6d6b9657fedfdf8370e35f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59eb199262390147305bcbf91bcf2794ab42935e6d6b9657fedfdf8370e35f6e->enter($__internal_59eb199262390147305bcbf91bcf2794ab42935e6d6b9657fedfdf8370e35f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_59eb199262390147305bcbf91bcf2794ab42935e6d6b9657fedfdf8370e35f6e->leave($__internal_59eb199262390147305bcbf91bcf2794ab42935e6d6b9657fedfdf8370e35f6e_prof);

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

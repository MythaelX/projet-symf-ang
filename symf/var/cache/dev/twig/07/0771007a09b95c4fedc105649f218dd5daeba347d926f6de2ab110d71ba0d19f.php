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
        $__internal_3cc10496858ffbb7c65fc228d31f3b51489d277a5c766c5c565b5fe3e91a1d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc10496858ffbb7c65fc228d31f3b51489d277a5c766c5c565b5fe3e91a1d55->enter($__internal_3cc10496858ffbb7c65fc228d31f3b51489d277a5c766c5c565b5fe3e91a1d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3cc10496858ffbb7c65fc228d31f3b51489d277a5c766c5c565b5fe3e91a1d55->leave($__internal_3cc10496858ffbb7c65fc228d31f3b51489d277a5c766c5c565b5fe3e91a1d55_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1434b87c0ca79fcb97f81120201dbbeb9052dd2df8657a9846b60c6d4233b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1434b87c0ca79fcb97f81120201dbbeb9052dd2df8657a9846b60c6d4233b07->enter($__internal_f1434b87c0ca79fcb97f81120201dbbeb9052dd2df8657a9846b60c6d4233b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f1434b87c0ca79fcb97f81120201dbbeb9052dd2df8657a9846b60c6d4233b07->leave($__internal_f1434b87c0ca79fcb97f81120201dbbeb9052dd2df8657a9846b60c6d4233b07_prof);

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

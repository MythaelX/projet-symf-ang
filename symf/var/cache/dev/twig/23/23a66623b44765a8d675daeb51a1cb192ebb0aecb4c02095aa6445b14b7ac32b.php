<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_b55d2b0d981126d89dc66e3b0452507bea0822bd84e29482942768778ec07b8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b9b294ae52d10e1b7d3f9e89bef255425a90b4f75a037883d99b2ae2ac3f5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9b294ae52d10e1b7d3f9e89bef255425a90b4f75a037883d99b2ae2ac3f5e7->enter($__internal_1b9b294ae52d10e1b7d3f9e89bef255425a90b4f75a037883d99b2ae2ac3f5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_1b9b294ae52d10e1b7d3f9e89bef255425a90b4f75a037883d99b2ae2ac3f5e7->leave($__internal_1b9b294ae52d10e1b7d3f9e89bef255425a90b4f75a037883d99b2ae2ac3f5e7_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "FrontOfficeBundle:Default:index.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}

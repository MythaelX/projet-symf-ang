<?php

/* webserviceBundle:Default:index.html.twig */
class __TwigTemplate_db7eccd41ed60f36da3b16cf3f82a99927ea1f64aec71b83235d9e50437ed1c8 extends Twig_Template
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
        $__internal_278aaed274340d841c54c30743e9fa0c712be75768f112e085837fa6e819e088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278aaed274340d841c54c30743e9fa0c712be75768f112e085837fa6e819e088->enter($__internal_278aaed274340d841c54c30743e9fa0c712be75768f112e085837fa6e819e088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webserviceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_278aaed274340d841c54c30743e9fa0c712be75768f112e085837fa6e819e088->leave($__internal_278aaed274340d841c54c30743e9fa0c712be75768f112e085837fa6e819e088_prof);

    }

    public function getTemplateName()
    {
        return "webserviceBundle:Default:index.html.twig";
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
", "webserviceBundle:Default:index.html.twig", "/home/clement/cir3/projet 2.0/symf/src/webserviceBundle/Resources/views/Default/index.html.twig");
    }
}

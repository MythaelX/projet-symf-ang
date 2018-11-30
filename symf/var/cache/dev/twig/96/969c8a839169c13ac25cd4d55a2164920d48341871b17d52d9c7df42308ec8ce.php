<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_ea1cb5116c611b8b849250bbd7f977bddaf95282a29f80106726ae858990f4ba extends Twig_Template
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
        $__internal_d6f3b0b0cbbb2431c4743082f8529c8cbb64fb54c0f94c9ca50fd8bc44b01237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f3b0b0cbbb2431c4743082f8529c8cbb64fb54c0f94c9ca50fd8bc44b01237->enter($__internal_d6f3b0b0cbbb2431c4743082f8529c8cbb64fb54c0f94c9ca50fd8bc44b01237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d6f3b0b0cbbb2431c4743082f8529c8cbb64fb54c0f94c9ca50fd8bc44b01237->leave($__internal_d6f3b0b0cbbb2431c4743082f8529c8cbb64fb54c0f94c9ca50fd8bc44b01237_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
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
", "BackOfficeBundle:Default:index.html.twig", "/home/clement/cir3/projet 2.0/symf/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}

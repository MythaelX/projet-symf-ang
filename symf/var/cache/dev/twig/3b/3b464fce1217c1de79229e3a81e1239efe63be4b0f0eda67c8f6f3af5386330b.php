<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cfccb0801fd73d1713afb113bc558fa5a62e5c0277ec6c9010457a2e53e1484c extends Twig_Template
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
        $__internal_71c77e38a151a6801f37b8a5ec6c0fba8265b6c1e2addbf4f1582b78bc1de384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c77e38a151a6801f37b8a5ec6c0fba8265b6c1e2addbf4f1582b78bc1de384->enter($__internal_71c77e38a151a6801f37b8a5ec6c0fba8265b6c1e2addbf4f1582b78bc1de384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_71c77e38a151a6801f37b8a5ec6c0fba8265b6c1e2addbf4f1582b78bc1de384->leave($__internal_71c77e38a151a6801f37b8a5ec6c0fba8265b6c1e2addbf4f1582b78bc1de384_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

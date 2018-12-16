<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1bcf04f79a07a7b747895dce410c4ed7d20be6d8d701c9c88b0e2ce8b2d7dc02 extends Twig_Template
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
        $__internal_e1fc7a5ed0eb317efa3e1cdcc239da3eb15c2e649bc0b4169600f3a61fa7ef32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fc7a5ed0eb317efa3e1cdcc239da3eb15c2e649bc0b4169600f3a61fa7ef32->enter($__internal_e1fc7a5ed0eb317efa3e1cdcc239da3eb15c2e649bc0b4169600f3a61fa7ef32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e1fc7a5ed0eb317efa3e1cdcc239da3eb15c2e649bc0b4169600f3a61fa7ef32->leave($__internal_e1fc7a5ed0eb317efa3e1cdcc239da3eb15c2e649bc0b4169600f3a61fa7ef32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

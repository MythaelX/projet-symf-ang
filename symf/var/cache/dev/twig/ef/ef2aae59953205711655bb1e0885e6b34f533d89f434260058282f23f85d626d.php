<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c6c1d897c92b33f0b627d4974806941c19a8adc6ac12c9fb2ee126d0415f63d4 extends Twig_Template
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
        $__internal_cbd34f368cc7cf8f66f2950aea5874d5e549c23c6fe0efa0671289d14ec33106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd34f368cc7cf8f66f2950aea5874d5e549c23c6fe0efa0671289d14ec33106->enter($__internal_cbd34f368cc7cf8f66f2950aea5874d5e549c23c6fe0efa0671289d14ec33106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cbd34f368cc7cf8f66f2950aea5874d5e549c23c6fe0efa0671289d14ec33106->leave($__internal_cbd34f368cc7cf8f66f2950aea5874d5e549c23c6fe0efa0671289d14ec33106_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

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
        $__internal_e4f5005680bf9a6b04c045ef03d0d765a8d3bada5c27e10391e7fd0db8370367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f5005680bf9a6b04c045ef03d0d765a8d3bada5c27e10391e7fd0db8370367->enter($__internal_e4f5005680bf9a6b04c045ef03d0d765a8d3bada5c27e10391e7fd0db8370367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e4f5005680bf9a6b04c045ef03d0d765a8d3bada5c27e10391e7fd0db8370367->leave($__internal_e4f5005680bf9a6b04c045ef03d0d765a8d3bada5c27e10391e7fd0db8370367_prof);

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
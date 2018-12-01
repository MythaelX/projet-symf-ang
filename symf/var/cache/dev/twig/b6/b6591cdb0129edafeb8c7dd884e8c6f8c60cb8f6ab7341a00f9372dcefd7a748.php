<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fa3da2ac6ddc0b103b1317bd6ce393bbef536390c4131503339cfd40dea08b9f extends Twig_Template
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
        $__internal_eb0ac00109a9ccfe444407d8db4c2afafb9c860e9944cba18bb8628162a9c72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0ac00109a9ccfe444407d8db4c2afafb9c860e9944cba18bb8628162a9c72c->enter($__internal_eb0ac00109a9ccfe444407d8db4c2afafb9c860e9944cba18bb8628162a9c72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_eb0ac00109a9ccfe444407d8db4c2afafb9c860e9944cba18bb8628162a9c72c->leave($__internal_eb0ac00109a9ccfe444407d8db4c2afafb9c860e9944cba18bb8628162a9c72c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

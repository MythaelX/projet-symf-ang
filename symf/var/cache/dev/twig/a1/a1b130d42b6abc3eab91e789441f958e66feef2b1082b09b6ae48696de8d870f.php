<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e015407930b448ce8e9af53b594b454e3f6bbe4ec5906f6ccbc7b88cf15750c0 extends Twig_Template
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
        $__internal_97a57940c511ea6b6d32966b774d46b461a69327d46fbb4706760331bcbce7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a57940c511ea6b6d32966b774d46b461a69327d46fbb4706760331bcbce7ba->enter($__internal_97a57940c511ea6b6d32966b774d46b461a69327d46fbb4706760331bcbce7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_97a57940c511ea6b6d32966b774d46b461a69327d46fbb4706760331bcbce7ba->leave($__internal_97a57940c511ea6b6d32966b774d46b461a69327d46fbb4706760331bcbce7ba_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

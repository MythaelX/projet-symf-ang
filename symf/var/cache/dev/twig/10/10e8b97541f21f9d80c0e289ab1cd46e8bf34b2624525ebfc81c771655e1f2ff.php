<?php

/* webserviceBundle:Default:index.html.twig */
class __TwigTemplate_7b7a93029a554508068871e31044b0704721b2b5c3bac2dc1fa242eb3580ec41 extends Twig_Template
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
        $__internal_018f7ef8b0bf1833237d74b8f59ef4852f3cdab3c44a0ac337e6023d781309de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018f7ef8b0bf1833237d74b8f59ef4852f3cdab3c44a0ac337e6023d781309de->enter($__internal_018f7ef8b0bf1833237d74b8f59ef4852f3cdab3c44a0ac337e6023d781309de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webserviceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_018f7ef8b0bf1833237d74b8f59ef4852f3cdab3c44a0ac337e6023d781309de->leave($__internal_018f7ef8b0bf1833237d74b8f59ef4852f3cdab3c44a0ac337e6023d781309de_prof);

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
", "webserviceBundle:Default:index.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/src/webserviceBundle/Resources/views/Default/index.html.twig");
    }
}

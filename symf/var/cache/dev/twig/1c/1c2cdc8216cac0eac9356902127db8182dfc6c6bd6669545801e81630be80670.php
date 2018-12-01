<?php

/* webserviceBundle:Default:index.html.twig */
class __TwigTemplate_ae7f3d4f2184fa4d4cb3e260a664bf11c5a2d91f0a65c228891f34c2bbdcad74 extends Twig_Template
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
        $__internal_f03f7ec230199da074ec9c666369df21096ab5413d8960d4d53ec1bfa5c58fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03f7ec230199da074ec9c666369df21096ab5413d8960d4d53ec1bfa5c58fb1->enter($__internal_f03f7ec230199da074ec9c666369df21096ab5413d8960d4d53ec1bfa5c58fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webserviceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_f03f7ec230199da074ec9c666369df21096ab5413d8960d4d53ec1bfa5c58fb1->leave($__internal_f03f7ec230199da074ec9c666369df21096ab5413d8960d4d53ec1bfa5c58fb1_prof);

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

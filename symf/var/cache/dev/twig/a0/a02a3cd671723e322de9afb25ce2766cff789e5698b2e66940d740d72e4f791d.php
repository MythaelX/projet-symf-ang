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
        $__internal_49714c6b1466a7f3d715be84147a8daa21df7c2c934be7c5a18040c1005cef65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49714c6b1466a7f3d715be84147a8daa21df7c2c934be7c5a18040c1005cef65->enter($__internal_49714c6b1466a7f3d715be84147a8daa21df7c2c934be7c5a18040c1005cef65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webserviceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_49714c6b1466a7f3d715be84147a8daa21df7c2c934be7c5a18040c1005cef65->leave($__internal_49714c6b1466a7f3d715be84147a8daa21df7c2c934be7c5a18040c1005cef65_prof);

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

<?php

/* webserviceBundle:Default:index.html.twig */
class __TwigTemplate_5a6ac12374da2abdc389f4f3ebb6b37a1e1ae17bdf16285574b49cb76100fa2c extends Twig_Template
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
        $__internal_3f5309cfd80a7a903379d70eee906e695c4a4af0c458408ac7d83856c49d1f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5309cfd80a7a903379d70eee906e695c4a4af0c458408ac7d83856c49d1f3f->enter($__internal_3f5309cfd80a7a903379d70eee906e695c4a4af0c458408ac7d83856c49d1f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webserviceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3f5309cfd80a7a903379d70eee906e695c4a4af0c458408ac7d83856c49d1f3f->leave($__internal_3f5309cfd80a7a903379d70eee906e695c4a4af0c458408ac7d83856c49d1f3f_prof);

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

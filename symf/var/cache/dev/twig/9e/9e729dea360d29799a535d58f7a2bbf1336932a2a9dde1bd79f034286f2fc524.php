<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_187fb4c9680875f2c5e6659b6f863716c0eff833b3334b0819b76f1b0ec66c68 extends Twig_Template
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
        $__internal_f054b36f62d87cab0539b9a91b32532bb0264581a4ce23d3d105afc8f80e347e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f054b36f62d87cab0539b9a91b32532bb0264581a4ce23d3d105afc8f80e347e->enter($__internal_f054b36f62d87cab0539b9a91b32532bb0264581a4ce23d3d105afc8f80e347e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f054b36f62d87cab0539b9a91b32532bb0264581a4ce23d3d105afc8f80e347e->leave($__internal_f054b36f62d87cab0539b9a91b32532bb0264581a4ce23d3d105afc8f80e347e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

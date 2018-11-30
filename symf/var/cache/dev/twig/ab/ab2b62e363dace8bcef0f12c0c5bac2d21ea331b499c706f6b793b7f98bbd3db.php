<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_64180bc5d592cec1aee10e0424950d82cbd57a14a4bdca8402996a233b7bbc00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53ba0484d4c4e38170c71c685a1bad04d31cd686b165dad375679890920c1d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ba0484d4c4e38170c71c685a1bad04d31cd686b165dad375679890920c1d52->enter($__internal_53ba0484d4c4e38170c71c685a1bad04d31cd686b165dad375679890920c1d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ba0484d4c4e38170c71c685a1bad04d31cd686b165dad375679890920c1d52->leave($__internal_53ba0484d4c4e38170c71c685a1bad04d31cd686b165dad375679890920c1d52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5e7b306bbe3a14749e7677e60716c08d1daf230d434d11b77d646bf1aa793d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e7b306bbe3a14749e7677e60716c08d1daf230d434d11b77d646bf1aa793d9->enter($__internal_c5e7b306bbe3a14749e7677e60716c08d1daf230d434d11b77d646bf1aa793d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c5e7b306bbe3a14749e7677e60716c08d1daf230d434d11b77d646bf1aa793d9->leave($__internal_c5e7b306bbe3a14749e7677e60716c08d1daf230d434d11b77d646bf1aa793d9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e64c8703660e3687acf34391e25c95886d41838de0b6bb65a591cdb8e7a8482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e64c8703660e3687acf34391e25c95886d41838de0b6bb65a591cdb8e7a8482->enter($__internal_9e64c8703660e3687acf34391e25c95886d41838de0b6bb65a591cdb8e7a8482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e64c8703660e3687acf34391e25c95886d41838de0b6bb65a591cdb8e7a8482->leave($__internal_9e64c8703660e3687acf34391e25c95886d41838de0b6bb65a591cdb8e7a8482_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f7d149dc876253d228a3d786ebb6a4ea74e68bfc4b551856faf1c746007e1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7d149dc876253d228a3d786ebb6a4ea74e68bfc4b551856faf1c746007e1f4->enter($__internal_0f7d149dc876253d228a3d786ebb6a4ea74e68bfc4b551856faf1c746007e1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0f7d149dc876253d228a3d786ebb6a4ea74e68bfc4b551856faf1c746007e1f4->leave($__internal_0f7d149dc876253d228a3d786ebb6a4ea74e68bfc4b551856faf1c746007e1f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

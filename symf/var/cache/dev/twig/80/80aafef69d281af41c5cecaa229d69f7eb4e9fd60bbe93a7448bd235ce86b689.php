<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_66ba52351e2fef3eb59a79d7329e5e4e3899c555378d35355092ac7e16409afb extends Twig_Template
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
        $__internal_9f806fcbcfb1e8756b99e8fb9b4ea1bd26db31aad6a7d4e1aa87e6fea947d7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f806fcbcfb1e8756b99e8fb9b4ea1bd26db31aad6a7d4e1aa87e6fea947d7be->enter($__internal_9f806fcbcfb1e8756b99e8fb9b4ea1bd26db31aad6a7d4e1aa87e6fea947d7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f806fcbcfb1e8756b99e8fb9b4ea1bd26db31aad6a7d4e1aa87e6fea947d7be->leave($__internal_9f806fcbcfb1e8756b99e8fb9b4ea1bd26db31aad6a7d4e1aa87e6fea947d7be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f92666b60b6d3d76d12c3f2b42fde5d62965074cb7b6eae4a86048c50c184e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92666b60b6d3d76d12c3f2b42fde5d62965074cb7b6eae4a86048c50c184e41->enter($__internal_f92666b60b6d3d76d12c3f2b42fde5d62965074cb7b6eae4a86048c50c184e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f92666b60b6d3d76d12c3f2b42fde5d62965074cb7b6eae4a86048c50c184e41->leave($__internal_f92666b60b6d3d76d12c3f2b42fde5d62965074cb7b6eae4a86048c50c184e41_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9259b0b7ea9083495fd907d36f60bf4893e094d6890f55dc302bc2bd31314aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9259b0b7ea9083495fd907d36f60bf4893e094d6890f55dc302bc2bd31314aa2->enter($__internal_9259b0b7ea9083495fd907d36f60bf4893e094d6890f55dc302bc2bd31314aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9259b0b7ea9083495fd907d36f60bf4893e094d6890f55dc302bc2bd31314aa2->leave($__internal_9259b0b7ea9083495fd907d36f60bf4893e094d6890f55dc302bc2bd31314aa2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ed9f050a049788110fabe1b711e6a26075c04225376f46fdb5ef6fa78f165d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed9f050a049788110fabe1b711e6a26075c04225376f46fdb5ef6fa78f165d0->enter($__internal_0ed9f050a049788110fabe1b711e6a26075c04225376f46fdb5ef6fa78f165d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0ed9f050a049788110fabe1b711e6a26075c04225376f46fdb5ef6fa78f165d0->leave($__internal_0ed9f050a049788110fabe1b711e6a26075c04225376f46fdb5ef6fa78f165d0_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

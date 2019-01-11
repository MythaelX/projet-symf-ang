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
        $__internal_3da203a5133dfb1e648889aee3abba97f67ec22907fa0c1745ecabc01ed4b7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da203a5133dfb1e648889aee3abba97f67ec22907fa0c1745ecabc01ed4b7b6->enter($__internal_3da203a5133dfb1e648889aee3abba97f67ec22907fa0c1745ecabc01ed4b7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3da203a5133dfb1e648889aee3abba97f67ec22907fa0c1745ecabc01ed4b7b6->leave($__internal_3da203a5133dfb1e648889aee3abba97f67ec22907fa0c1745ecabc01ed4b7b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28d583f8b460eb8b9ffaea0c2bac94099c28d287456191dc86dd7a625bdf50f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d583f8b460eb8b9ffaea0c2bac94099c28d287456191dc86dd7a625bdf50f7->enter($__internal_28d583f8b460eb8b9ffaea0c2bac94099c28d287456191dc86dd7a625bdf50f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_28d583f8b460eb8b9ffaea0c2bac94099c28d287456191dc86dd7a625bdf50f7->leave($__internal_28d583f8b460eb8b9ffaea0c2bac94099c28d287456191dc86dd7a625bdf50f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3ff8e01a52cff7bb82daa30e7adc6a3bc89d4a552302ddb76e915515e8d1587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ff8e01a52cff7bb82daa30e7adc6a3bc89d4a552302ddb76e915515e8d1587->enter($__internal_b3ff8e01a52cff7bb82daa30e7adc6a3bc89d4a552302ddb76e915515e8d1587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b3ff8e01a52cff7bb82daa30e7adc6a3bc89d4a552302ddb76e915515e8d1587->leave($__internal_b3ff8e01a52cff7bb82daa30e7adc6a3bc89d4a552302ddb76e915515e8d1587_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15bf7e9e96391bef23772c47a2ab4ca8fc3d6039697837a7028b7cb71cec8152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bf7e9e96391bef23772c47a2ab4ca8fc3d6039697837a7028b7cb71cec8152->enter($__internal_15bf7e9e96391bef23772c47a2ab4ca8fc3d6039697837a7028b7cb71cec8152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_15bf7e9e96391bef23772c47a2ab4ca8fc3d6039697837a7028b7cb71cec8152->leave($__internal_15bf7e9e96391bef23772c47a2ab4ca8fc3d6039697837a7028b7cb71cec8152_prof);

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

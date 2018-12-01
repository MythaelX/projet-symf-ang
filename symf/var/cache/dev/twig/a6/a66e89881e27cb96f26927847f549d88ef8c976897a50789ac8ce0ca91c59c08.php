<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_35ef74a1e375bb62017fd42476981858c7e3f455e9f29c82edf0ea270ec84083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_6a32d8f5766df9b026216456504a7527805d2b4151b8675921cf4eebb51681ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a32d8f5766df9b026216456504a7527805d2b4151b8675921cf4eebb51681ef->enter($__internal_6a32d8f5766df9b026216456504a7527805d2b4151b8675921cf4eebb51681ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a32d8f5766df9b026216456504a7527805d2b4151b8675921cf4eebb51681ef->leave($__internal_6a32d8f5766df9b026216456504a7527805d2b4151b8675921cf4eebb51681ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da1fc238bab5f73895360c7d6f432e8314b311ad84d2011a664541830b972495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1fc238bab5f73895360c7d6f432e8314b311ad84d2011a664541830b972495->enter($__internal_da1fc238bab5f73895360c7d6f432e8314b311ad84d2011a664541830b972495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_da1fc238bab5f73895360c7d6f432e8314b311ad84d2011a664541830b972495->leave($__internal_da1fc238bab5f73895360c7d6f432e8314b311ad84d2011a664541830b972495_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b94bb15bc54aa6a3c2821f649031409f041d0bf0178b3dd28e84627e11401da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94bb15bc54aa6a3c2821f649031409f041d0bf0178b3dd28e84627e11401da1->enter($__internal_b94bb15bc54aa6a3c2821f649031409f041d0bf0178b3dd28e84627e11401da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b94bb15bc54aa6a3c2821f649031409f041d0bf0178b3dd28e84627e11401da1->leave($__internal_b94bb15bc54aa6a3c2821f649031409f041d0bf0178b3dd28e84627e11401da1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ffaa698c7e4f8a2b285de2a57517abeb793129efddc0ff55e69690bd09d2720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ffaa698c7e4f8a2b285de2a57517abeb793129efddc0ff55e69690bd09d2720->enter($__internal_5ffaa698c7e4f8a2b285de2a57517abeb793129efddc0ff55e69690bd09d2720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5ffaa698c7e4f8a2b285de2a57517abeb793129efddc0ff55e69690bd09d2720->leave($__internal_5ffaa698c7e4f8a2b285de2a57517abeb793129efddc0ff55e69690bd09d2720_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

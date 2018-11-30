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
        $__internal_b7ff97d9276ce7a2875abc4c6d1ef939b3dd88e23cec42db6ea1af13a161047f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ff97d9276ce7a2875abc4c6d1ef939b3dd88e23cec42db6ea1af13a161047f->enter($__internal_b7ff97d9276ce7a2875abc4c6d1ef939b3dd88e23cec42db6ea1af13a161047f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ff97d9276ce7a2875abc4c6d1ef939b3dd88e23cec42db6ea1af13a161047f->leave($__internal_b7ff97d9276ce7a2875abc4c6d1ef939b3dd88e23cec42db6ea1af13a161047f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e62c46044ceda35db07269bf356108be62dcde6e55e2f05d3f1aa8e3d7b5137f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62c46044ceda35db07269bf356108be62dcde6e55e2f05d3f1aa8e3d7b5137f->enter($__internal_e62c46044ceda35db07269bf356108be62dcde6e55e2f05d3f1aa8e3d7b5137f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e62c46044ceda35db07269bf356108be62dcde6e55e2f05d3f1aa8e3d7b5137f->leave($__internal_e62c46044ceda35db07269bf356108be62dcde6e55e2f05d3f1aa8e3d7b5137f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c106057c62d3e2aa12909e8c93a9f28a06af82c4cd911dfb7a6d575f23a570ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c106057c62d3e2aa12909e8c93a9f28a06af82c4cd911dfb7a6d575f23a570ef->enter($__internal_c106057c62d3e2aa12909e8c93a9f28a06af82c4cd911dfb7a6d575f23a570ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c106057c62d3e2aa12909e8c93a9f28a06af82c4cd911dfb7a6d575f23a570ef->leave($__internal_c106057c62d3e2aa12909e8c93a9f28a06af82c4cd911dfb7a6d575f23a570ef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_18c9ad177075b2ddd54235ecaf11fa506ef69f170b3eebe606df2ccc93f00d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c9ad177075b2ddd54235ecaf11fa506ef69f170b3eebe606df2ccc93f00d69->enter($__internal_18c9ad177075b2ddd54235ecaf11fa506ef69f170b3eebe606df2ccc93f00d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_18c9ad177075b2ddd54235ecaf11fa506ef69f170b3eebe606df2ccc93f00d69->leave($__internal_18c9ad177075b2ddd54235ecaf11fa506ef69f170b3eebe606df2ccc93f00d69_prof);

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

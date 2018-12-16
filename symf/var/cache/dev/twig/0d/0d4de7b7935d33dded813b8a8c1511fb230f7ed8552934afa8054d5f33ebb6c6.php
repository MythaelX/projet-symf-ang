<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6f8cce50c9dd0e6be6ed5659ed08e9e68da3a67340fc805571d452ed48094980 extends Twig_Template
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
        $__internal_46b98e7689a2ec08d0902c944c2301eba0d569e716e7b674fa0160cfa48994e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b98e7689a2ec08d0902c944c2301eba0d569e716e7b674fa0160cfa48994e1->enter($__internal_46b98e7689a2ec08d0902c944c2301eba0d569e716e7b674fa0160cfa48994e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b98e7689a2ec08d0902c944c2301eba0d569e716e7b674fa0160cfa48994e1->leave($__internal_46b98e7689a2ec08d0902c944c2301eba0d569e716e7b674fa0160cfa48994e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d72a973403dbd4edc6b44e4c729c7bea807b94604c0efe49291b2567a16e340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d72a973403dbd4edc6b44e4c729c7bea807b94604c0efe49291b2567a16e340->enter($__internal_1d72a973403dbd4edc6b44e4c729c7bea807b94604c0efe49291b2567a16e340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1d72a973403dbd4edc6b44e4c729c7bea807b94604c0efe49291b2567a16e340->leave($__internal_1d72a973403dbd4edc6b44e4c729c7bea807b94604c0efe49291b2567a16e340_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d7104e6bfd582a78752ec81a13a11f405ddfd219897a476a0d3e9715a3d332e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7104e6bfd582a78752ec81a13a11f405ddfd219897a476a0d3e9715a3d332e->enter($__internal_2d7104e6bfd582a78752ec81a13a11f405ddfd219897a476a0d3e9715a3d332e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2d7104e6bfd582a78752ec81a13a11f405ddfd219897a476a0d3e9715a3d332e->leave($__internal_2d7104e6bfd582a78752ec81a13a11f405ddfd219897a476a0d3e9715a3d332e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3e6523451649220552523e69e5ab0000365ecc236583a85c2bb8f79421fb914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e6523451649220552523e69e5ab0000365ecc236583a85c2bb8f79421fb914->enter($__internal_e3e6523451649220552523e69e5ab0000365ecc236583a85c2bb8f79421fb914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e3e6523451649220552523e69e5ab0000365ecc236583a85c2bb8f79421fb914->leave($__internal_e3e6523451649220552523e69e5ab0000365ecc236583a85c2bb8f79421fb914_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

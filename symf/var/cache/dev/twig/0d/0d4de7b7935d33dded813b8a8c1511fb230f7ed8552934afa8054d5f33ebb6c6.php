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
        $__internal_32b84a627f264ae699c119a6f6b0582bfdad75305de8118cd3c9f178ffc72904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b84a627f264ae699c119a6f6b0582bfdad75305de8118cd3c9f178ffc72904->enter($__internal_32b84a627f264ae699c119a6f6b0582bfdad75305de8118cd3c9f178ffc72904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32b84a627f264ae699c119a6f6b0582bfdad75305de8118cd3c9f178ffc72904->leave($__internal_32b84a627f264ae699c119a6f6b0582bfdad75305de8118cd3c9f178ffc72904_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b319262e98a9d257b7e965a0b017954373379e65f8dfa9852ca3d71c1a7ea7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b319262e98a9d257b7e965a0b017954373379e65f8dfa9852ca3d71c1a7ea7a->enter($__internal_8b319262e98a9d257b7e965a0b017954373379e65f8dfa9852ca3d71c1a7ea7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8b319262e98a9d257b7e965a0b017954373379e65f8dfa9852ca3d71c1a7ea7a->leave($__internal_8b319262e98a9d257b7e965a0b017954373379e65f8dfa9852ca3d71c1a7ea7a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_534c24e37ea31d9bad629a11902f24ddd19df1fc08da45ac02bef26bb6d4fc7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534c24e37ea31d9bad629a11902f24ddd19df1fc08da45ac02bef26bb6d4fc7a->enter($__internal_534c24e37ea31d9bad629a11902f24ddd19df1fc08da45ac02bef26bb6d4fc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_534c24e37ea31d9bad629a11902f24ddd19df1fc08da45ac02bef26bb6d4fc7a->leave($__internal_534c24e37ea31d9bad629a11902f24ddd19df1fc08da45ac02bef26bb6d4fc7a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4543e7ff89b4be5e406cf13a501f06a73eb28db6176c0f12eff410e7b1f2225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4543e7ff89b4be5e406cf13a501f06a73eb28db6176c0f12eff410e7b1f2225->enter($__internal_c4543e7ff89b4be5e406cf13a501f06a73eb28db6176c0f12eff410e7b1f2225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c4543e7ff89b4be5e406cf13a501f06a73eb28db6176c0f12eff410e7b1f2225->leave($__internal_c4543e7ff89b4be5e406cf13a501f06a73eb28db6176c0f12eff410e7b1f2225_prof);

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

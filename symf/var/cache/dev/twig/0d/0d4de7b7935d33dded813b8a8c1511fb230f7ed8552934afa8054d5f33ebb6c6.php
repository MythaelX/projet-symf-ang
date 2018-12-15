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
        $__internal_0e448391ff746e175043bfc40a13731fa4abbfca9233d6641b5dae58cb43966a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e448391ff746e175043bfc40a13731fa4abbfca9233d6641b5dae58cb43966a->enter($__internal_0e448391ff746e175043bfc40a13731fa4abbfca9233d6641b5dae58cb43966a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e448391ff746e175043bfc40a13731fa4abbfca9233d6641b5dae58cb43966a->leave($__internal_0e448391ff746e175043bfc40a13731fa4abbfca9233d6641b5dae58cb43966a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_493d61515f5270d3954627f1bb297a2764d5a9c5f657fe30b5bcaf22c0eff211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493d61515f5270d3954627f1bb297a2764d5a9c5f657fe30b5bcaf22c0eff211->enter($__internal_493d61515f5270d3954627f1bb297a2764d5a9c5f657fe30b5bcaf22c0eff211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_493d61515f5270d3954627f1bb297a2764d5a9c5f657fe30b5bcaf22c0eff211->leave($__internal_493d61515f5270d3954627f1bb297a2764d5a9c5f657fe30b5bcaf22c0eff211_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd71cdec9a011c87874e1176ac178f7c4444adbb39e73ad2755c5be25d01987a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd71cdec9a011c87874e1176ac178f7c4444adbb39e73ad2755c5be25d01987a->enter($__internal_cd71cdec9a011c87874e1176ac178f7c4444adbb39e73ad2755c5be25d01987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cd71cdec9a011c87874e1176ac178f7c4444adbb39e73ad2755c5be25d01987a->leave($__internal_cd71cdec9a011c87874e1176ac178f7c4444adbb39e73ad2755c5be25d01987a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_788f306c9754808e3e667186d938d23054a368f4aa0b907b764f85c34aa8051d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788f306c9754808e3e667186d938d23054a368f4aa0b907b764f85c34aa8051d->enter($__internal_788f306c9754808e3e667186d938d23054a368f4aa0b907b764f85c34aa8051d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_788f306c9754808e3e667186d938d23054a368f4aa0b907b764f85c34aa8051d->leave($__internal_788f306c9754808e3e667186d938d23054a368f4aa0b907b764f85c34aa8051d_prof);

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

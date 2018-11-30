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
        $__internal_59523516ed058af12506fb9d6a9e80fe85cf7ef820424aeab893e28f5c95858d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59523516ed058af12506fb9d6a9e80fe85cf7ef820424aeab893e28f5c95858d->enter($__internal_59523516ed058af12506fb9d6a9e80fe85cf7ef820424aeab893e28f5c95858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59523516ed058af12506fb9d6a9e80fe85cf7ef820424aeab893e28f5c95858d->leave($__internal_59523516ed058af12506fb9d6a9e80fe85cf7ef820424aeab893e28f5c95858d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_603614f3b5a91e42e2f9d183a4a9499fab557d9c064b4c9f9eb6101a6384cbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603614f3b5a91e42e2f9d183a4a9499fab557d9c064b4c9f9eb6101a6384cbce->enter($__internal_603614f3b5a91e42e2f9d183a4a9499fab557d9c064b4c9f9eb6101a6384cbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_603614f3b5a91e42e2f9d183a4a9499fab557d9c064b4c9f9eb6101a6384cbce->leave($__internal_603614f3b5a91e42e2f9d183a4a9499fab557d9c064b4c9f9eb6101a6384cbce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a64c3c90249f38bb887aed784930bf6b6f1acfa26003813d5496637aa925479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a64c3c90249f38bb887aed784930bf6b6f1acfa26003813d5496637aa925479->enter($__internal_0a64c3c90249f38bb887aed784930bf6b6f1acfa26003813d5496637aa925479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0a64c3c90249f38bb887aed784930bf6b6f1acfa26003813d5496637aa925479->leave($__internal_0a64c3c90249f38bb887aed784930bf6b6f1acfa26003813d5496637aa925479_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f20fdb7ab2c9b03945753a3f310656c41848ee6c4473158092519b0a1a5ae76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f20fdb7ab2c9b03945753a3f310656c41848ee6c4473158092519b0a1a5ae76->enter($__internal_3f20fdb7ab2c9b03945753a3f310656c41848ee6c4473158092519b0a1a5ae76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3f20fdb7ab2c9b03945753a3f310656c41848ee6c4473158092519b0a1a5ae76->leave($__internal_3f20fdb7ab2c9b03945753a3f310656c41848ee6c4473158092519b0a1a5ae76_prof);

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

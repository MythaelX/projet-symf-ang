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
        $__internal_c5fdfd7a5c33ee518466d0d1b20b639f040f2a28747476c4f072c9ec7e0de69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fdfd7a5c33ee518466d0d1b20b639f040f2a28747476c4f072c9ec7e0de69b->enter($__internal_c5fdfd7a5c33ee518466d0d1b20b639f040f2a28747476c4f072c9ec7e0de69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5fdfd7a5c33ee518466d0d1b20b639f040f2a28747476c4f072c9ec7e0de69b->leave($__internal_c5fdfd7a5c33ee518466d0d1b20b639f040f2a28747476c4f072c9ec7e0de69b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d20b096278d7be1188f9e1f3e3518a6cc978111520d319a80126d1af25c85e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20b096278d7be1188f9e1f3e3518a6cc978111520d319a80126d1af25c85e7e->enter($__internal_d20b096278d7be1188f9e1f3e3518a6cc978111520d319a80126d1af25c85e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d20b096278d7be1188f9e1f3e3518a6cc978111520d319a80126d1af25c85e7e->leave($__internal_d20b096278d7be1188f9e1f3e3518a6cc978111520d319a80126d1af25c85e7e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d2535ffacd296ef40c8dae87b32bd86d001f8371f71eabaf70c0fbd9d8e5791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2535ffacd296ef40c8dae87b32bd86d001f8371f71eabaf70c0fbd9d8e5791->enter($__internal_1d2535ffacd296ef40c8dae87b32bd86d001f8371f71eabaf70c0fbd9d8e5791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1d2535ffacd296ef40c8dae87b32bd86d001f8371f71eabaf70c0fbd9d8e5791->leave($__internal_1d2535ffacd296ef40c8dae87b32bd86d001f8371f71eabaf70c0fbd9d8e5791_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e708f77c9afab85aa2c396a0b9fd6dcfa19b66688953cb60209f1efc2c6182c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e708f77c9afab85aa2c396a0b9fd6dcfa19b66688953cb60209f1efc2c6182c->enter($__internal_0e708f77c9afab85aa2c396a0b9fd6dcfa19b66688953cb60209f1efc2c6182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0e708f77c9afab85aa2c396a0b9fd6dcfa19b66688953cb60209f1efc2c6182c->leave($__internal_0e708f77c9afab85aa2c396a0b9fd6dcfa19b66688953cb60209f1efc2c6182c_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

<?php

/* ::base.html.twig */
class __TwigTemplate_e2d21215726556d7a2b9206e83e6061cc251f39bee62896aecdbb35410598892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f517d1299cee5e437682a566ec9cbfbc546dd2f5a4f56445bede8be9a6fa410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f517d1299cee5e437682a566ec9cbfbc546dd2f5a4f56445bede8be9a6fa410->enter($__internal_5f517d1299cee5e437682a566ec9cbfbc546dd2f5a4f56445bede8be9a6fa410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5f517d1299cee5e437682a566ec9cbfbc546dd2f5a4f56445bede8be9a6fa410->leave($__internal_5f517d1299cee5e437682a566ec9cbfbc546dd2f5a4f56445bede8be9a6fa410_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3479299c3ec95ee9efaa51215f5b111793c2ef9db4c9665da1ad30b7e5b31ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3479299c3ec95ee9efaa51215f5b111793c2ef9db4c9665da1ad30b7e5b31ca8->enter($__internal_3479299c3ec95ee9efaa51215f5b111793c2ef9db4c9665da1ad30b7e5b31ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3479299c3ec95ee9efaa51215f5b111793c2ef9db4c9665da1ad30b7e5b31ca8->leave($__internal_3479299c3ec95ee9efaa51215f5b111793c2ef9db4c9665da1ad30b7e5b31ca8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7feb237e7059e8b1de0770359cd28fdce0eda163b7a845f6e5f6dce1fcf7c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7feb237e7059e8b1de0770359cd28fdce0eda163b7a845f6e5f6dce1fcf7c8a->enter($__internal_d7feb237e7059e8b1de0770359cd28fdce0eda163b7a845f6e5f6dce1fcf7c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d7feb237e7059e8b1de0770359cd28fdce0eda163b7a845f6e5f6dce1fcf7c8a->leave($__internal_d7feb237e7059e8b1de0770359cd28fdce0eda163b7a845f6e5f6dce1fcf7c8a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f57c934f7408704611c892c798cab618d11e239cd29099211dc045187ea77c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57c934f7408704611c892c798cab618d11e239cd29099211dc045187ea77c23->enter($__internal_f57c934f7408704611c892c798cab618d11e239cd29099211dc045187ea77c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f57c934f7408704611c892c798cab618d11e239cd29099211dc045187ea77c23->leave($__internal_f57c934f7408704611c892c798cab618d11e239cd29099211dc045187ea77c23_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_147d454ad8ec0e64a175c378f694fb6dbf97cdda263ea038efd1d2805b026f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147d454ad8ec0e64a175c378f694fb6dbf97cdda263ea038efd1d2805b026f94->enter($__internal_147d454ad8ec0e64a175c378f694fb6dbf97cdda263ea038efd1d2805b026f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_147d454ad8ec0e64a175c378f694fb6dbf97cdda263ea038efd1d2805b026f94->leave($__internal_147d454ad8ec0e64a175c378f694fb6dbf97cdda263ea038efd1d2805b026f94_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/media/christophe/HDDLNX/www/test-smf/app/Resources/views/base.html.twig");
    }
}

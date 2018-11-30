<?php

/* base.html.twig */
class __TwigTemplate_18c356e9ff8f7fcd865bf1a3017a722e8695db304a0dfb3b527228140be1c33a extends Twig_Template
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
        $__internal_1f78df7a55008f5a609c7d8f0a9ce99a55190e79afda8c9ad3f686e61249bb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f78df7a55008f5a609c7d8f0a9ce99a55190e79afda8c9ad3f686e61249bb87->enter($__internal_1f78df7a55008f5a609c7d8f0a9ce99a55190e79afda8c9ad3f686e61249bb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1f78df7a55008f5a609c7d8f0a9ce99a55190e79afda8c9ad3f686e61249bb87->leave($__internal_1f78df7a55008f5a609c7d8f0a9ce99a55190e79afda8c9ad3f686e61249bb87_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f54a07eea37fef6e9342654098a4c5d32d5ad4254395fbcb16be5e09ff51ad1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54a07eea37fef6e9342654098a4c5d32d5ad4254395fbcb16be5e09ff51ad1e->enter($__internal_f54a07eea37fef6e9342654098a4c5d32d5ad4254395fbcb16be5e09ff51ad1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f54a07eea37fef6e9342654098a4c5d32d5ad4254395fbcb16be5e09ff51ad1e->leave($__internal_f54a07eea37fef6e9342654098a4c5d32d5ad4254395fbcb16be5e09ff51ad1e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8cd8ac3273d2a70f965e4ce21bf9f76689c4a335fff90dce21fe2771a61ee509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd8ac3273d2a70f965e4ce21bf9f76689c4a335fff90dce21fe2771a61ee509->enter($__internal_8cd8ac3273d2a70f965e4ce21bf9f76689c4a335fff90dce21fe2771a61ee509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8cd8ac3273d2a70f965e4ce21bf9f76689c4a335fff90dce21fe2771a61ee509->leave($__internal_8cd8ac3273d2a70f965e4ce21bf9f76689c4a335fff90dce21fe2771a61ee509_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cb7bcc206db861c13dc534672589ed795f8e621eaef189095f98284fe8c3ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb7bcc206db861c13dc534672589ed795f8e621eaef189095f98284fe8c3ed9->enter($__internal_5cb7bcc206db861c13dc534672589ed795f8e621eaef189095f98284fe8c3ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "ok";
        
        $__internal_5cb7bcc206db861c13dc534672589ed795f8e621eaef189095f98284fe8c3ed9->leave($__internal_5cb7bcc206db861c13dc534672589ed795f8e621eaef189095f98284fe8c3ed9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06c31dcda44f3a1ea2aaf820554c9d86526e0bb2f7677b97261209ae1865d3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c31dcda44f3a1ea2aaf820554c9d86526e0bb2f7677b97261209ae1865d3b7->enter($__internal_06c31dcda44f3a1ea2aaf820554c9d86526e0bb2f7677b97261209ae1865d3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06c31dcda44f3a1ea2aaf820554c9d86526e0bb2f7677b97261209ae1865d3b7->leave($__internal_06c31dcda44f3a1ea2aaf820554c9d86526e0bb2f7677b97261209ae1865d3b7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        {% block body %}ok{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/base.html.twig");
    }
}

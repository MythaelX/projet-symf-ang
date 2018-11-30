<?php

/* base.html.twig */
class __TwigTemplate_a45c0b932d193f50adfac11586be1f072fbe33013e51d88eb06496ba12ba49e6 extends Twig_Template
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
        $__internal_1a64989d2513060847194c01586049730c42bb6dec4d9056dd3dc583ff01ddd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a64989d2513060847194c01586049730c42bb6dec4d9056dd3dc583ff01ddd0->enter($__internal_1a64989d2513060847194c01586049730c42bb6dec4d9056dd3dc583ff01ddd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1a64989d2513060847194c01586049730c42bb6dec4d9056dd3dc583ff01ddd0->leave($__internal_1a64989d2513060847194c01586049730c42bb6dec4d9056dd3dc583ff01ddd0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3154951db5aeb2ef0fa18d6384f74020e785f5c8caceb2b3cfa1dfdc8b76aabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3154951db5aeb2ef0fa18d6384f74020e785f5c8caceb2b3cfa1dfdc8b76aabb->enter($__internal_3154951db5aeb2ef0fa18d6384f74020e785f5c8caceb2b3cfa1dfdc8b76aabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3154951db5aeb2ef0fa18d6384f74020e785f5c8caceb2b3cfa1dfdc8b76aabb->leave($__internal_3154951db5aeb2ef0fa18d6384f74020e785f5c8caceb2b3cfa1dfdc8b76aabb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_130e9443e1cae31035c705b44f6d6a27dc8645de6d8fe2b52d82e52e538e08c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130e9443e1cae31035c705b44f6d6a27dc8645de6d8fe2b52d82e52e538e08c3->enter($__internal_130e9443e1cae31035c705b44f6d6a27dc8645de6d8fe2b52d82e52e538e08c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_130e9443e1cae31035c705b44f6d6a27dc8645de6d8fe2b52d82e52e538e08c3->leave($__internal_130e9443e1cae31035c705b44f6d6a27dc8645de6d8fe2b52d82e52e538e08c3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_99bee991f7f8468391ca28b67f0c364b530d9ba7e034191f066c8f39516b7d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bee991f7f8468391ca28b67f0c364b530d9ba7e034191f066c8f39516b7d13->enter($__internal_99bee991f7f8468391ca28b67f0c364b530d9ba7e034191f066c8f39516b7d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99bee991f7f8468391ca28b67f0c364b530d9ba7e034191f066c8f39516b7d13->leave($__internal_99bee991f7f8468391ca28b67f0c364b530d9ba7e034191f066c8f39516b7d13_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9a90bcd72e95173755f8a6578120108bcb9c5e2e9849e8c9d37d881f47dde09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a90bcd72e95173755f8a6578120108bcb9c5e2e9849e8c9d37d881f47dde09->enter($__internal_f9a90bcd72e95173755f8a6578120108bcb9c5e2e9849e8c9d37d881f47dde09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9a90bcd72e95173755f8a6578120108bcb9c5e2e9849e8c9d37d881f47dde09->leave($__internal_f9a90bcd72e95173755f8a6578120108bcb9c5e2e9849e8c9d37d881f47dde09_prof);

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
", "base.html.twig", "/home/clement/cir3/projet vierge/app/Resources/views/base.html.twig");
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_a98a9f4f95160bcc7ca757bb64bf438aca92b2097cb6a04ab98b46ffb079ad92 extends Twig_Template
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
        $__internal_0a83bf3b5af5ff35e61ec27d896951ac65017929091d4a19af6297c43bd59571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a83bf3b5af5ff35e61ec27d896951ac65017929091d4a19af6297c43bd59571->enter($__internal_0a83bf3b5af5ff35e61ec27d896951ac65017929091d4a19af6297c43bd59571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0a83bf3b5af5ff35e61ec27d896951ac65017929091d4a19af6297c43bd59571->leave($__internal_0a83bf3b5af5ff35e61ec27d896951ac65017929091d4a19af6297c43bd59571_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d07d02dc7ee90a7ed81ce9b092889495647fb05adfca5bb12842ed29a59dad6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07d02dc7ee90a7ed81ce9b092889495647fb05adfca5bb12842ed29a59dad6a->enter($__internal_d07d02dc7ee90a7ed81ce9b092889495647fb05adfca5bb12842ed29a59dad6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d07d02dc7ee90a7ed81ce9b092889495647fb05adfca5bb12842ed29a59dad6a->leave($__internal_d07d02dc7ee90a7ed81ce9b092889495647fb05adfca5bb12842ed29a59dad6a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18f7be55d1ce07d82880aa9c16416337089b3f20125bfdb6def38a5d95ff329a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f7be55d1ce07d82880aa9c16416337089b3f20125bfdb6def38a5d95ff329a->enter($__internal_18f7be55d1ce07d82880aa9c16416337089b3f20125bfdb6def38a5d95ff329a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18f7be55d1ce07d82880aa9c16416337089b3f20125bfdb6def38a5d95ff329a->leave($__internal_18f7be55d1ce07d82880aa9c16416337089b3f20125bfdb6def38a5d95ff329a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3643d65b5c130dac50e8bdbf24875304b3a235856dfb3d8bd0adc6639c89f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3643d65b5c130dac50e8bdbf24875304b3a235856dfb3d8bd0adc6639c89f26->enter($__internal_a3643d65b5c130dac50e8bdbf24875304b3a235856dfb3d8bd0adc6639c89f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "ok";
        
        $__internal_a3643d65b5c130dac50e8bdbf24875304b3a235856dfb3d8bd0adc6639c89f26->leave($__internal_a3643d65b5c130dac50e8bdbf24875304b3a235856dfb3d8bd0adc6639c89f26_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b726588cfcbef2b5a4f344752f14a05d9b58283e86cbdea1f31afdb807c00bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b726588cfcbef2b5a4f344752f14a05d9b58283e86cbdea1f31afdb807c00bd0->enter($__internal_b726588cfcbef2b5a4f344752f14a05d9b58283e86cbdea1f31afdb807c00bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b726588cfcbef2b5a4f344752f14a05d9b58283e86cbdea1f31afdb807c00bd0->leave($__internal_b726588cfcbef2b5a4f344752f14a05d9b58283e86cbdea1f31afdb807c00bd0_prof);

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

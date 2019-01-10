<?php

/* baseBack.html.twig */
class __TwigTemplate_75729e264dae2fb6b97e5a659a2d3ec17ae54ef08a2fcc67d8c94917277fa2f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fde16f46893a80b4c213bd1df2269eb94dd41bf7c8dd25f3f532567e6a72ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fde16f46893a80b4c213bd1df2269eb94dd41bf7c8dd25f3f532567e6a72ce7->enter($__internal_4fde16f46893a80b4c213bd1df2269eb94dd41bf7c8dd25f3f532567e6a72ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        <div id=\"header\">
            ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "        </div>

        <div id=\"content\">
            ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        </div>

        <div id=\"footer\">
            ";
        // line 24
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        echo "        </div>
    </body>
</html>
";
        
        $__internal_4fde16f46893a80b4c213bd1df2269eb94dd41bf7c8dd25f3f532567e6a72ce7->leave($__internal_4fde16f46893a80b4c213bd1df2269eb94dd41bf7c8dd25f3f532567e6a72ce7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdf0889f2d2ca786c2bf22703c4ea53bbde0bd2aac362a0099b1412844385239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf0889f2d2ca786c2bf22703c4ea53bbde0bd2aac362a0099b1412844385239->enter($__internal_cdf0889f2d2ca786c2bf22703c4ea53bbde0bd2aac362a0099b1412844385239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_cdf0889f2d2ca786c2bf22703c4ea53bbde0bd2aac362a0099b1412844385239->leave($__internal_cdf0889f2d2ca786c2bf22703c4ea53bbde0bd2aac362a0099b1412844385239_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0a76860cd0d0c5023519c38ad34fb86d999aa9035d3de8baf1b5e52d12c3b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a76860cd0d0c5023519c38ad34fb86d999aa9035d3de8baf1b5e52d12c3b40->enter($__internal_e0a76860cd0d0c5023519c38ad34fb86d999aa9035d3de8baf1b5e52d12c3b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_e0a76860cd0d0c5023519c38ad34fb86d999aa9035d3de8baf1b5e52d12c3b40->leave($__internal_e0a76860cd0d0c5023519c38ad34fb86d999aa9035d3de8baf1b5e52d12c3b40_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_8e168e1eb388caed3b98eb9a328598f3bc543cab73b8b825fb4ea74e1c6e8aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e168e1eb388caed3b98eb9a328598f3bc543cab73b8b825fb4ea74e1c6e8aef->enter($__internal_8e168e1eb388caed3b98eb9a328598f3bc543cab73b8b825fb4ea74e1c6e8aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_homepage");
        echo "\">Home</a></li>
            </ul>
            ";
        
        $__internal_8e168e1eb388caed3b98eb9a328598f3bc543cab73b8b825fb4ea74e1c6e8aef->leave($__internal_8e168e1eb388caed3b98eb9a328598f3bc543cab73b8b825fb4ea74e1c6e8aef_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_282f73c5f6d23e06d8a86759771f818180d7eaedbbd426c38e38f970b514b209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282f73c5f6d23e06d8a86759771f818180d7eaedbbd426c38e38f970b514b209->enter($__internal_282f73c5f6d23e06d8a86759771f818180d7eaedbbd426c38e38f970b514b209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_282f73c5f6d23e06d8a86759771f818180d7eaedbbd426c38e38f970b514b209->leave($__internal_282f73c5f6d23e06d8a86759771f818180d7eaedbbd426c38e38f970b514b209_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b7aa517bddfac5b3a6944253175f29d58346fb204c909dff93d30a255b747199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7aa517bddfac5b3a6944253175f29d58346fb204c909dff93d30a255b747199->enter($__internal_b7aa517bddfac5b3a6944253175f29d58346fb204c909dff93d30a255b747199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b7aa517bddfac5b3a6944253175f29d58346fb204c909dff93d30a255b747199->leave($__internal_b7aa517bddfac5b3a6944253175f29d58346fb204c909dff93d30a255b747199_prof);

    }

    public function getTemplateName()
    {
        return "baseBack.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  117 => 20,  107 => 14,  104 => 13,  98 => 12,  88 => 7,  82 => 6,  70 => 5,  60 => 25,  58 => 24,  53 => 21,  51 => 20,  46 => 17,  44 => 12,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
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
        <meta charset=\"UTF-8\">
        <title>{% block title %}Projet framework{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
    </head>
    <body>
        <div id=\"header\">
            {% block header %}
            <ul>
                <li><a class=\"active\" href=\"{{ path('back_office_homepage') }}\">Home</a></li>
            </ul>
            {% endblock %}
        </div>

        <div id=\"content\">
            {% block body %}{% endblock %}
        </div>

        <div id=\"footer\">
            {% block footer %}{% endblock %}
        </div>
    </body>
</html>
", "baseBack.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/baseBack.html.twig");
    }
}

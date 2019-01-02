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
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b11eee5ae497b18f93b51503d60dc955f08e2bbd79376516882d6ef68f059f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b11eee5ae497b18f93b51503d60dc955f08e2bbd79376516882d6ef68f059f2->enter($__internal_7b11eee5ae497b18f93b51503d60dc955f08e2bbd79376516882d6ef68f059f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 18
        echo "        </div>

        <div id=\"content\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        </div>

        <div id=\"footer\">
            ";
        // line 25
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "        </div>
    </body>
</html>
";
        
        $__internal_7b11eee5ae497b18f93b51503d60dc955f08e2bbd79376516882d6ef68f059f2->leave($__internal_7b11eee5ae497b18f93b51503d60dc955f08e2bbd79376516882d6ef68f059f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb93d84c237f0ba33d5cd398bd79b41d55761c51fffe08d50861e26993e9c33f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb93d84c237f0ba33d5cd398bd79b41d55761c51fffe08d50861e26993e9c33f->enter($__internal_eb93d84c237f0ba33d5cd398bd79b41d55761c51fffe08d50861e26993e9c33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_eb93d84c237f0ba33d5cd398bd79b41d55761c51fffe08d50861e26993e9c33f->leave($__internal_eb93d84c237f0ba33d5cd398bd79b41d55761c51fffe08d50861e26993e9c33f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e1e3488b67a0d4c8c254046b11f1f2b9fc77bb9f722a7713fb960c745f154fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1e3488b67a0d4c8c254046b11f1f2b9fc77bb9f722a7713fb960c745f154fa->enter($__internal_4e1e3488b67a0d4c8c254046b11f1f2b9fc77bb9f722a7713fb960c745f154fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_4e1e3488b67a0d4c8c254046b11f1f2b9fc77bb9f722a7713fb960c745f154fa->leave($__internal_4e1e3488b67a0d4c8c254046b11f1f2b9fc77bb9f722a7713fb960c745f154fa_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_89bf106eef3f1ecb08f560823cbad8cf21d8c710c941fbd4ae1dc23d7ffa4c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bf106eef3f1ecb08f560823cbad8cf21d8c710c941fbd4ae1dc23d7ffa4c9f->enter($__internal_89bf106eef3f1ecb08f560823cbad8cf21d8c710c941fbd4ae1dc23d7ffa4c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_office_homepage");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
        echo "\">Modifier son profil</a></li>
            </ul>
            ";
        
        $__internal_89bf106eef3f1ecb08f560823cbad8cf21d8c710c941fbd4ae1dc23d7ffa4c9f->leave($__internal_89bf106eef3f1ecb08f560823cbad8cf21d8c710c941fbd4ae1dc23d7ffa4c9f_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1496a43775504268a27d940c2d191ca3da77615856c8337909be5baee79f05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1496a43775504268a27d940c2d191ca3da77615856c8337909be5baee79f05b->enter($__internal_a1496a43775504268a27d940c2d191ca3da77615856c8337909be5baee79f05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a1496a43775504268a27d940c2d191ca3da77615856c8337909be5baee79f05b->leave($__internal_a1496a43775504268a27d940c2d191ca3da77615856c8337909be5baee79f05b_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_36d0bbbe524f7af629a8adafa33366fc918f4338cd6b88d34345ec419886ecfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d0bbbe524f7af629a8adafa33366fc918f4338cd6b88d34345ec419886ecfb->enter($__internal_36d0bbbe524f7af629a8adafa33366fc918f4338cd6b88d34345ec419886ecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_36d0bbbe524f7af629a8adafa33366fc918f4338cd6b88d34345ec419886ecfb->leave($__internal_36d0bbbe524f7af629a8adafa33366fc918f4338cd6b88d34345ec419886ecfb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 25,  121 => 21,  111 => 15,  107 => 14,  104 => 13,  98 => 12,  88 => 7,  82 => 6,  70 => 5,  60 => 26,  58 => 25,  53 => 22,  51 => 21,  46 => 18,  44 => 12,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
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
                <li><a class=\"active\" href=\"{{ path('front_office_homepage') }}\">Home</a></li>
                <li><a href=\"{{ path('profil') }}\">Modifier son profil</a></li>
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
", "base.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/base.html.twig");
    }
}

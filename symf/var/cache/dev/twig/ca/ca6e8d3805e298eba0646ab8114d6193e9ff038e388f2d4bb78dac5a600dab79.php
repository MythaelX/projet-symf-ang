<?php

/* base.html.twig */
class __TwigTemplate_e2d21215726556d7a2b9206e83e6061cc251f39bee62896aecdbb35410598892 extends Twig_Template
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
        $__internal_50fcfa15a950c316d366cc0d6158973f06a7e049cd92a41ea446bc3bcf108258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fcfa15a950c316d366cc0d6158973f06a7e049cd92a41ea446bc3bcf108258->enter($__internal_50fcfa15a950c316d366cc0d6158973f06a7e049cd92a41ea446bc3bcf108258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 19
        echo "        </div>

        <div id=\"content\">
            ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </div>

        <div id=\"footer\">
            ";
        // line 26
        $this->displayBlock('footer', $context, $blocks);
        // line 27
        echo "        </div>
    </body>
</html>
";
        
        $__internal_50fcfa15a950c316d366cc0d6158973f06a7e049cd92a41ea446bc3bcf108258->leave($__internal_50fcfa15a950c316d366cc0d6158973f06a7e049cd92a41ea446bc3bcf108258_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeda9480f9a9c6693f293db01c3712d7b22ec9b011245cf1fb64c68b61bc894c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeda9480f9a9c6693f293db01c3712d7b22ec9b011245cf1fb64c68b61bc894c->enter($__internal_aeda9480f9a9c6693f293db01c3712d7b22ec9b011245cf1fb64c68b61bc894c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_aeda9480f9a9c6693f293db01c3712d7b22ec9b011245cf1fb64c68b61bc894c->leave($__internal_aeda9480f9a9c6693f293db01c3712d7b22ec9b011245cf1fb64c68b61bc894c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c7aa770b8c6e3d03fd70bb85136f53f9ef692a58b37419338327230f90e3866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7aa770b8c6e3d03fd70bb85136f53f9ef692a58b37419338327230f90e3866->enter($__internal_7c7aa770b8c6e3d03fd70bb85136f53f9ef692a58b37419338327230f90e3866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_7c7aa770b8c6e3d03fd70bb85136f53f9ef692a58b37419338327230f90e3866->leave($__internal_7c7aa770b8c6e3d03fd70bb85136f53f9ef692a58b37419338327230f90e3866_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_346b48df9a17de318c1d7d3e0eec82fdcee07146ad3371fcd225851387b770cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346b48df9a17de318c1d7d3e0eec82fdcee07146ad3371fcd225851387b770cc->enter($__internal_346b48df9a17de318c1d7d3e0eec82fdcee07146ad3371fcd225851387b770cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "            <ul>
                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_office_homepage");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nouveauTrajet");
        echo "\">Nouveau trajet</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil");
        echo "\">Modifier son profil</a></li>
            </ul>
            ";
        
        $__internal_346b48df9a17de318c1d7d3e0eec82fdcee07146ad3371fcd225851387b770cc->leave($__internal_346b48df9a17de318c1d7d3e0eec82fdcee07146ad3371fcd225851387b770cc_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b041f8ec8d00dbf45515a29ad7a988dfdad8f8ca03e5e4241fa5c11164fdc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b041f8ec8d00dbf45515a29ad7a988dfdad8f8ca03e5e4241fa5c11164fdc23->enter($__internal_0b041f8ec8d00dbf45515a29ad7a988dfdad8f8ca03e5e4241fa5c11164fdc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b041f8ec8d00dbf45515a29ad7a988dfdad8f8ca03e5e4241fa5c11164fdc23->leave($__internal_0b041f8ec8d00dbf45515a29ad7a988dfdad8f8ca03e5e4241fa5c11164fdc23_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ff052ce576c21911f580801f18a3478da5202ad48b6679ae86216f01afb8f1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff052ce576c21911f580801f18a3478da5202ad48b6679ae86216f01afb8f1ac->enter($__internal_ff052ce576c21911f580801f18a3478da5202ad48b6679ae86216f01afb8f1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_ff052ce576c21911f580801f18a3478da5202ad48b6679ae86216f01afb8f1ac->leave($__internal_ff052ce576c21911f580801f18a3478da5202ad48b6679ae86216f01afb8f1ac_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 26,  125 => 22,  115 => 16,  111 => 15,  107 => 14,  104 => 13,  98 => 12,  88 => 7,  82 => 6,  70 => 5,  60 => 27,  58 => 26,  53 => 23,  51 => 22,  46 => 19,  44 => 12,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
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
                <li><a href=\"{{ path('nouveauTrajet') }}\">Nouveau trajet</a></li>
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
", "base.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/base.html.twig");
    }
}

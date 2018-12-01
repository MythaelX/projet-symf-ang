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
        $__internal_107197236eb3176c416fe2e4a86f3a0de6d037647b6dd4c6a81bbdfd7d318ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107197236eb3176c416fe2e4a86f3a0de6d037647b6dd4c6a81bbdfd7d318ac1->enter($__internal_107197236eb3176c416fe2e4a86f3a0de6d037647b6dd4c6a81bbdfd7d318ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_107197236eb3176c416fe2e4a86f3a0de6d037647b6dd4c6a81bbdfd7d318ac1->leave($__internal_107197236eb3176c416fe2e4a86f3a0de6d037647b6dd4c6a81bbdfd7d318ac1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e0fef405ad9a06e4b62b4c06c8bd188f964db379901ff4374709ee3d8319a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0fef405ad9a06e4b62b4c06c8bd188f964db379901ff4374709ee3d8319a37->enter($__internal_8e0fef405ad9a06e4b62b4c06c8bd188f964db379901ff4374709ee3d8319a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_8e0fef405ad9a06e4b62b4c06c8bd188f964db379901ff4374709ee3d8319a37->leave($__internal_8e0fef405ad9a06e4b62b4c06c8bd188f964db379901ff4374709ee3d8319a37_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9137d20b11ca6ab9b918e30c8cdc3664a90993246eb09e3e76b07e8c4ba08341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9137d20b11ca6ab9b918e30c8cdc3664a90993246eb09e3e76b07e8c4ba08341->enter($__internal_9137d20b11ca6ab9b918e30c8cdc3664a90993246eb09e3e76b07e8c4ba08341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_9137d20b11ca6ab9b918e30c8cdc3664a90993246eb09e3e76b07e8c4ba08341->leave($__internal_9137d20b11ca6ab9b918e30c8cdc3664a90993246eb09e3e76b07e8c4ba08341_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_0baac49519b60d165de154c4fb9f27196039ae800d50c9f1146eb0cde3affca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0baac49519b60d165de154c4fb9f27196039ae800d50c9f1146eb0cde3affca3->enter($__internal_0baac49519b60d165de154c4fb9f27196039ae800d50c9f1146eb0cde3affca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_0baac49519b60d165de154c4fb9f27196039ae800d50c9f1146eb0cde3affca3->leave($__internal_0baac49519b60d165de154c4fb9f27196039ae800d50c9f1146eb0cde3affca3_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_53a22f688841c0198af4e4dc3ac47d4d0a41eee4ad2a55a13b297631bc47e28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a22f688841c0198af4e4dc3ac47d4d0a41eee4ad2a55a13b297631bc47e28b->enter($__internal_53a22f688841c0198af4e4dc3ac47d4d0a41eee4ad2a55a13b297631bc47e28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53a22f688841c0198af4e4dc3ac47d4d0a41eee4ad2a55a13b297631bc47e28b->leave($__internal_53a22f688841c0198af4e4dc3ac47d4d0a41eee4ad2a55a13b297631bc47e28b_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_30dd3da1d761726678f9e46cc3398c044ce07ff833aaa2b1054858c4e0690462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30dd3da1d761726678f9e46cc3398c044ce07ff833aaa2b1054858c4e0690462->enter($__internal_30dd3da1d761726678f9e46cc3398c044ce07ff833aaa2b1054858c4e0690462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_30dd3da1d761726678f9e46cc3398c044ce07ff833aaa2b1054858c4e0690462->leave($__internal_30dd3da1d761726678f9e46cc3398c044ce07ff833aaa2b1054858c4e0690462_prof);

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
", "base.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/base.html.twig");
    }
}

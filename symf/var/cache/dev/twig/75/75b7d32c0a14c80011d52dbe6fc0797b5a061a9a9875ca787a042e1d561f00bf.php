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
        $__internal_526c38b6f6de6e8cda389a7bcabfff01f871ac53d0c0f5b160a53e2ecf82a8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526c38b6f6de6e8cda389a7bcabfff01f871ac53d0c0f5b160a53e2ecf82a8c7->enter($__internal_526c38b6f6de6e8cda389a7bcabfff01f871ac53d0c0f5b160a53e2ecf82a8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_526c38b6f6de6e8cda389a7bcabfff01f871ac53d0c0f5b160a53e2ecf82a8c7->leave($__internal_526c38b6f6de6e8cda389a7bcabfff01f871ac53d0c0f5b160a53e2ecf82a8c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_98e8d1467ddafa0b44c6f1fd8380c8027a87f2c75ac0bdcab52a181897bd8fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e8d1467ddafa0b44c6f1fd8380c8027a87f2c75ac0bdcab52a181897bd8fa3->enter($__internal_98e8d1467ddafa0b44c6f1fd8380c8027a87f2c75ac0bdcab52a181897bd8fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_98e8d1467ddafa0b44c6f1fd8380c8027a87f2c75ac0bdcab52a181897bd8fa3->leave($__internal_98e8d1467ddafa0b44c6f1fd8380c8027a87f2c75ac0bdcab52a181897bd8fa3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f13cac16d4e3eeb4734fad3354bf6611e120a8ca1d940cb1f2910e151a41433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f13cac16d4e3eeb4734fad3354bf6611e120a8ca1d940cb1f2910e151a41433->enter($__internal_2f13cac16d4e3eeb4734fad3354bf6611e120a8ca1d940cb1f2910e151a41433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_2f13cac16d4e3eeb4734fad3354bf6611e120a8ca1d940cb1f2910e151a41433->leave($__internal_2f13cac16d4e3eeb4734fad3354bf6611e120a8ca1d940cb1f2910e151a41433_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_4c614f36425f4d26e4e75813e0fb7a010a466afb9aa3722fdc0ecb9601fc6ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c614f36425f4d26e4e75813e0fb7a010a466afb9aa3722fdc0ecb9601fc6ec9->enter($__internal_4c614f36425f4d26e4e75813e0fb7a010a466afb9aa3722fdc0ecb9601fc6ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_4c614f36425f4d26e4e75813e0fb7a010a466afb9aa3722fdc0ecb9601fc6ec9->leave($__internal_4c614f36425f4d26e4e75813e0fb7a010a466afb9aa3722fdc0ecb9601fc6ec9_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_b41e5be5809aab6ce660ba172f63ac5a71dc10ad1e105060f5446dc039b57a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41e5be5809aab6ce660ba172f63ac5a71dc10ad1e105060f5446dc039b57a75->enter($__internal_b41e5be5809aab6ce660ba172f63ac5a71dc10ad1e105060f5446dc039b57a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b41e5be5809aab6ce660ba172f63ac5a71dc10ad1e105060f5446dc039b57a75->leave($__internal_b41e5be5809aab6ce660ba172f63ac5a71dc10ad1e105060f5446dc039b57a75_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5768d2fb4b85c7324d04d4de31126a444444f44e1eefaa85b99f1e652553a61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5768d2fb4b85c7324d04d4de31126a444444f44e1eefaa85b99f1e652553a61e->enter($__internal_5768d2fb4b85c7324d04d4de31126a444444f44e1eefaa85b99f1e652553a61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_5768d2fb4b85c7324d04d4de31126a444444f44e1eefaa85b99f1e652553a61e->leave($__internal_5768d2fb4b85c7324d04d4de31126a444444f44e1eefaa85b99f1e652553a61e_prof);

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

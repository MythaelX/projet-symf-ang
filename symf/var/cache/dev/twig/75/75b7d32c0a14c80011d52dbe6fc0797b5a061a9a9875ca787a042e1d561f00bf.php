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
        $__internal_5d29aafe2a93ac5be718182cf5479bdf1900f0853449fd85d3c7058e04c0f1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d29aafe2a93ac5be718182cf5479bdf1900f0853449fd85d3c7058e04c0f1d8->enter($__internal_5d29aafe2a93ac5be718182cf5479bdf1900f0853449fd85d3c7058e04c0f1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5d29aafe2a93ac5be718182cf5479bdf1900f0853449fd85d3c7058e04c0f1d8->leave($__internal_5d29aafe2a93ac5be718182cf5479bdf1900f0853449fd85d3c7058e04c0f1d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_192c23c9813bd26e74049ec36869d479cf6980e3df5409d81af6ad251a3f8c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192c23c9813bd26e74049ec36869d479cf6980e3df5409d81af6ad251a3f8c8a->enter($__internal_192c23c9813bd26e74049ec36869d479cf6980e3df5409d81af6ad251a3f8c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_192c23c9813bd26e74049ec36869d479cf6980e3df5409d81af6ad251a3f8c8a->leave($__internal_192c23c9813bd26e74049ec36869d479cf6980e3df5409d81af6ad251a3f8c8a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0ae8d9f24ddd0717d986c77e8e4559886e4ec5633719a54479f782b3836f7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ae8d9f24ddd0717d986c77e8e4559886e4ec5633719a54479f782b3836f7b0->enter($__internal_f0ae8d9f24ddd0717d986c77e8e4559886e4ec5633719a54479f782b3836f7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_f0ae8d9f24ddd0717d986c77e8e4559886e4ec5633719a54479f782b3836f7b0->leave($__internal_f0ae8d9f24ddd0717d986c77e8e4559886e4ec5633719a54479f782b3836f7b0_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_b127f6841d7d143185625995aa42bbe5b40b55092c3103e8048c7601e05cfd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b127f6841d7d143185625995aa42bbe5b40b55092c3103e8048c7601e05cfd97->enter($__internal_b127f6841d7d143185625995aa42bbe5b40b55092c3103e8048c7601e05cfd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b127f6841d7d143185625995aa42bbe5b40b55092c3103e8048c7601e05cfd97->leave($__internal_b127f6841d7d143185625995aa42bbe5b40b55092c3103e8048c7601e05cfd97_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_f84cd8a2f15498eb1110e9300ec902185812de10806a33754f6107bfb9555804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84cd8a2f15498eb1110e9300ec902185812de10806a33754f6107bfb9555804->enter($__internal_f84cd8a2f15498eb1110e9300ec902185812de10806a33754f6107bfb9555804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f84cd8a2f15498eb1110e9300ec902185812de10806a33754f6107bfb9555804->leave($__internal_f84cd8a2f15498eb1110e9300ec902185812de10806a33754f6107bfb9555804_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_30c4a21dc4a0f63af5b136ff7307001aaff61b66ea4546d1eb3091c4369a52d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c4a21dc4a0f63af5b136ff7307001aaff61b66ea4546d1eb3091c4369a52d7->enter($__internal_30c4a21dc4a0f63af5b136ff7307001aaff61b66ea4546d1eb3091c4369a52d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_30c4a21dc4a0f63af5b136ff7307001aaff61b66ea4546d1eb3091c4369a52d7->leave($__internal_30c4a21dc4a0f63af5b136ff7307001aaff61b66ea4546d1eb3091c4369a52d7_prof);

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

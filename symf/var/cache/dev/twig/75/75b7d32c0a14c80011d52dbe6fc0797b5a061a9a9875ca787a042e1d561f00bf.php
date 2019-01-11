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
        $__internal_363e0b11a4f74b1f4301a5a7a4aa6a1535050eda8c493e7b76c66a8cd97ae354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363e0b11a4f74b1f4301a5a7a4aa6a1535050eda8c493e7b76c66a8cd97ae354->enter($__internal_363e0b11a4f74b1f4301a5a7a4aa6a1535050eda8c493e7b76c66a8cd97ae354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_363e0b11a4f74b1f4301a5a7a4aa6a1535050eda8c493e7b76c66a8cd97ae354->leave($__internal_363e0b11a4f74b1f4301a5a7a4aa6a1535050eda8c493e7b76c66a8cd97ae354_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4126a52ef985ebfc0a96b8bb078d59afe1a3e21ff5a548179210a167f8c7bb1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4126a52ef985ebfc0a96b8bb078d59afe1a3e21ff5a548179210a167f8c7bb1b->enter($__internal_4126a52ef985ebfc0a96b8bb078d59afe1a3e21ff5a548179210a167f8c7bb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_4126a52ef985ebfc0a96b8bb078d59afe1a3e21ff5a548179210a167f8c7bb1b->leave($__internal_4126a52ef985ebfc0a96b8bb078d59afe1a3e21ff5a548179210a167f8c7bb1b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0005ae64d2ee8647b55055cda7809f3f5a6947d52dd73002af1eac45c1e3ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0005ae64d2ee8647b55055cda7809f3f5a6947d52dd73002af1eac45c1e3ca9->enter($__internal_e0005ae64d2ee8647b55055cda7809f3f5a6947d52dd73002af1eac45c1e3ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_e0005ae64d2ee8647b55055cda7809f3f5a6947d52dd73002af1eac45c1e3ca9->leave($__internal_e0005ae64d2ee8647b55055cda7809f3f5a6947d52dd73002af1eac45c1e3ca9_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_cd72a7c77d61ad6e206c566dbea54c85f564277c57929e0f6bc31818936963bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd72a7c77d61ad6e206c566dbea54c85f564277c57929e0f6bc31818936963bb->enter($__internal_cd72a7c77d61ad6e206c566dbea54c85f564277c57929e0f6bc31818936963bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_cd72a7c77d61ad6e206c566dbea54c85f564277c57929e0f6bc31818936963bb->leave($__internal_cd72a7c77d61ad6e206c566dbea54c85f564277c57929e0f6bc31818936963bb_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_85498e285deaf33a0ebccdf8e7d1e572cb27f185a572fe32c432479fed9e2572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85498e285deaf33a0ebccdf8e7d1e572cb27f185a572fe32c432479fed9e2572->enter($__internal_85498e285deaf33a0ebccdf8e7d1e572cb27f185a572fe32c432479fed9e2572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85498e285deaf33a0ebccdf8e7d1e572cb27f185a572fe32c432479fed9e2572->leave($__internal_85498e285deaf33a0ebccdf8e7d1e572cb27f185a572fe32c432479fed9e2572_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_659386411b384277fc02d42258abb61be210d95c3c5c0024ed043450b462632f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659386411b384277fc02d42258abb61be210d95c3c5c0024ed043450b462632f->enter($__internal_659386411b384277fc02d42258abb61be210d95c3c5c0024ed043450b462632f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_659386411b384277fc02d42258abb61be210d95c3c5c0024ed043450b462632f->leave($__internal_659386411b384277fc02d42258abb61be210d95c3c5c0024ed043450b462632f_prof);

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

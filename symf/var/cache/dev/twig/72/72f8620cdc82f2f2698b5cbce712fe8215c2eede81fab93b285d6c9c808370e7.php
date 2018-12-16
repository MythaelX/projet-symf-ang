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
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1fb1822164dae8471fd2713579e1143dedc0d9ef654b2765c839080bfd8dbb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fb1822164dae8471fd2713579e1143dedc0d9ef654b2765c839080bfd8dbb5->enter($__internal_d1fb1822164dae8471fd2713579e1143dedc0d9ef654b2765c839080bfd8dbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d1fb1822164dae8471fd2713579e1143dedc0d9ef654b2765c839080bfd8dbb5->leave($__internal_d1fb1822164dae8471fd2713579e1143dedc0d9ef654b2765c839080bfd8dbb5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f9882033ab720210a13208915e1ca2a9b17c74d836f3eec459cc7ae02612129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9882033ab720210a13208915e1ca2a9b17c74d836f3eec459cc7ae02612129->enter($__internal_1f9882033ab720210a13208915e1ca2a9b17c74d836f3eec459cc7ae02612129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_1f9882033ab720210a13208915e1ca2a9b17c74d836f3eec459cc7ae02612129->leave($__internal_1f9882033ab720210a13208915e1ca2a9b17c74d836f3eec459cc7ae02612129_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_391ce7954b742d8b562c3e39f8b3cde4b35a085f8081155f50705e6f014fa84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391ce7954b742d8b562c3e39f8b3cde4b35a085f8081155f50705e6f014fa84c->enter($__internal_391ce7954b742d8b562c3e39f8b3cde4b35a085f8081155f50705e6f014fa84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_391ce7954b742d8b562c3e39f8b3cde4b35a085f8081155f50705e6f014fa84c->leave($__internal_391ce7954b742d8b562c3e39f8b3cde4b35a085f8081155f50705e6f014fa84c_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_3c085c13a692e6deaa0426212e3deb352916d07783d1621d4252411919a6d62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c085c13a692e6deaa0426212e3deb352916d07783d1621d4252411919a6d62b->enter($__internal_3c085c13a692e6deaa0426212e3deb352916d07783d1621d4252411919a6d62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_3c085c13a692e6deaa0426212e3deb352916d07783d1621d4252411919a6d62b->leave($__internal_3c085c13a692e6deaa0426212e3deb352916d07783d1621d4252411919a6d62b_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_087213d35aa389dffc5964d7fe62fbf44433a46afdcc82589d414e1ea3f26317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087213d35aa389dffc5964d7fe62fbf44433a46afdcc82589d414e1ea3f26317->enter($__internal_087213d35aa389dffc5964d7fe62fbf44433a46afdcc82589d414e1ea3f26317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_087213d35aa389dffc5964d7fe62fbf44433a46afdcc82589d414e1ea3f26317->leave($__internal_087213d35aa389dffc5964d7fe62fbf44433a46afdcc82589d414e1ea3f26317_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_19fd4dd357e34ae1151cc887022c42cac8a01bb4bb3cd893743b8389252edb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fd4dd357e34ae1151cc887022c42cac8a01bb4bb3cd893743b8389252edb70->enter($__internal_19fd4dd357e34ae1151cc887022c42cac8a01bb4bb3cd893743b8389252edb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_19fd4dd357e34ae1151cc887022c42cac8a01bb4bb3cd893743b8389252edb70->leave($__internal_19fd4dd357e34ae1151cc887022c42cac8a01bb4bb3cd893743b8389252edb70_prof);

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

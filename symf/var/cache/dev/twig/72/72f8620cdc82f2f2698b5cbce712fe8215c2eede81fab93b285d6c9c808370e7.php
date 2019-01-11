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
        $__internal_bb4b00cd4f41e87b9008178d73843d6e4965585db3d003ac3c8614dbe5528ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4b00cd4f41e87b9008178d73843d6e4965585db3d003ac3c8614dbe5528ac9->enter($__internal_bb4b00cd4f41e87b9008178d73843d6e4965585db3d003ac3c8614dbe5528ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bb4b00cd4f41e87b9008178d73843d6e4965585db3d003ac3c8614dbe5528ac9->leave($__internal_bb4b00cd4f41e87b9008178d73843d6e4965585db3d003ac3c8614dbe5528ac9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ef630ea2e89d77a9da9d9fcbff5a5963b106f34ba6d5fa30e65be863825dd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef630ea2e89d77a9da9d9fcbff5a5963b106f34ba6d5fa30e65be863825dd9e->enter($__internal_8ef630ea2e89d77a9da9d9fcbff5a5963b106f34ba6d5fa30e65be863825dd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_8ef630ea2e89d77a9da9d9fcbff5a5963b106f34ba6d5fa30e65be863825dd9e->leave($__internal_8ef630ea2e89d77a9da9d9fcbff5a5963b106f34ba6d5fa30e65be863825dd9e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb1cd94f543540692b95f4ac13f6a55fedfd8d771426f5b5542fbb2246eee4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1cd94f543540692b95f4ac13f6a55fedfd8d771426f5b5542fbb2246eee4d2->enter($__internal_fb1cd94f543540692b95f4ac13f6a55fedfd8d771426f5b5542fbb2246eee4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_fb1cd94f543540692b95f4ac13f6a55fedfd8d771426f5b5542fbb2246eee4d2->leave($__internal_fb1cd94f543540692b95f4ac13f6a55fedfd8d771426f5b5542fbb2246eee4d2_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_c429a818268c09fb274ce2c1c08672c05fa58bf87a388c1344b8275feb3f734d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c429a818268c09fb274ce2c1c08672c05fa58bf87a388c1344b8275feb3f734d->enter($__internal_c429a818268c09fb274ce2c1c08672c05fa58bf87a388c1344b8275feb3f734d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_c429a818268c09fb274ce2c1c08672c05fa58bf87a388c1344b8275feb3f734d->leave($__internal_c429a818268c09fb274ce2c1c08672c05fa58bf87a388c1344b8275feb3f734d_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_de875db5b4785d249445b86c2b08fa2895ff025f2d400780d3ed76061c7720ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de875db5b4785d249445b86c2b08fa2895ff025f2d400780d3ed76061c7720ae->enter($__internal_de875db5b4785d249445b86c2b08fa2895ff025f2d400780d3ed76061c7720ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de875db5b4785d249445b86c2b08fa2895ff025f2d400780d3ed76061c7720ae->leave($__internal_de875db5b4785d249445b86c2b08fa2895ff025f2d400780d3ed76061c7720ae_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ea5efb98204ab53d896633f6a852b6de539d97085499bc44108e68c7a06dbbfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5efb98204ab53d896633f6a852b6de539d97085499bc44108e68c7a06dbbfa->enter($__internal_ea5efb98204ab53d896633f6a852b6de539d97085499bc44108e68c7a06dbbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_ea5efb98204ab53d896633f6a852b6de539d97085499bc44108e68c7a06dbbfa->leave($__internal_ea5efb98204ab53d896633f6a852b6de539d97085499bc44108e68c7a06dbbfa_prof);

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

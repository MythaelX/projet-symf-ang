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
        $__internal_fbdde579d24f70e74a1c81355cb45acd5557df20fc15fcd7d2de17aad5db126b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdde579d24f70e74a1c81355cb45acd5557df20fc15fcd7d2de17aad5db126b->enter($__internal_fbdde579d24f70e74a1c81355cb45acd5557df20fc15fcd7d2de17aad5db126b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fbdde579d24f70e74a1c81355cb45acd5557df20fc15fcd7d2de17aad5db126b->leave($__internal_fbdde579d24f70e74a1c81355cb45acd5557df20fc15fcd7d2de17aad5db126b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e7c162c13907975d6069f25607b68cbba2708c7fa1223b267bb018083d80ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7c162c13907975d6069f25607b68cbba2708c7fa1223b267bb018083d80ec1->enter($__internal_4e7c162c13907975d6069f25607b68cbba2708c7fa1223b267bb018083d80ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_4e7c162c13907975d6069f25607b68cbba2708c7fa1223b267bb018083d80ec1->leave($__internal_4e7c162c13907975d6069f25607b68cbba2708c7fa1223b267bb018083d80ec1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ffbc69834c9c0ac341080771baf309bb832e919b58b428746de2876e7dc1c5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbc69834c9c0ac341080771baf309bb832e919b58b428746de2876e7dc1c5a0->enter($__internal_ffbc69834c9c0ac341080771baf309bb832e919b58b428746de2876e7dc1c5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_ffbc69834c9c0ac341080771baf309bb832e919b58b428746de2876e7dc1c5a0->leave($__internal_ffbc69834c9c0ac341080771baf309bb832e919b58b428746de2876e7dc1c5a0_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_14c2d16e21673aeb98d8f92a387166a23a8caf851a31f39ddd9096b70a3d81cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c2d16e21673aeb98d8f92a387166a23a8caf851a31f39ddd9096b70a3d81cb->enter($__internal_14c2d16e21673aeb98d8f92a387166a23a8caf851a31f39ddd9096b70a3d81cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_14c2d16e21673aeb98d8f92a387166a23a8caf851a31f39ddd9096b70a3d81cb->leave($__internal_14c2d16e21673aeb98d8f92a387166a23a8caf851a31f39ddd9096b70a3d81cb_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_326631cebfe3de1b315cfaff42fe89a8b6c190b0c4e6c68f53f14d7602891c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326631cebfe3de1b315cfaff42fe89a8b6c190b0c4e6c68f53f14d7602891c66->enter($__internal_326631cebfe3de1b315cfaff42fe89a8b6c190b0c4e6c68f53f14d7602891c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_326631cebfe3de1b315cfaff42fe89a8b6c190b0c4e6c68f53f14d7602891c66->leave($__internal_326631cebfe3de1b315cfaff42fe89a8b6c190b0c4e6c68f53f14d7602891c66_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f6efbaa7fbc2e04f9c671c2998a027fa5cc97e89fa1cdb395ac3875c57926557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6efbaa7fbc2e04f9c671c2998a027fa5cc97e89fa1cdb395ac3875c57926557->enter($__internal_f6efbaa7fbc2e04f9c671c2998a027fa5cc97e89fa1cdb395ac3875c57926557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_f6efbaa7fbc2e04f9c671c2998a027fa5cc97e89fa1cdb395ac3875c57926557->leave($__internal_f6efbaa7fbc2e04f9c671c2998a027fa5cc97e89fa1cdb395ac3875c57926557_prof);

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

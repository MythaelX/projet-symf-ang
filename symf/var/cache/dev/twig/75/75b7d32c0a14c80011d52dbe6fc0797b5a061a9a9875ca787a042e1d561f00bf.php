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
        $__internal_ba97898b19922442193529a85fa0e7aebb2a314eb5570af4fbefd71a0d509dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba97898b19922442193529a85fa0e7aebb2a314eb5570af4fbefd71a0d509dca->enter($__internal_ba97898b19922442193529a85fa0e7aebb2a314eb5570af4fbefd71a0d509dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ba97898b19922442193529a85fa0e7aebb2a314eb5570af4fbefd71a0d509dca->leave($__internal_ba97898b19922442193529a85fa0e7aebb2a314eb5570af4fbefd71a0d509dca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_644f80c70947855c3a7c2912f3cfeabc24eaf651b04bf268749c81ba079cfb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644f80c70947855c3a7c2912f3cfeabc24eaf651b04bf268749c81ba079cfb6b->enter($__internal_644f80c70947855c3a7c2912f3cfeabc24eaf651b04bf268749c81ba079cfb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet framework";
        
        $__internal_644f80c70947855c3a7c2912f3cfeabc24eaf651b04bf268749c81ba079cfb6b->leave($__internal_644f80c70947855c3a7c2912f3cfeabc24eaf651b04bf268749c81ba079cfb6b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_088326323b05841f404cc90a91623ea7071d7aab743445b4438f3ccbe1b7440a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088326323b05841f404cc90a91623ea7071d7aab743445b4438f3ccbe1b7440a->enter($__internal_088326323b05841f404cc90a91623ea7071d7aab743445b4438f3ccbe1b7440a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_088326323b05841f404cc90a91623ea7071d7aab743445b4438f3ccbe1b7440a->leave($__internal_088326323b05841f404cc90a91623ea7071d7aab743445b4438f3ccbe1b7440a_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_1444c32a8e56f01e8c90569fde312716b08e93fe0109a53d02bac2ff3bf2c8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1444c32a8e56f01e8c90569fde312716b08e93fe0109a53d02bac2ff3bf2c8e1->enter($__internal_1444c32a8e56f01e8c90569fde312716b08e93fe0109a53d02bac2ff3bf2c8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_1444c32a8e56f01e8c90569fde312716b08e93fe0109a53d02bac2ff3bf2c8e1->leave($__internal_1444c32a8e56f01e8c90569fde312716b08e93fe0109a53d02bac2ff3bf2c8e1_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8d13efced0b36b315a0716f74cd4a536c849792e99b8b4c9d805c37e19009c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d13efced0b36b315a0716f74cd4a536c849792e99b8b4c9d805c37e19009c9->enter($__internal_c8d13efced0b36b315a0716f74cd4a536c849792e99b8b4c9d805c37e19009c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c8d13efced0b36b315a0716f74cd4a536c849792e99b8b4c9d805c37e19009c9->leave($__internal_c8d13efced0b36b315a0716f74cd4a536c849792e99b8b4c9d805c37e19009c9_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d60ca13aa50b1165228b50d395c1b01816cd0a170e7296321756ec7973910b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60ca13aa50b1165228b50d395c1b01816cd0a170e7296321756ec7973910b40->enter($__internal_d60ca13aa50b1165228b50d395c1b01816cd0a170e7296321756ec7973910b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_d60ca13aa50b1165228b50d395c1b01816cd0a170e7296321756ec7973910b40->leave($__internal_d60ca13aa50b1165228b50d395c1b01816cd0a170e7296321756ec7973910b40_prof);

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

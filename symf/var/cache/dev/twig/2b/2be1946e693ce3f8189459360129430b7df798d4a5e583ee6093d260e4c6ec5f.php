<?php

/* :user:new.html.twig */
class __TwigTemplate_dbb6e80a0eee355b47de43b57f7243b84ad81768c27262f21a5725ce351b6603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f60fbe2942e3e516931e5031e64081b5d52f0e582e673cd3aca6b3c63c917748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60fbe2942e3e516931e5031e64081b5d52f0e582e673cd3aca6b3c63c917748->enter($__internal_f60fbe2942e3e516931e5031e64081b5d52f0e582e673cd3aca6b3c63c917748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f60fbe2942e3e516931e5031e64081b5d52f0e582e673cd3aca6b3c63c917748->leave($__internal_f60fbe2942e3e516931e5031e64081b5d52f0e582e673cd3aca6b3c63c917748_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc0314cd27270eba599ee85675ad5cff8c2706fabef38eb150fccc1b0f4912fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0314cd27270eba599ee85675ad5cff8c2706fabef38eb150fccc1b0f4912fa->enter($__internal_fc0314cd27270eba599ee85675ad5cff8c2706fabef38eb150fccc1b0f4912fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_fc0314cd27270eba599ee85675ad5cff8c2706fabef38eb150fccc1b0f4912fa->leave($__internal_fc0314cd27270eba599ee85675ad5cff8c2706fabef38eb150fccc1b0f4912fa_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/user/new.html.twig");
    }
}

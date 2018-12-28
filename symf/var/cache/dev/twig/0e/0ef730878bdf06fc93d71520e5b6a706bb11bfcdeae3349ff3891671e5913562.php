<?php

/* :deplacement:new.html.twig */
class __TwigTemplate_68e291eec1bf0badcd6640ebaf2468e2555cf3f01ef7c646559da36e9f93da31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":deplacement:new.html.twig", 1);
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
        $__internal_843354a8cd6c831792e99405a178fb8722cfde1e41ddc34dbeb0cd660a7f5c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843354a8cd6c831792e99405a178fb8722cfde1e41ddc34dbeb0cd660a7f5c8f->enter($__internal_843354a8cd6c831792e99405a178fb8722cfde1e41ddc34dbeb0cd660a7f5c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deplacement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_843354a8cd6c831792e99405a178fb8722cfde1e41ddc34dbeb0cd660a7f5c8f->leave($__internal_843354a8cd6c831792e99405a178fb8722cfde1e41ddc34dbeb0cd660a7f5c8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6a41d13ef45f7841c484b709c0009e0ec3b18a22eee8d1a019736efb69602cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a41d13ef45f7841c484b709c0009e0ec3b18a22eee8d1a019736efb69602cf->enter($__internal_f6a41d13ef45f7841c484b709c0009e0ec3b18a22eee8d1a019736efb69602cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacement creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f6a41d13ef45f7841c484b709c0009e0ec3b18a22eee8d1a019736efb69602cf->leave($__internal_f6a41d13ef45f7841c484b709c0009e0ec3b18a22eee8d1a019736efb69602cf_prof);

    }

    public function getTemplateName()
    {
        return ":deplacement:new.html.twig";
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
    <h1>Deplacement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('deplacement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":deplacement:new.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/deplacement/new.html.twig");
    }
}

<?php

/* :deplacement:edit.html.twig */
class __TwigTemplate_37675643786278c32cbc4316059d2160353a4b6ec05e5e7d3667e806ffe9dd2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":deplacement:edit.html.twig", 1);
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
        $__internal_31a32c5980251732c6a7db92fc9e5f1d8466a1602362000ab243f07db55f8e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a32c5980251732c6a7db92fc9e5f1d8466a1602362000ab243f07db55f8e4d->enter($__internal_31a32c5980251732c6a7db92fc9e5f1d8466a1602362000ab243f07db55f8e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deplacement:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a32c5980251732c6a7db92fc9e5f1d8466a1602362000ab243f07db55f8e4d->leave($__internal_31a32c5980251732c6a7db92fc9e5f1d8466a1602362000ab243f07db55f8e4d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb330afc6f2be38d6f4843b4bec5caf32b63c7fd4023b6e3284036e66810dc26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb330afc6f2be38d6f4843b4bec5caf32b63c7fd4023b6e3284036e66810dc26->enter($__internal_cb330afc6f2be38d6f4843b4bec5caf32b63c7fd4023b6e3284036e66810dc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacement edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_cb330afc6f2be38d6f4843b4bec5caf32b63c7fd4023b6e3284036e66810dc26->leave($__internal_cb330afc6f2be38d6f4843b4bec5caf32b63c7fd4023b6e3284036e66810dc26_prof);

    }

    public function getTemplateName()
    {
        return ":deplacement:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Deplacement edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('deplacement_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":deplacement:edit.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/deplacement/edit.html.twig");
    }
}

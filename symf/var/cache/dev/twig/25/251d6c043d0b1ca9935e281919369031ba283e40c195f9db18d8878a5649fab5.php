<?php

/* :user:new.html.twig */
class __TwigTemplate_737b1bcf46b1f2bb6519fbca6fbed8b1aa6468ac863ea0bee91bd92c781dfed2 extends Twig_Template
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
        $__internal_ceb8e6c135336782a89f3f42b1a526fc0ab1e0d656fc5b6cca2a7d47ad6c915e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb8e6c135336782a89f3f42b1a526fc0ab1e0d656fc5b6cca2a7d47ad6c915e->enter($__internal_ceb8e6c135336782a89f3f42b1a526fc0ab1e0d656fc5b6cca2a7d47ad6c915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb8e6c135336782a89f3f42b1a526fc0ab1e0d656fc5b6cca2a7d47ad6c915e->leave($__internal_ceb8e6c135336782a89f3f42b1a526fc0ab1e0d656fc5b6cca2a7d47ad6c915e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cd1998dea809cbf43fb9269d7464f30745ef8c6430059cf3780d4bfcea09caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd1998dea809cbf43fb9269d7464f30745ef8c6430059cf3780d4bfcea09caf->enter($__internal_1cd1998dea809cbf43fb9269d7464f30745ef8c6430059cf3780d4bfcea09caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1cd1998dea809cbf43fb9269d7464f30745ef8c6430059cf3780d4bfcea09caf->leave($__internal_1cd1998dea809cbf43fb9269d7464f30745ef8c6430059cf3780d4bfcea09caf_prof);

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
", ":user:new.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/user/new.html.twig");
    }
}

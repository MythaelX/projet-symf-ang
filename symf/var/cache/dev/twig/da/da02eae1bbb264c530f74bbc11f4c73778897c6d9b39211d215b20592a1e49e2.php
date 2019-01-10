<?php

/* :deplacementjour:new.html.twig */
class __TwigTemplate_6b3e798e5e2ff40b27f92ed3b8ed3aa4fcce1f13485edba8c60f3ab87f34a688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":deplacementjour:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c623643c81bdc5aa9922d0a3db49c5da6c0511c7afbe0c3e2851796251513ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c623643c81bdc5aa9922d0a3db49c5da6c0511c7afbe0c3e2851796251513ef->enter($__internal_4c623643c81bdc5aa9922d0a3db49c5da6c0511c7afbe0c3e2851796251513ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deplacementjour:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c623643c81bdc5aa9922d0a3db49c5da6c0511c7afbe0c3e2851796251513ef->leave($__internal_4c623643c81bdc5aa9922d0a3db49c5da6c0511c7afbe0c3e2851796251513ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6f04f9de1789e25f550a850051799bf73adbc408bb88a8e0b894b497364b26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f04f9de1789e25f550a850051799bf73adbc408bb88a8e0b894b497364b26e->enter($__internal_a6f04f9de1789e25f550a850051799bf73adbc408bb88a8e0b894b497364b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacementjour creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacementjour_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a6f04f9de1789e25f550a850051799bf73adbc408bb88a8e0b894b497364b26e->leave($__internal_a6f04f9de1789e25f550a850051799bf73adbc408bb88a8e0b894b497364b26e_prof);

    }

    public function getTemplateName()
    {
        return ":deplacementjour:new.html.twig";
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
        return new Twig_Source("{% extends 'baseBack.html.twig' %}

{% block body %}
    <h1>Deplacementjour creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('deplacementjour_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":deplacementjour:new.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/deplacementjour/new.html.twig");
    }
}

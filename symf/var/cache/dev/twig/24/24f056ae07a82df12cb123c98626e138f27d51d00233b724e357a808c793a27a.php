<?php

/* societe/new.html.twig */
class __TwigTemplate_e037e0cc4c6d0b5a6fafa9a9651b43c6c16e808b832e2f8b2aa33654398f9d77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", "societe/new.html.twig", 1);
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
        $__internal_850b5884de34240271994a7ae7b0663b27aa898ddd9a2971ce59a9186e461d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850b5884de34240271994a7ae7b0663b27aa898ddd9a2971ce59a9186e461d86->enter($__internal_850b5884de34240271994a7ae7b0663b27aa898ddd9a2971ce59a9186e461d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "societe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850b5884de34240271994a7ae7b0663b27aa898ddd9a2971ce59a9186e461d86->leave($__internal_850b5884de34240271994a7ae7b0663b27aa898ddd9a2971ce59a9186e461d86_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4f4a5baf30a4166037c678ef685b726cc68d63814a36654eff36edd2329209d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f4a5baf30a4166037c678ef685b726cc68d63814a36654eff36edd2329209d->enter($__internal_d4f4a5baf30a4166037c678ef685b726cc68d63814a36654eff36edd2329209d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Societe creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("societe_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d4f4a5baf30a4166037c678ef685b726cc68d63814a36654eff36edd2329209d->leave($__internal_d4f4a5baf30a4166037c678ef685b726cc68d63814a36654eff36edd2329209d_prof);

    }

    public function getTemplateName()
    {
        return "societe/new.html.twig";
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
    <h1>Societe creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('societe_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "societe/new.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/societe/new.html.twig");
    }
}

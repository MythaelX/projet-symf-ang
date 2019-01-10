<?php

/* :ville:new.html.twig */
class __TwigTemplate_26e8a57abdfabc28e7d03dec9176de90866203020c95b480352a0404383fb7e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":ville:new.html.twig", 1);
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
        $__internal_4898c51ce3d619ed0bdf927d069839f000231ad119cc9fb42c1e4cac54af8dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4898c51ce3d619ed0bdf927d069839f000231ad119cc9fb42c1e4cac54af8dcb->enter($__internal_4898c51ce3d619ed0bdf927d069839f000231ad119cc9fb42c1e4cac54af8dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ville:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4898c51ce3d619ed0bdf927d069839f000231ad119cc9fb42c1e4cac54af8dcb->leave($__internal_4898c51ce3d619ed0bdf927d069839f000231ad119cc9fb42c1e4cac54af8dcb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26fadea021b383305b2b268ba89c2d8be9fac7233a68e6e99801129ce3933bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fadea021b383305b2b268ba89c2d8be9fac7233a68e6e99801129ce3933bb0->enter($__internal_26fadea021b383305b2b268ba89c2d8be9fac7233a68e6e99801129ce3933bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ville creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_26fadea021b383305b2b268ba89c2d8be9fac7233a68e6e99801129ce3933bb0->leave($__internal_26fadea021b383305b2b268ba89c2d8be9fac7233a68e6e99801129ce3933bb0_prof);

    }

    public function getTemplateName()
    {
        return ":ville:new.html.twig";
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
    <h1>Ville creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ville_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":ville:new.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/ville/new.html.twig");
    }
}

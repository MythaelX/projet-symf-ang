<?php

/* FrontOfficeBundle:deplacementjour:new.html.twig */
class __TwigTemplate_e95618891efaba987d563efdd75fd5f7f9a4523f18d2c68a37e4163d7b8064d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontOfficeBundle:deplacementjour:new.html.twig", 1);
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
        $__internal_40149d185d9030b03febf63a094148da1172d7826177ceedc10c2209ecc68019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40149d185d9030b03febf63a094148da1172d7826177ceedc10c2209ecc68019->enter($__internal_40149d185d9030b03febf63a094148da1172d7826177ceedc10c2209ecc68019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:deplacementjour:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40149d185d9030b03febf63a094148da1172d7826177ceedc10c2209ecc68019->leave($__internal_40149d185d9030b03febf63a094148da1172d7826177ceedc10c2209ecc68019_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa8979f3b32d3e19aa61db3515aab47b58991f0f56f6927629e6ae58f0ae6e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8979f3b32d3e19aa61db3515aab47b58991f0f56f6927629e6ae58f0ae6e9d->enter($__internal_aa8979f3b32d3e19aa61db3515aab47b58991f0f56f6927629e6ae58f0ae6e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacement_show", array("id" => $this->getAttribute($this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "deplacement", array()), "id", array()))), "html", null, true);
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_aa8979f3b32d3e19aa61db3515aab47b58991f0f56f6927629e6ae58f0ae6e9d->leave($__internal_aa8979f3b32d3e19aa61db3515aab47b58991f0f56f6927629e6ae58f0ae6e9d_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:deplacementjour:new.html.twig";
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
    <h1>Deplacementjour creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('f_deplacement_show',{ 'id': deplacementJour.deplacement.id }) }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "FrontOfficeBundle:deplacementjour:new.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/deplacementjour/new.html.twig");
    }
}

<?php

/* FrontOfficeBundle:deplacementjour:new.html.twig */
class __TwigTemplate_30f3eb3f8b140fd205f52b85a3c78fb1f0560f6cfa5096cc8eeec00f7b2aae3e extends Twig_Template
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
        $__internal_3341ced8baafc054dc4a3dd583b18760d38e154f41b1c64dbf13bd3031c86c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3341ced8baafc054dc4a3dd583b18760d38e154f41b1c64dbf13bd3031c86c4a->enter($__internal_3341ced8baafc054dc4a3dd583b18760d38e154f41b1c64dbf13bd3031c86c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:deplacementjour:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3341ced8baafc054dc4a3dd583b18760d38e154f41b1c64dbf13bd3031c86c4a->leave($__internal_3341ced8baafc054dc4a3dd583b18760d38e154f41b1c64dbf13bd3031c86c4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c533a6685815bb15fe75c73146b2559c0f7c4b169fa845a3f29b631ed0e98c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c533a6685815bb15fe75c73146b2559c0f7c4b169fa845a3f29b631ed0e98c5->enter($__internal_6c533a6685815bb15fe75c73146b2559c0f7c4b169fa845a3f29b631ed0e98c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"modifFormulaire\">
    <h1>Déplacement jour création</h1>

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"maxwidth\" value=\"Créer\" />
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacement_show", array("id" => $this->getAttribute($this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "deplacement", array()), "id", array()))), "html", null, true);
        echo "\">Retour à la liste</a>
        </li>
    </ul>
</div>
";
        
        $__internal_6c533a6685815bb15fe75c73146b2559c0f7c4b169fa845a3f29b631ed0e98c5->leave($__internal_6c533a6685815bb15fe75c73146b2559c0f7c4b169fa845a3f29b631ed0e98c5_prof);

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
        return array (  61 => 14,  54 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
<div id=\"modifFormulaire\">
    <h1>Déplacement jour création</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"maxwidth\" value=\"Créer\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('f_deplacement_show',{ 'id': deplacementJour.deplacement.id }) }}\">Retour à la liste</a>
        </li>
    </ul>
</div>
{% endblock %}
", "FrontOfficeBundle:deplacementjour:new.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/deplacementjour/new.html.twig");
    }
}

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
        $__internal_cf6cb083ba074a05279c52b9162ba3bc9b36b2eb7844108235964c0efbeaa88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6cb083ba074a05279c52b9162ba3bc9b36b2eb7844108235964c0efbeaa88c->enter($__internal_cf6cb083ba074a05279c52b9162ba3bc9b36b2eb7844108235964c0efbeaa88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:deplacementjour:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf6cb083ba074a05279c52b9162ba3bc9b36b2eb7844108235964c0efbeaa88c->leave($__internal_cf6cb083ba074a05279c52b9162ba3bc9b36b2eb7844108235964c0efbeaa88c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78d66907a4531f5a46db4a6696dd20e8c516984f1367e9f06cff16d7b026b810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d66907a4531f5a46db4a6696dd20e8c516984f1367e9f06cff16d7b026b810->enter($__internal_78d66907a4531f5a46db4a6696dd20e8c516984f1367e9f06cff16d7b026b810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_78d66907a4531f5a46db4a6696dd20e8c516984f1367e9f06cff16d7b026b810->leave($__internal_78d66907a4531f5a46db4a6696dd20e8c516984f1367e9f06cff16d7b026b810_prof);

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

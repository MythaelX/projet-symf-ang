<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_b55d2b0d981126d89dc66e3b0452507bea0822bd84e29482942768778ec07b8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontOfficeBundle:Default:index.html.twig", 1);
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
        $__internal_d02c0874d4cf79d8f45b26a9e674c2e5548b304a5a0016d10eeb17fa0dd543a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02c0874d4cf79d8f45b26a9e674c2e5548b304a5a0016d10eeb17fa0dd543a6->enter($__internal_d02c0874d4cf79d8f45b26a9e674c2e5548b304a5a0016d10eeb17fa0dd543a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d02c0874d4cf79d8f45b26a9e674c2e5548b304a5a0016d10eeb17fa0dd543a6->leave($__internal_d02c0874d4cf79d8f45b26a9e674c2e5548b304a5a0016d10eeb17fa0dd543a6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_284858b6237e03bed5048343a433447141ac5663dc2175b649e99b4877c3c6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284858b6237e03bed5048343a433447141ac5663dc2175b649e99b4877c3c6be->enter($__internal_284858b6237e03bed5048343a433447141ac5663dc2175b649e99b4877c3c6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <span id=\"bienvenue\">Bienvenue ! ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "</span>
  <div id=\"tableau\">
  <h1>Déplacements liste :</h1>

<table>
    <thead>
        <tr>
            <th>Année</th>
            <th>Mois</th>
            <th>Date de validation</th>
            <th>Id</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deplacements"] ?? $this->getContext($context, "deplacements")));
        foreach ($context['_seq'] as $context["_key"] => $context["deplacement"]) {
            // line 19
            echo "        <tr>
            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacement_show", array("id" => $this->getAttribute($context["deplacement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacement"], "annee", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacement"], "mois", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            if ($this->getAttribute($context["deplacement"], "validation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["deplacement"], "dateValidation", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "Pas validé";
            }
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacement"], "id", array()), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li class=\"center\">
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacement_show", array("id" => $this->getAttribute($context["deplacement"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deplacement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacement_new");
        echo "\">Créer un nouveau Déplacements</a>
    </li>
</ul>
";
        
        $__internal_284858b6237e03bed5048343a433447141ac5663dc2175b649e99b4877c3c6be->leave($__internal_284858b6237e03bed5048343a433447141ac5663dc2175b649e99b4877c3c6be_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  86 => 23,  78 => 22,  74 => 21,  68 => 20,  65 => 19,  61 => 18,  40 => 3,  34 => 2,  11 => 1,);
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
  <span id=\"bienvenue\">Bienvenue ! {{utilisateur.nom}} {{utilisateur.prenom}}</span>
  <div id=\"tableau\">
  <h1>Déplacements liste :</h1>

<table>
    <thead>
        <tr>
            <th>Année</th>
            <th>Mois</th>
            <th>Date de validation</th>
            <th>Id</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for deplacement in deplacements %}
        <tr>
            <td><a href=\"{{ path('f_deplacement_show', { 'id': deplacement.id }) }}\">{{ deplacement.annee }}</a></td>
            <td>{{ deplacement.mois }}</td>
            <td>{% if deplacement.validation %}{{ deplacement.dateValidation|date('Y-m-d') }}{% else %}Pas validé{% endif %}</td>
            <td>{{ deplacement.id }}</td>
            <td>
                <ul>
                    <li class=\"center\">
                        <a href=\"{{ path('f_deplacement_show', { 'id': deplacement.id }) }}\">Voir</a>
                    </li>
                </ul>
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<ul>
    <li>
        <a href=\"{{ path('f_deplacement_new') }}\">Créer un nouveau Déplacements</a>
    </li>
</ul>
{% endblock %}
", "FrontOfficeBundle:Default:index.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}

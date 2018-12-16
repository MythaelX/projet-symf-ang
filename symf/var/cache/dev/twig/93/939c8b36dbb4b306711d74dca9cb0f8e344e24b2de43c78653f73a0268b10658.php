<?php

/* :deplacementjour:index.html.twig */
class __TwigTemplate_ac6ef45de5e539fc7fa17fe3d520388296c7f324d296e28145afed78e4a41c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":deplacementjour:index.html.twig", 1);
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
        $__internal_b850b8512daaa12cbdeffae23cbed5dfd0954e9c9efb50ce24b40e927df07e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b850b8512daaa12cbdeffae23cbed5dfd0954e9c9efb50ce24b40e927df07e00->enter($__internal_b850b8512daaa12cbdeffae23cbed5dfd0954e9c9efb50ce24b40e927df07e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deplacementjour:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b850b8512daaa12cbdeffae23cbed5dfd0954e9c9efb50ce24b40e927df07e00->leave($__internal_b850b8512daaa12cbdeffae23cbed5dfd0954e9c9efb50ce24b40e927df07e00_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72971f106ef72881573e23f6afd9f7fdbfc6d65ab420186f109053c712ed9940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72971f106ef72881573e23f6afd9f7fdbfc6d65ab420186f109053c712ed9940->enter($__internal_72971f106ef72881573e23f6afd9f7fdbfc6d65ab420186f109053c712ed9940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacementjours list</h1>

    <table>
        <thead>
            <tr>
                <th>Nbkm</th>
                <th>Montant</th>
                <th>Jour</th>
                <th>Date</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deplacementJours"] ?? $this->getContext($context, "deplacementJours")));
        foreach ($context['_seq'] as $context["_key"] => $context["deplacementJour"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacementjour_show", array("id" => $this->getAttribute($context["deplacementJour"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "nbKm", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "montant", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "jour", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["deplacementJour"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["deplacementJour"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["deplacementJour"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["deplacementJour"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["deplacementJour"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["deplacementJour"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacementjour_show", array("id" => $this->getAttribute($context["deplacementJour"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacementjour_edit", array("id" => $this->getAttribute($context["deplacementJour"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deplacementJour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacementjour_new");
        echo "\">Create a new deplacementJour</a>
        </li>
    </ul>
";
        
        $__internal_72971f106ef72881573e23f6afd9f7fdbfc6d65ab420186f109053c712ed9940->leave($__internal_72971f106ef72881573e23f6afd9f7fdbfc6d65ab420186f109053c712ed9940_prof);

    }

    public function getTemplateName()
    {
        return ":deplacementjour:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  122 => 41,  110 => 35,  104 => 32,  97 => 28,  91 => 27,  85 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Deplacementjours list</h1>

    <table>
        <thead>
            <tr>
                <th>Nbkm</th>
                <th>Montant</th>
                <th>Jour</th>
                <th>Date</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for deplacementJour in deplacementJours %}
            <tr>
                <td><a href=\"{{ path('deplacementjour_show', { 'id': deplacementJour.id }) }}\">{{ deplacementJour.nbKm }}</a></td>
                <td>{{ deplacementJour.montant }}</td>
                <td>{{ deplacementJour.jour }}</td>
                <td>{% if deplacementJour.date %}{{ deplacementJour.date|date('Y-m-d') }}{% endif %}</td>
                <td>{% if deplacementJour.created %}{{ deplacementJour.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if deplacementJour.updated %}{{ deplacementJour.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ deplacementJour.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('deplacementjour_show', { 'id': deplacementJour.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('deplacementjour_edit', { 'id': deplacementJour.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('deplacementjour_new') }}\">Create a new deplacementJour</a>
        </li>
    </ul>
{% endblock %}
", ":deplacementjour:index.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/deplacementjour/index.html.twig");
    }
}

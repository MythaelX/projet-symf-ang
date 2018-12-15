<?php

/* deplacementjour/show.html.twig */
class __TwigTemplate_d46663031ee3e168797e68dde827a60359c31c9218ca9b6ddcc9f19796467c6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", "deplacementjour/show.html.twig", 1);
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
        $__internal_4fe51c4742f79687b452ecda650f231b28e5378dd747f4ea390f7244f3f8a3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe51c4742f79687b452ecda650f231b28e5378dd747f4ea390f7244f3f8a3b7->enter($__internal_4fe51c4742f79687b452ecda650f231b28e5378dd747f4ea390f7244f3f8a3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "deplacementjour/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe51c4742f79687b452ecda650f231b28e5378dd747f4ea390f7244f3f8a3b7->leave($__internal_4fe51c4742f79687b452ecda650f231b28e5378dd747f4ea390f7244f3f8a3b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_724368990fb64ef89f3f7f30203607e2822682c190beebafcf2d39952e3770ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724368990fb64ef89f3f7f30203607e2822682c190beebafcf2d39952e3770ac->enter($__internal_724368990fb64ef89f3f7f30203607e2822682c190beebafcf2d39952e3770ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacementjour</h1>

    <table>
        <tbody>
            <tr>
                <th>Nbkm</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "nbKm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "montant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Jour</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "jour", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacementjour_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacementjour_edit", array("id" => $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_724368990fb64ef89f3f7f30203607e2822682c190beebafcf2d39952e3770ac->leave($__internal_724368990fb64ef89f3f7f30203607e2822682c190beebafcf2d39952e3770ac_prof);

    }

    public function getTemplateName()
    {
        return "deplacementjour/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  118 => 47,  112 => 44,  106 => 41,  96 => 34,  87 => 30,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Deplacementjour</h1>

    <table>
        <tbody>
            <tr>
                <th>Nbkm</th>
                <td>{{ deplacementJour.nbKm }}</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>{{ deplacementJour.montant }}</td>
            </tr>
            <tr>
                <th>Jour</th>
                <td>{{ deplacementJour.jour }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if deplacementJour.date %}{{ deplacementJour.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if deplacementJour.created %}{{ deplacementJour.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if deplacementJour.updated %}{{ deplacementJour.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ deplacementJour.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('deplacementjour_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('deplacementjour_edit', { 'id': deplacementJour.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "deplacementjour/show.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/deplacementjour/show.html.twig");
    }
}

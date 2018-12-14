<?php

/* FrontOfficeBundle:Default:deplacement.html.twig */
class __TwigTemplate_84aeb93988c2694693fbfdda229ca8c40653c1b9560755f7894eea5b361521a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontOfficeBundle:Default:deplacement.html.twig", 1);
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
        $__internal_ced08e058c882b78961c1e2ae131a21ab30ceede609f818ec9f112523440ba21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced08e058c882b78961c1e2ae131a21ab30ceede609f818ec9f112523440ba21->enter($__internal_ced08e058c882b78961c1e2ae131a21ab30ceede609f818ec9f112523440ba21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:deplacement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ced08e058c882b78961c1e2ae131a21ab30ceede609f818ec9f112523440ba21->leave($__internal_ced08e058c882b78961c1e2ae131a21ab30ceede609f818ec9f112523440ba21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cfc530fc0efdf0cb67c1022c19319e2ffe5abfde887b608aa7bd5befd10ec91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cfc530fc0efdf0cb67c1022c19319e2ffe5abfde887b608aa7bd5befd10ec91->enter($__internal_1cfc530fc0efdf0cb67c1022c19319e2ffe5abfde887b608aa7bd5befd10ec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacement du formulaire ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "id", array()), "html", null, true);
        echo " liste</h1>

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacementjour_show", array("id" => $this->getAttribute($context["deplacementJour"], "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacementjour_show", array("id" => $this->getAttribute($context["deplacementJour"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        ";
            // line 34
            if (($this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "validation", array()) == false)) {
                // line 35
                echo "                        <li>
                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacementjour_edit", array("id" => $this->getAttribute($context["deplacementJour"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                        </li>
                        ";
            }
            // line 39
            echo "                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deplacementJour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacementjour_new", array("id" => $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "id", array()))), "html", null, true);
        echo "\">Créer un nouveau déplacement</a>
        </li>
    </ul>
";
        
        $__internal_1cfc530fc0efdf0cb67c1022c19319e2ffe5abfde887b608aa7bd5befd10ec91->leave($__internal_1cfc530fc0efdf0cb67c1022c19319e2ffe5abfde887b608aa7bd5befd10ec91_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:deplacement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  131 => 43,  122 => 39,  116 => 36,  113 => 35,  111 => 34,  106 => 32,  99 => 28,  93 => 27,  87 => 26,  81 => 25,  77 => 24,  73 => 23,  67 => 22,  64 => 21,  60 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Deplacement du formulaire {{deplacement.id}} liste</h1>

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
                <td><a href=\"{{ path('f_deplacementjour_show', { 'id': deplacementJour.id }) }}\">{{ deplacementJour.nbKm }}</a></td>
                <td>{{ deplacementJour.montant }}</td>
                <td>{{ deplacementJour.jour }}</td>
                <td>{% if deplacementJour.date %}{{ deplacementJour.date|date('Y-m-d') }}{% endif %}</td>
                <td>{% if deplacementJour.created %}{{ deplacementJour.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if deplacementJour.updated %}{{ deplacementJour.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ deplacementJour.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('f_deplacementjour_show', { 'id': deplacementJour.id }) }}\">show</a>
                        </li>
                        {% if deplacement.validation==false %}
                        <li>
                            <a href=\"{{ path('f_deplacementjour_edit', { 'id': deplacementJour.id }) }}\">edit</a>
                        </li>
                        {% endif %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('f_deplacementjour_new',{ 'id': deplacement.id }) }}\">Créer un nouveau déplacement</a>
        </li>
    </ul>
{% endblock %}
", "FrontOfficeBundle:Default:deplacement.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/Default/deplacement.html.twig");
    }
}

<?php

/* FrontOfficeBundle:Default:deplacement.html.twig */
class __TwigTemplate_1b38f37b2fab91140d4ea18279f648ef41578442d263623cdb18e7aa091a7616 extends Twig_Template
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
        $__internal_7a40909acbf42e20f1833b169e840ed1509a65cacffbe245e8be608fce0f3096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a40909acbf42e20f1833b169e840ed1509a65cacffbe245e8be608fce0f3096->enter($__internal_7a40909acbf42e20f1833b169e840ed1509a65cacffbe245e8be608fce0f3096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:deplacement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a40909acbf42e20f1833b169e840ed1509a65cacffbe245e8be608fce0f3096->leave($__internal_7a40909acbf42e20f1833b169e840ed1509a65cacffbe245e8be608fce0f3096_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9252cf61d4347620e87e0edceaaf6e7658d3e3d28d1d6fd331eaa7a33146c70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9252cf61d4347620e87e0edceaaf6e7658d3e3d28d1d6fd331eaa7a33146c70f->enter($__internal_9252cf61d4347620e87e0edceaaf6e7658d3e3d28d1d6fd331eaa7a33146c70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"tableau\">
    <h1>Liste des déplacements du formulaire : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "id", array()), "html", null, true);
        echo " </h1>

    <table>
        <thead>
            <tr>
                <th>Nb de km</th>
                <th>Montant</th>
                <th>Jour</th>
                <th>Date</th>
                <th>Id</th>
                ";
        // line 15
        if (($this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "validation", array()) == false)) {
            echo "<th>Actions</th>";
        }
        // line 16
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deplacementJours"] ?? $this->getContext($context, "deplacementJours")));
        foreach ($context['_seq'] as $context["_key"] => $context["deplacementJour"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "nbKm", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "montant", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "jour", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["deplacementJour"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["deplacementJour"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "id", array()), "html", null, true);
            echo "</td>
                ";
            // line 26
            if (($this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "validation", array()) == false)) {
                // line 27
                echo "                <td>
                    <ul>
                        <li class=\"center\">
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacementjour_show", array("id" => $this->getAttribute($context["deplacementJour"], "id", array()))), "html", null, true);
                echo "\">Détail</a>
                        </li>

                        <li class=\"center\">
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacementjour_edit", array("id" => $this->getAttribute($context["deplacementJour"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                        </li>

                    </ul>
                </td>
                ";
            }
            // line 40
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deplacementJour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
    ";
        // line 44
        if (($this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "validation", array()) == false)) {
            // line 45
            echo "    <ul>
        <li>
            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacementjour_new", array("id" => $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "id", array()))), "html", null, true);
            echo "\">Créer un nouveau déplacement Jour</a>
        </li>
    </ul>
    ";
        }
        // line 51
        echo "    </div>
";
        
        $__internal_9252cf61d4347620e87e0edceaaf6e7658d3e3d28d1d6fd331eaa7a33146c70f->leave($__internal_9252cf61d4347620e87e0edceaaf6e7658d3e3d28d1d6fd331eaa7a33146c70f_prof);

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
        return array (  141 => 51,  134 => 47,  130 => 45,  128 => 44,  124 => 42,  117 => 40,  108 => 34,  101 => 30,  96 => 27,  94 => 26,  90 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  69 => 20,  65 => 19,  60 => 16,  56 => 15,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<div id=\"tableau\">
    <h1>Liste des déplacements du formulaire : {{deplacement.id}} </h1>

    <table>
        <thead>
            <tr>
                <th>Nb de km</th>
                <th>Montant</th>
                <th>Jour</th>
                <th>Date</th>
                <th>Id</th>
                {% if deplacement.validation==false %}<th>Actions</th>{% endif %}
            </tr>
        </thead>
        <tbody>
        {% for deplacementJour in deplacementJours %}
            <tr>
                <td>{{ deplacementJour.nbKm }}</td>
                <td>{{ deplacementJour.montant }}</td>
                <td>{{ deplacementJour.jour }}</td>
                <td>{% if deplacementJour.date %}{{ deplacementJour.date|date('Y-m-d') }}{% endif %}</td>
                <td>{{ deplacementJour.id }}</td>
                {% if deplacement.validation==false %}
                <td>
                    <ul>
                        <li class=\"center\">
                            <a href=\"{{ path('f_deplacementjour_show', { 'id': deplacementJour.id }) }}\">Détail</a>
                        </li>

                        <li class=\"center\">
                            <a href=\"{{ path('f_deplacementjour_edit', { 'id': deplacementJour.id }) }}\">Modifier</a>
                        </li>

                    </ul>
                </td>
                {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% if deplacement.validation==false %}
    <ul>
        <li>
            <a href=\"{{ path('f_deplacementjour_new',{ 'id': deplacement.id }) }}\">Créer un nouveau déplacement Jour</a>
        </li>
    </ul>
    {% endif %}
    </div>
{% endblock %}
", "FrontOfficeBundle:Default:deplacement.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/Default/deplacement.html.twig");
    }
}

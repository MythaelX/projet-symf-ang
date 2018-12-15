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
        $__internal_6e5b1bf2a3b9afdfdac24fa1488cbacbcc504b52d159aa3d9b7c96ae3d1b4b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5b1bf2a3b9afdfdac24fa1488cbacbcc504b52d159aa3d9b7c96ae3d1b4b4f->enter($__internal_6e5b1bf2a3b9afdfdac24fa1488cbacbcc504b52d159aa3d9b7c96ae3d1b4b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:deplacement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e5b1bf2a3b9afdfdac24fa1488cbacbcc504b52d159aa3d9b7c96ae3d1b4b4f->leave($__internal_6e5b1bf2a3b9afdfdac24fa1488cbacbcc504b52d159aa3d9b7c96ae3d1b4b4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfc98edf5efff1ae9c7f556dd040105505b12390001416882e9cf6e51d3785b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc98edf5efff1ae9c7f556dd040105505b12390001416882e9cf6e51d3785b0->enter($__internal_dfc98edf5efff1ae9c7f556dd040105505b12390001416882e9cf6e51d3785b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Id</th>
                ";
        // line 14
        if (($this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "validation", array()) == false)) {
            echo "<th>Actions</th>";
        }
        // line 15
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deplacementJours"] ?? $this->getContext($context, "deplacementJours")));
        foreach ($context['_seq'] as $context["_key"] => $context["deplacementJour"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "nbKm", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "montant", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "jour", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["deplacementJour"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["deplacementJour"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacementJour"], "id", array()), "html", null, true);
            echo "</td>
                ";
            // line 25
            if (($this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "validation", array()) == false)) {
                // line 26
                echo "                <td>
                    <ul>
                        <li>
                            <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacementjour_show", array("id" => $this->getAttribute($context["deplacementJour"], "id", array()))), "html", null, true);
                echo "\">show</a>
                        </li>

                        <li>
                            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacementjour_edit", array("id" => $this->getAttribute($context["deplacementJour"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                        </li>

                    </ul>
                </td>
                ";
            }
            // line 39
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deplacementJour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
    ";
        // line 43
        if (($this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "validation", array()) == false)) {
            // line 44
            echo "    <ul>
        <li>
            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacementjour_new", array("id" => $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "id", array()))), "html", null, true);
            echo "\">Créer un nouveau déplacement</a>
        </li>
    </ul>
    ";
        }
        
        $__internal_dfc98edf5efff1ae9c7f556dd040105505b12390001416882e9cf6e51d3785b0->leave($__internal_dfc98edf5efff1ae9c7f556dd040105505b12390001416882e9cf6e51d3785b0_prof);

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
        return array (  132 => 46,  128 => 44,  126 => 43,  122 => 41,  115 => 39,  106 => 33,  99 => 29,  94 => 26,  92 => 25,  88 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  67 => 19,  63 => 18,  58 => 15,  54 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
                        <li>
                            <a href=\"{{ path('f_deplacementjour_show', { 'id': deplacementJour.id }) }}\">show</a>
                        </li>

                        <li>
                            <a href=\"{{ path('f_deplacementjour_edit', { 'id': deplacementJour.id }) }}\">edit</a>
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
            <a href=\"{{ path('f_deplacementjour_new',{ 'id': deplacement.id }) }}\">Créer un nouveau déplacement</a>
        </li>
    </ul>
    {% endif %}
{% endblock %}
", "FrontOfficeBundle:Default:deplacement.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/Default/deplacement.html.twig");
    }
}

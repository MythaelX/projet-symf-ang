<?php

/* :deplacement:index.html.twig */
class __TwigTemplate_430eb669e3c483cb6d1347a54862a16dadde676342916629fa27eb9515efc438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":deplacement:index.html.twig", 1);
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
        $__internal_43b2a07e69e9d3013272a310b644213aa7bcfd39441f1a82f70dd55ff8b6d71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b2a07e69e9d3013272a310b644213aa7bcfd39441f1a82f70dd55ff8b6d71d->enter($__internal_43b2a07e69e9d3013272a310b644213aa7bcfd39441f1a82f70dd55ff8b6d71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deplacement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43b2a07e69e9d3013272a310b644213aa7bcfd39441f1a82f70dd55ff8b6d71d->leave($__internal_43b2a07e69e9d3013272a310b644213aa7bcfd39441f1a82f70dd55ff8b6d71d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae04505d9f5dab6a597c8e76762408108349eb6ac6bc56499bcf274675e7b7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae04505d9f5dab6a597c8e76762408108349eb6ac6bc56499bcf274675e7b7ff->enter($__internal_ae04505d9f5dab6a597c8e76762408108349eb6ac6bc56499bcf274675e7b7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacements list</h1>

    <table>
        <thead>
            <tr>
                <th>Annee</th>
                <th>Mois</th>
                <th>Datevalidation</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Validation</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deplacements"] ?? $this->getContext($context, "deplacements")));
        foreach ($context['_seq'] as $context["_key"] => $context["deplacement"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_show", array("id" => $this->getAttribute($context["deplacement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacement"], "annee", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacement"], "mois", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["deplacement"], "dateValidation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["deplacement"], "dateValidation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["deplacement"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["deplacement"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["deplacement"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["deplacement"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["deplacement"], "validation", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["deplacement"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_show", array("id" => $this->getAttribute($context["deplacement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_edit", array("id" => $this->getAttribute($context["deplacement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deplacement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_new");
        echo "\">Create a new deplacement</a>
        </li>
    </ul>
";
        
        $__internal_ae04505d9f5dab6a597c8e76762408108349eb6ac6bc56499bcf274675e7b7ff->leave($__internal_ae04505d9f5dab6a597c8e76762408108349eb6ac6bc56499bcf274675e7b7ff_prof);

    }

    public function getTemplateName()
    {
        return ":deplacement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  126 => 41,  114 => 35,  108 => 32,  101 => 28,  93 => 27,  87 => 26,  81 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Deplacements list</h1>

    <table>
        <thead>
            <tr>
                <th>Annee</th>
                <th>Mois</th>
                <th>Datevalidation</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Validation</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for deplacement in deplacements %}
            <tr>
                <td><a href=\"{{ path('deplacement_show', { 'id': deplacement.id }) }}\">{{ deplacement.annee }}</a></td>
                <td>{{ deplacement.mois }}</td>
                <td>{% if deplacement.dateValidation %}{{ deplacement.dateValidation|date('Y-m-d') }}{% endif %}</td>
                <td>{% if deplacement.created %}{{ deplacement.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if deplacement.updated %}{{ deplacement.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if deplacement.validation %}Yes{% else %}No{% endif %}</td>
                <td>{{ deplacement.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('deplacement_show', { 'id': deplacement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('deplacement_edit', { 'id': deplacement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('deplacement_new') }}\">Create a new deplacement</a>
        </li>
    </ul>
{% endblock %}
", ":deplacement:index.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/deplacement/index.html.twig");
    }
}

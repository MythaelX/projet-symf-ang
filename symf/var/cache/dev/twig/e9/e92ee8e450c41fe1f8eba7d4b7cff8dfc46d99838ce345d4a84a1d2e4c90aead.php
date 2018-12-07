<?php

/* deplacement/index.html.twig */
class __TwigTemplate_7be2f7511f814571519a2311c090a5788c36a08667069dea14cb3b5eac264258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "deplacement/index.html.twig", 1);
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
        $__internal_5411523e0fd0ce70d47677c7c8183f20bbf84b4a7dfc471f5d6a2e8488c27bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5411523e0fd0ce70d47677c7c8183f20bbf84b4a7dfc471f5d6a2e8488c27bba->enter($__internal_5411523e0fd0ce70d47677c7c8183f20bbf84b4a7dfc471f5d6a2e8488c27bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "deplacement/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5411523e0fd0ce70d47677c7c8183f20bbf84b4a7dfc471f5d6a2e8488c27bba->leave($__internal_5411523e0fd0ce70d47677c7c8183f20bbf84b4a7dfc471f5d6a2e8488c27bba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e6c958d60f2904b4c791174ffd5ae5344d7792c6693ff4a2e7fefadaecb9e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6c958d60f2904b4c791174ffd5ae5344d7792c6693ff4a2e7fefadaecb9e51->enter($__internal_9e6c958d60f2904b4c791174ffd5ae5344d7792c6693ff4a2e7fefadaecb9e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e6c958d60f2904b4c791174ffd5ae5344d7792c6693ff4a2e7fefadaecb9e51->leave($__internal_9e6c958d60f2904b4c791174ffd5ae5344d7792c6693ff4a2e7fefadaecb9e51_prof);

    }

    public function getTemplateName()
    {
        return "deplacement/index.html.twig";
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
", "deplacement/index.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/deplacement/index.html.twig");
    }
}
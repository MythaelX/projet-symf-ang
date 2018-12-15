<?php

/* deplacement/show.html.twig */
class __TwigTemplate_9e8820f898cdf7d6e55b5595f0b6ac12f2f7999d49918533f171901247f9aefe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", "deplacement/show.html.twig", 1);
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
        $__internal_2a5239eb8739590671e1735b0d9e4f6eeb483943da4e02dc1410a290b9a976fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5239eb8739590671e1735b0d9e4f6eeb483943da4e02dc1410a290b9a976fe->enter($__internal_2a5239eb8739590671e1735b0d9e4f6eeb483943da4e02dc1410a290b9a976fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "deplacement/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a5239eb8739590671e1735b0d9e4f6eeb483943da4e02dc1410a290b9a976fe->leave($__internal_2a5239eb8739590671e1735b0d9e4f6eeb483943da4e02dc1410a290b9a976fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bd9714b89fb56b46f172c6c3314b508c2e34b4989ccf353bbe3f87f1ecac8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd9714b89fb56b46f172c6c3314b508c2e34b4989ccf353bbe3f87f1ecac8b0->enter($__internal_4bd9714b89fb56b46f172c6c3314b508c2e34b4989ccf353bbe3f87f1ecac8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deplacement</h1>

    <table>
        <tbody>
            <tr>
                <th>Annee</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "annee", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mois</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "mois", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datevalidation</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "dateValidation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "dateValidation", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Validation</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "validation", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_edit", array("id" => $this->getAttribute(($context["deplacement"] ?? $this->getContext($context, "deplacement")), "id", array()))), "html", null, true);
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
        
        $__internal_4bd9714b89fb56b46f172c6c3314b508c2e34b4989ccf353bbe3f87f1ecac8b0->leave($__internal_4bd9714b89fb56b46f172c6c3314b508c2e34b4989ccf353bbe3f87f1ecac8b0_prof);

    }

    public function getTemplateName()
    {
        return "deplacement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 49,  122 => 47,  116 => 44,  110 => 41,  100 => 34,  89 => 30,  80 => 26,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Deplacement</h1>

    <table>
        <tbody>
            <tr>
                <th>Annee</th>
                <td>{{ deplacement.annee }}</td>
            </tr>
            <tr>
                <th>Mois</th>
                <td>{{ deplacement.mois }}</td>
            </tr>
            <tr>
                <th>Datevalidation</th>
                <td>{% if deplacement.dateValidation %}{{ deplacement.dateValidation|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if deplacement.created %}{{ deplacement.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if deplacement.updated %}{{ deplacement.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Validation</th>
                <td>{% if deplacement.validation %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ deplacement.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('deplacement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('deplacement_edit', { 'id': deplacement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "deplacement/show.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/deplacement/show.html.twig");
    }
}

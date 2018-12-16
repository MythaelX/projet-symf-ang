<?php

/* :typedeplacement:index.html.twig */
class __TwigTemplate_e4dfc24dd50d359d76a6c2466a6762906b510e60ea2fbc29b360017fb47a1ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":typedeplacement:index.html.twig", 1);
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
        $__internal_9fce7e492993b6679157e5555959d55e18b7fe146c60ed26075fb6baa4bc0218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fce7e492993b6679157e5555959d55e18b7fe146c60ed26075fb6baa4bc0218->enter($__internal_9fce7e492993b6679157e5555959d55e18b7fe146c60ed26075fb6baa4bc0218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typedeplacement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fce7e492993b6679157e5555959d55e18b7fe146c60ed26075fb6baa4bc0218->leave($__internal_9fce7e492993b6679157e5555959d55e18b7fe146c60ed26075fb6baa4bc0218_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c851321edf02596561c7fe7109641f2fef7baa423118041772efb4313701050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c851321edf02596561c7fe7109641f2fef7baa423118041772efb4313701050->enter($__internal_2c851321edf02596561c7fe7109641f2fef7baa423118041772efb4313701050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Typedeplacements list</h1>

    <table>
        <thead>
            <tr>
                <th>Typedeplacement</th>
                <th>Montant</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeDeplacements"] ?? $this->getContext($context, "typeDeplacements")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeDeplacement"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedeplacement_show", array("id" => $this->getAttribute($context["typeDeplacement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeDeplacement"], "typeDeplacement", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeDeplacement"], "montant", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["typeDeplacement"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["typeDeplacement"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["typeDeplacement"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["typeDeplacement"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeDeplacement"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedeplacement_show", array("id" => $this->getAttribute($context["typeDeplacement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedeplacement_edit", array("id" => $this->getAttribute($context["typeDeplacement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeDeplacement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedeplacement_new");
        echo "\">Create a new typeDeplacement</a>
        </li>
    </ul>
";
        
        $__internal_2c851321edf02596561c7fe7109641f2fef7baa423118041772efb4313701050->leave($__internal_2c851321edf02596561c7fe7109641f2fef7baa423118041772efb4313701050_prof);

    }

    public function getTemplateName()
    {
        return ":typedeplacement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  110 => 37,  98 => 31,  92 => 28,  85 => 24,  79 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Typedeplacements list</h1>

    <table>
        <thead>
            <tr>
                <th>Typedeplacement</th>
                <th>Montant</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for typeDeplacement in typeDeplacements %}
            <tr>
                <td><a href=\"{{ path('typedeplacement_show', { 'id': typeDeplacement.id }) }}\">{{ typeDeplacement.typeDeplacement }}</a></td>
                <td>{{ typeDeplacement.montant }}</td>
                <td>{% if typeDeplacement.created %}{{ typeDeplacement.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if typeDeplacement.updated %}{{ typeDeplacement.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ typeDeplacement.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('typedeplacement_show', { 'id': typeDeplacement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('typedeplacement_edit', { 'id': typeDeplacement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('typedeplacement_new') }}\">Create a new typeDeplacement</a>
        </li>
    </ul>
{% endblock %}
", ":typedeplacement:index.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/typedeplacement/index.html.twig");
    }
}

<?php

/* :societe:show.html.twig */
class __TwigTemplate_97e2fcfaa465b11605c2c114ffb54821bc151a55b5b654e9305cb44a46c07f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":societe:show.html.twig", 1);
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
        $__internal_442e5b842b493f6f51dc632450942ef4927a794106b0f490734da992e60f4a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442e5b842b493f6f51dc632450942ef4927a794106b0f490734da992e60f4a4d->enter($__internal_442e5b842b493f6f51dc632450942ef4927a794106b0f490734da992e60f4a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":societe:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_442e5b842b493f6f51dc632450942ef4927a794106b0f490734da992e60f4a4d->leave($__internal_442e5b842b493f6f51dc632450942ef4927a794106b0f490734da992e60f4a4d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96e4cdb31a5863f9b5c8ed8f1c4f1fc8a812948835e90601cdc0e498225cf1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e4cdb31a5863f9b5c8ed8f1c4f1fc8a812948835e90601cdc0e498225cf1cb->enter($__internal_96e4cdb31a5863f9b5c8ed8f1c4f1fc8a812948835e90601cdc0e498225cf1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Societe</h1>

    <table>
        <tbody>
            <tr>
                <th>Societe</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "societe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("societe_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("societe_edit", array("id" => $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_96e4cdb31a5863f9b5c8ed8f1c4f1fc8a812948835e90601cdc0e498225cf1cb->leave($__internal_96e4cdb31a5863f9b5c8ed8f1c4f1fc8a812948835e90601cdc0e498225cf1cb_prof);

    }

    public function getTemplateName()
    {
        return ":societe:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Societe</h1>

    <table>
        <tbody>
            <tr>
                <th>Societe</th>
                <td>{{ societe.societe }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ societe.adresse }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ societe.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('societe_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('societe_edit', { 'id': societe.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":societe:show.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/societe/show.html.twig");
    }
}

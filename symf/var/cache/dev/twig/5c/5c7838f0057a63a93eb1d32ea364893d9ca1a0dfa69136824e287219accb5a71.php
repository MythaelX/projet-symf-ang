<?php

/* FrontOfficeBundle:deplacementjour:show.html.twig */
class __TwigTemplate_8b728464ba56593dd76caeaae0cbf1ffd06b9a4faea7a2beadce70d886f128bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontOfficeBundle:deplacementjour:show.html.twig", 1);
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
        $__internal_8f32ce905252554bb7365c79e4d8f7cb37b69fb3577381426ae5bf1a58dbe2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f32ce905252554bb7365c79e4d8f7cb37b69fb3577381426ae5bf1a58dbe2be->enter($__internal_8f32ce905252554bb7365c79e4d8f7cb37b69fb3577381426ae5bf1a58dbe2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:deplacementjour:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f32ce905252554bb7365c79e4d8f7cb37b69fb3577381426ae5bf1a58dbe2be->leave($__internal_8f32ce905252554bb7365c79e4d8f7cb37b69fb3577381426ae5bf1a58dbe2be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_239adc7218a635463e2bdc9d4ac02b714c888bab616a1ce605e270ebf6798dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239adc7218a635463e2bdc9d4ac02b714c888bab616a1ce605e270ebf6798dfd->enter($__internal_239adc7218a635463e2bdc9d4ac02b714c888bab616a1ce605e270ebf6798dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"modifFormulaire\">
    <h1>Déplacement jour</h1>

    <table>
        <tbody>
            <tr>
                <th>Nbkm</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "nbKm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "montant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Jour</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "jour", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 23
        if ($this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 27
        if ($this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 31
        if ($this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacement_show", array("id" => $this->getAttribute($this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "deplacement", array()), "id", array()))), "html", null, true);
        echo "\">Retour à la liste</a>
        </li>
        <li>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacementjour_edit", array("id" => $this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
        </li>
        <li>
            ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 50
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</div>
";
        
        $__internal_239adc7218a635463e2bdc9d4ac02b714c888bab616a1ce605e270ebf6798dfd->leave($__internal_239adc7218a635463e2bdc9d4ac02b714c888bab616a1ce605e270ebf6798dfd_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:deplacementjour:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  119 => 48,  113 => 45,  107 => 42,  97 => 35,  88 => 31,  79 => 27,  70 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
<div id=\"modifFormulaire\">
    <h1>Déplacement jour</h1>

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
            <a href=\"{{ path('f_deplacement_show',{ 'id': deplacementJour.deplacement.id }) }}\">Retour à la liste</a>
        </li>
        <li>
            <a href=\"{{ path('f_deplacementjour_edit', { 'id': deplacementJour.id }) }}\">Modifier</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</div>
{% endblock %}
", "FrontOfficeBundle:deplacementjour:show.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/deplacementjour/show.html.twig");
    }
}

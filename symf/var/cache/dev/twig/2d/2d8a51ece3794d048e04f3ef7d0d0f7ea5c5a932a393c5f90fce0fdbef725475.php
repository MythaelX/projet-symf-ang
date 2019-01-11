<?php

/* BackOfficeBundle:Default:stat.html.twig */
class __TwigTemplate_62afa07350dbb7517eeb91ddb3861ac0c6c881c337e4a74fd1d993ef00913e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", "BackOfficeBundle:Default:stat.html.twig", 1);
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
        $__internal_d1afacc04846213f3d0d8991dd4f5528b7de839b39c9c73459069fc2817dc84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1afacc04846213f3d0d8991dd4f5528b7de839b39c9c73459069fc2817dc84c->enter($__internal_d1afacc04846213f3d0d8991dd4f5528b7de839b39c9c73459069fc2817dc84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:stat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1afacc04846213f3d0d8991dd4f5528b7de839b39c9c73459069fc2817dc84c->leave($__internal_d1afacc04846213f3d0d8991dd4f5528b7de839b39c9c73459069fc2817dc84c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7da9a0cb5f6c4dc2a98bee27f45379d5a1f6841c90c128072bd08dce0a2fe83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da9a0cb5f6c4dc2a98bee27f45379d5a1f6841c90c128072bd08dce0a2fe83e->enter($__internal_7da9a0cb5f6c4dc2a98bee27f45379d5a1f6841c90c128072bd08dce0a2fe83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div id=\"tableau\">
Nombre d'utilisateur par ville :
<table>
    <thead>
        <tr>
            <th>Ville</th>
            <th>nombre d'utilisateur</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stat_ville_user"] ?? $this->getContext($context, "stat_ville_user")));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 14
            echo "        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "ville", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "nombre_utilisateur", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
</div>
<div id=\"tableau\">
Nombre d'utilisateur et de kilometre par societe :
<table>
    <thead>
        <tr>
            <th>Societe</th>
            <th>nombre d'utilisateur</th>
            <th>nombre de kilometre</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stat_societe_user"] ?? $this->getContext($context, "stat_societe_user")));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 34
            echo "        <tr>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "societe", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "nombre_utilisateur", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["instance"], "nombre_kilometre", array()), 2, "floor"), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </tbody>
</table>
</div>
<div id=\"tableau\">
Nombre de km  et par utilisateur par societe :
<table>
    <thead>
        <tr>
            <th>Societe</th>
            <th>Nom utilisateur</th>
            <th>nombre de kilometre </th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stat_societe_kilo_user"] ?? $this->getContext($context, "stat_societe_kilo_user")));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 55
            echo "        <tr>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "societe", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "nom_utilisateur", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "nombre_kilo_utilisateur", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </tbody>
</table>
</div>

";
        
        $__internal_7da9a0cb5f6c4dc2a98bee27f45379d5a1f6841c90c128072bd08dce0a2fe83e->leave($__internal_7da9a0cb5f6c4dc2a98bee27f45379d5a1f6841c90c128072bd08dce0a2fe83e_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 61,  143 => 58,  139 => 57,  135 => 56,  132 => 55,  128 => 54,  112 => 40,  103 => 37,  99 => 36,  95 => 35,  92 => 34,  88 => 33,  72 => 19,  63 => 16,  59 => 15,  56 => 14,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
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
<div id=\"tableau\">
Nombre d'utilisateur par ville :
<table>
    <thead>
        <tr>
            <th>Ville</th>
            <th>nombre d'utilisateur</th>
        </tr>
    </thead>
    <tbody>
    {% for instance in stat_ville_user %}
        <tr>
            <td>{{ instance.ville }}</a></td>
            <td>{{ instance.nombre_utilisateur }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
</div>
<div id=\"tableau\">
Nombre d'utilisateur et de kilometre par societe :
<table>
    <thead>
        <tr>
            <th>Societe</th>
            <th>nombre d'utilisateur</th>
            <th>nombre de kilometre</th>
        </tr>
    </thead>
    <tbody>
    {% for instance in stat_societe_user %}
        <tr>
            <td>{{ instance.societe }}</a></td>
            <td>{{ instance.nombre_utilisateur }}</td>
            <td>{{ instance.nombre_kilometre|round(2, 'floor') }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
</div>
<div id=\"tableau\">
Nombre de km  et par utilisateur par societe :
<table>
    <thead>
        <tr>
            <th>Societe</th>
            <th>Nom utilisateur</th>
            <th>nombre de kilometre </th>
        </tr>
    </thead>
    <tbody>
    {% for instance in stat_societe_kilo_user %}
        <tr>
            <td>{{ instance.societe }}</a></td>
            <td>{{ instance.nom_utilisateur }}</a></td>
            <td>{{ instance.nombre_kilo_utilisateur }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
</div>

{% endblock %}
", "BackOfficeBundle:Default:stat.html.twig", "/home/clement/cir3/projet 2.0/symf/src/BackOfficeBundle/Resources/views/Default/stat.html.twig");
    }
}

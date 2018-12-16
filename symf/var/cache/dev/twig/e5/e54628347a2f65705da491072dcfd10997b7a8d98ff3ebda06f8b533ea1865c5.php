<?php

/* BackOfficeBundle:Default:stat.html.twig */
class __TwigTemplate_180e6c5c21f0fef558ee92a6b335b05c6bfba94573e1c76d49a1be91cc97feee extends Twig_Template
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
        $__internal_1e95c7eff3dbafcdf6c261912998763cc912c97607e0409e5452b4883dd50951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e95c7eff3dbafcdf6c261912998763cc912c97607e0409e5452b4883dd50951->enter($__internal_1e95c7eff3dbafcdf6c261912998763cc912c97607e0409e5452b4883dd50951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:stat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e95c7eff3dbafcdf6c261912998763cc912c97607e0409e5452b4883dd50951->leave($__internal_1e95c7eff3dbafcdf6c261912998763cc912c97607e0409e5452b4883dd50951_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6de12732b3ebde2c007dee687456de11509890c153fafaf80c3cfbeaf86c1050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de12732b3ebde2c007dee687456de11509890c153fafaf80c3cfbeaf86c1050->enter($__internal_6de12732b3ebde2c007dee687456de11509890c153fafaf80c3cfbeaf86c1050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div>
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
<div>
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
<div>
nombre de km par mois et par utilisateur par societe :
<table>
    <thead>
        <tr>
            <th>Societe</th>
            <th>nombre de kilometre/utilisateur </th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stat_societe_kilo_user"] ?? $this->getContext($context, "stat_societe_kilo_user")));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 54
            echo "        <tr>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "societe", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "nombre_kilo_utilisateur", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </tbody>
</table>
</div>
";
        
        $__internal_6de12732b3ebde2c007dee687456de11509890c153fafaf80c3cfbeaf86c1050->leave($__internal_6de12732b3ebde2c007dee687456de11509890c153fafaf80c3cfbeaf86c1050_prof);

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
        return array (  147 => 59,  138 => 56,  134 => 55,  131 => 54,  127 => 53,  112 => 40,  103 => 37,  99 => 36,  95 => 35,  92 => 34,  88 => 33,  72 => 19,  63 => 16,  59 => 15,  56 => 14,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
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
<div>
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
<div>
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
<div>
nombre de km par mois et par utilisateur par societe :
<table>
    <thead>
        <tr>
            <th>Societe</th>
            <th>nombre de kilometre/utilisateur </th>
        </tr>
    </thead>
    <tbody>
    {% for instance in stat_societe_kilo_user %}
        <tr>
            <td>{{ instance.societe }}</a></td>
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

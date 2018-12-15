<?php

/* ville/index.html.twig */
class __TwigTemplate_761afbb14bae63a30af71c61794ae8d6433f97f00cfb9192b1e0ea2c09817130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", "ville/index.html.twig", 1);
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
        $__internal_53451afe7364fb61718d9945a5e34e916a38391bf48cbf6f6e311d95ef9dbf3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53451afe7364fb61718d9945a5e34e916a38391bf48cbf6f6e311d95ef9dbf3e->enter($__internal_53451afe7364fb61718d9945a5e34e916a38391bf48cbf6f6e311d95ef9dbf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ville/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53451afe7364fb61718d9945a5e34e916a38391bf48cbf6f6e311d95ef9dbf3e->leave($__internal_53451afe7364fb61718d9945a5e34e916a38391bf48cbf6f6e311d95ef9dbf3e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2da6eaa6894063fe834761d65cf44c31916f5b92d563bc300fa34369ef73d7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da6eaa6894063fe834761d65cf44c31916f5b92d563bc300fa34369ef73d7ae->enter($__internal_2da6eaa6894063fe834761d65cf44c31916f5b92d563bc300fa34369ef73d7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Villes list</h1>

    <table>
        <thead>
            <tr>
                <th>Ville</th>
                <th>Cp</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_show", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "cp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_show", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_edit", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_new");
        echo "\">Create a new ville</a>
        </li>
    </ul>
";
        
        $__internal_2da6eaa6894063fe834761d65cf44c31916f5b92d563bc300fa34369ef73d7ae->leave($__internal_2da6eaa6894063fe834761d65cf44c31916f5b92d563bc300fa34369ef73d7ae_prof);

    }

    public function getTemplateName()
    {
        return "ville/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Villes list</h1>

    <table>
        <thead>
            <tr>
                <th>Ville</th>
                <th>Cp</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ville in villes %}
            <tr>
                <td><a href=\"{{ path('ville_show', { 'id': ville.id }) }}\">{{ ville.ville }}</a></td>
                <td>{{ ville.cp }}</td>
                <td>{{ ville.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ville_show', { 'id': ville.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ville_edit', { 'id': ville.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ville_new') }}\">Create a new ville</a>
        </li>
    </ul>
{% endblock %}
", "ville/index.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/ville/index.html.twig");
    }
}

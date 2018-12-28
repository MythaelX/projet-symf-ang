<?php

/* :societe:index.html.twig */
class __TwigTemplate_8bb60e241c7e36fb017312475c8594aafffe79210d1e4ba23a10e2158e9dd7e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":societe:index.html.twig", 1);
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
        $__internal_38e90ffe6351de94c1d00dced3374f358e29b64ef7a517b9862877cd5f5a3067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e90ffe6351de94c1d00dced3374f358e29b64ef7a517b9862877cd5f5a3067->enter($__internal_38e90ffe6351de94c1d00dced3374f358e29b64ef7a517b9862877cd5f5a3067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":societe:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e90ffe6351de94c1d00dced3374f358e29b64ef7a517b9862877cd5f5a3067->leave($__internal_38e90ffe6351de94c1d00dced3374f358e29b64ef7a517b9862877cd5f5a3067_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27170613a080686e350fe357a4d748aa9e32cdccb51e0d355f39164496fe3b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27170613a080686e350fe357a4d748aa9e32cdccb51e0d355f39164496fe3b99->enter($__internal_27170613a080686e350fe357a4d748aa9e32cdccb51e0d355f39164496fe3b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Societes list</h1>

    <table>
        <thead>
            <tr>
                <th>Societe</th>
                <th>Adresse</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["societes"] ?? $this->getContext($context, "societes")));
        foreach ($context['_seq'] as $context["_key"] => $context["societe"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("societe_show", array("id" => $this->getAttribute($context["societe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["societe"], "societe", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["societe"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["societe"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("societe_show", array("id" => $this->getAttribute($context["societe"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("societe_edit", array("id" => $this->getAttribute($context["societe"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['societe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("societe_new");
        echo "\">Create a new societe</a>
        </li>
    </ul>
";
        
        $__internal_27170613a080686e350fe357a4d748aa9e32cdccb51e0d355f39164496fe3b99->leave($__internal_27170613a080686e350fe357a4d748aa9e32cdccb51e0d355f39164496fe3b99_prof);

    }

    public function getTemplateName()
    {
        return ":societe:index.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Societes list</h1>

    <table>
        <thead>
            <tr>
                <th>Societe</th>
                <th>Adresse</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for societe in societes %}
            <tr>
                <td><a href=\"{{ path('societe_show', { 'id': societe.id }) }}\">{{ societe.societe }}</a></td>
                <td>{{ societe.adresse }}</td>
                <td>{{ societe.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('societe_show', { 'id': societe.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('societe_edit', { 'id': societe.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('societe_new') }}\">Create a new societe</a>
        </li>
    </ul>
{% endblock %}
", ":societe:index.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/societe/index.html.twig");
    }
}

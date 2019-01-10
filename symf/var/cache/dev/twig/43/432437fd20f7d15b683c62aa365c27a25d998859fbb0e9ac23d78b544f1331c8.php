<?php

/* :typedeplacement:show.html.twig */
class __TwigTemplate_cf8b8045c0c3189625baa4bde6787573928da24d67d427ba143c820de05a0f1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":typedeplacement:show.html.twig", 1);
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
        $__internal_574cd1308da40fa6b20630736ce40285e71dfa0c0ea7d853d987e3bd4880f1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574cd1308da40fa6b20630736ce40285e71dfa0c0ea7d853d987e3bd4880f1c2->enter($__internal_574cd1308da40fa6b20630736ce40285e71dfa0c0ea7d853d987e3bd4880f1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typedeplacement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574cd1308da40fa6b20630736ce40285e71dfa0c0ea7d853d987e3bd4880f1c2->leave($__internal_574cd1308da40fa6b20630736ce40285e71dfa0c0ea7d853d987e3bd4880f1c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1b00d99e543f22f466c43f6b2783846b6efe2b69d92b07ba7759ed77bda1144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b00d99e543f22f466c43f6b2783846b6efe2b69d92b07ba7759ed77bda1144->enter($__internal_b1b00d99e543f22f466c43f6b2783846b6efe2b69d92b07ba7759ed77bda1144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Typedeplacement</h1>

    <table>
        <tbody>
            <tr>
                <th>Typedeplacement</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["typeDeplacement"] ?? $this->getContext($context, "typeDeplacement")), "typeDeplacement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["typeDeplacement"] ?? $this->getContext($context, "typeDeplacement")), "montant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["typeDeplacement"] ?? $this->getContext($context, "typeDeplacement")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["typeDeplacement"] ?? $this->getContext($context, "typeDeplacement")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["typeDeplacement"] ?? $this->getContext($context, "typeDeplacement")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["typeDeplacement"] ?? $this->getContext($context, "typeDeplacement")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["typeDeplacement"] ?? $this->getContext($context, "typeDeplacement")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedeplacement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedeplacement_edit", array("id" => $this->getAttribute(($context["typeDeplacement"] ?? $this->getContext($context, "typeDeplacement")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b1b00d99e543f22f466c43f6b2783846b6efe2b69d92b07ba7759ed77bda1144->leave($__internal_b1b00d99e543f22f466c43f6b2783846b6efe2b69d92b07ba7759ed77bda1144_prof);

    }

    public function getTemplateName()
    {
        return ":typedeplacement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  102 => 39,  96 => 36,  90 => 33,  80 => 26,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Typedeplacement</h1>

    <table>
        <tbody>
            <tr>
                <th>Typedeplacement</th>
                <td>{{ typeDeplacement.typeDeplacement }}</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>{{ typeDeplacement.montant }}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if typeDeplacement.created %}{{ typeDeplacement.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if typeDeplacement.updated %}{{ typeDeplacement.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ typeDeplacement.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('typedeplacement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('typedeplacement_edit', { 'id': typeDeplacement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":typedeplacement:show.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/typedeplacement/show.html.twig");
    }
}

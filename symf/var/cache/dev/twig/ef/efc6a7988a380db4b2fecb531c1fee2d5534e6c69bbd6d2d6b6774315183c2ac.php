<?php

/* :typedeplacement:show.html.twig */
class __TwigTemplate_2dfa8139c07dff49c5414508ccec4da4fb894561777e2f77f774bba6b538f16c extends Twig_Template
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
        $__internal_94e4a951a6ec19e17a358c2309ba07052d6b6a32d84b023bd48e7b093b1ca943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e4a951a6ec19e17a358c2309ba07052d6b6a32d84b023bd48e7b093b1ca943->enter($__internal_94e4a951a6ec19e17a358c2309ba07052d6b6a32d84b023bd48e7b093b1ca943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typedeplacement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94e4a951a6ec19e17a358c2309ba07052d6b6a32d84b023bd48e7b093b1ca943->leave($__internal_94e4a951a6ec19e17a358c2309ba07052d6b6a32d84b023bd48e7b093b1ca943_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47a6614cb68db866670d7a2fb11002591988dbb0f215036862aac7a8a36200c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a6614cb68db866670d7a2fb11002591988dbb0f215036862aac7a8a36200c8->enter($__internal_47a6614cb68db866670d7a2fb11002591988dbb0f215036862aac7a8a36200c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47a6614cb68db866670d7a2fb11002591988dbb0f215036862aac7a8a36200c8->leave($__internal_47a6614cb68db866670d7a2fb11002591988dbb0f215036862aac7a8a36200c8_prof);

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
", ":typedeplacement:show.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/typedeplacement/show.html.twig");
    }
}

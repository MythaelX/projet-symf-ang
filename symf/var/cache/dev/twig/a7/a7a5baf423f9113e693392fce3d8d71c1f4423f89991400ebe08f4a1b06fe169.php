<?php

/* :ville:show.html.twig */
class __TwigTemplate_b8a35e814f0aa79370cd29d667918175b04710ba7854fbbf4d4636a0bc8fb5b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":ville:show.html.twig", 1);
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
        $__internal_35cd19d2e37bb065e8ed0dfe3c5d61d98b76c2ed641ffe169f7af98d0ce70ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cd19d2e37bb065e8ed0dfe3c5d61d98b76c2ed641ffe169f7af98d0ce70ffe->enter($__internal_35cd19d2e37bb065e8ed0dfe3c5d61d98b76c2ed641ffe169f7af98d0ce70ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ville:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35cd19d2e37bb065e8ed0dfe3c5d61d98b76c2ed641ffe169f7af98d0ce70ffe->leave($__internal_35cd19d2e37bb065e8ed0dfe3c5d61d98b76c2ed641ffe169f7af98d0ce70ffe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f347071fb99bc541efe1c0d07b617788ffe284b63eea71f168827b6c03e3626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f347071fb99bc541efe1c0d07b617788ffe284b63eea71f168827b6c03e3626->enter($__internal_4f347071fb99bc541efe1c0d07b617788ffe284b63eea71f168827b6c03e3626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ville</h1>

    <table>
        <tbody>
            <tr>
                <th>Ville</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cp</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "cp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_edit", array("id" => $this->getAttribute(($context["ville"] ?? $this->getContext($context, "ville")), "id", array()))), "html", null, true);
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
        
        $__internal_4f347071fb99bc541efe1c0d07b617788ffe284b63eea71f168827b6c03e3626->leave($__internal_4f347071fb99bc541efe1c0d07b617788ffe284b63eea71f168827b6c03e3626_prof);

    }

    public function getTemplateName()
    {
        return ":ville:show.html.twig";
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
        return new Twig_Source("{% extends 'baseBack.html.twig' %}

{% block body %}
    <h1>Ville</h1>

    <table>
        <tbody>
            <tr>
                <th>Ville</th>
                <td>{{ ville.ville }}</td>
            </tr>
            <tr>
                <th>Cp</th>
                <td>{{ ville.cp }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ ville.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ville_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ville_edit', { 'id': ville.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":ville:show.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/ville/show.html.twig");
    }
}

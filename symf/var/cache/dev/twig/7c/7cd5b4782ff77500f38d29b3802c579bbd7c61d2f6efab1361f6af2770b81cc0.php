<?php

/* societe/show.html.twig */
class __TwigTemplate_3c9ffce68e2117db9af823e7bddc41f997222efb833491f4edd66e919baca374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", "societe/show.html.twig", 1);
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
        $__internal_8a52ee82fb6f495dbdb3edc3bc18d1ce4b82ba98393f1be494b8957f44508ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a52ee82fb6f495dbdb3edc3bc18d1ce4b82ba98393f1be494b8957f44508ce6->enter($__internal_8a52ee82fb6f495dbdb3edc3bc18d1ce4b82ba98393f1be494b8957f44508ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "societe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a52ee82fb6f495dbdb3edc3bc18d1ce4b82ba98393f1be494b8957f44508ce6->leave($__internal_8a52ee82fb6f495dbdb3edc3bc18d1ce4b82ba98393f1be494b8957f44508ce6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b30b17c5724638728cf62f7936c6ee5de1112e8828e7f321c76d12561c93e432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30b17c5724638728cf62f7936c6ee5de1112e8828e7f321c76d12561c93e432->enter($__internal_b30b17c5724638728cf62f7936c6ee5de1112e8828e7f321c76d12561c93e432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b30b17c5724638728cf62f7936c6ee5de1112e8828e7f321c76d12561c93e432->leave($__internal_b30b17c5724638728cf62f7936c6ee5de1112e8828e7f321c76d12561c93e432_prof);

    }

    public function getTemplateName()
    {
        return "societe/show.html.twig";
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
", "societe/show.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/societe/show.html.twig");
    }
}

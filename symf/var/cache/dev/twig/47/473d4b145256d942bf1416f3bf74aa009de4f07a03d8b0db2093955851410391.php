<?php

/* :typeuser:show.html.twig */
class __TwigTemplate_74e0b6c58a3a1c9796bddfa58d1640b176918825cd30510d00977f37096d72a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":typeuser:show.html.twig", 1);
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
        $__internal_2d605dc588ae4ee81b3461be3caa368ba7aaf235a1b357ba8508cc4c4196673a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d605dc588ae4ee81b3461be3caa368ba7aaf235a1b357ba8508cc4c4196673a->enter($__internal_2d605dc588ae4ee81b3461be3caa368ba7aaf235a1b357ba8508cc4c4196673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typeuser:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d605dc588ae4ee81b3461be3caa368ba7aaf235a1b357ba8508cc4c4196673a->leave($__internal_2d605dc588ae4ee81b3461be3caa368ba7aaf235a1b357ba8508cc4c4196673a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_164f2a7c7bcf4e81df2abb4bcc4f5c70fc2c64f00be2a07031519cba06c1332b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164f2a7c7bcf4e81df2abb4bcc4f5c70fc2c64f00be2a07031519cba06c1332b->enter($__internal_164f2a7c7bcf4e81df2abb4bcc4f5c70fc2c64f00be2a07031519cba06c1332b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Typeuser</h1>

    <table>
        <tbody>
            <tr>
                <th>Typeuser</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["typeUser"] ?? $this->getContext($context, "typeUser")), "typeUser", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["typeUser"] ?? $this->getContext($context, "typeUser")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeuser_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeuser_edit", array("id" => $this->getAttribute(($context["typeUser"] ?? $this->getContext($context, "typeUser")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_164f2a7c7bcf4e81df2abb4bcc4f5c70fc2c64f00be2a07031519cba06c1332b->leave($__internal_164f2a7c7bcf4e81df2abb4bcc4f5c70fc2c64f00be2a07031519cba06c1332b_prof);

    }

    public function getTemplateName()
    {
        return ":typeuser:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Typeuser</h1>

    <table>
        <tbody>
            <tr>
                <th>Typeuser</th>
                <td>{{ typeUser.typeUser }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ typeUser.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('typeuser_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('typeuser_edit', { 'id': typeUser.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":typeuser:show.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/typeuser/show.html.twig");
    }
}

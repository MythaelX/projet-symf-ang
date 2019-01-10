<?php

/* :typeuser:index.html.twig */
class __TwigTemplate_27eb4a45aaa9dfe0325df422e3bef250e22212b9d5641faa1cc13e4edebf4389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":typeuser:index.html.twig", 1);
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
        $__internal_ee33421b07d4a57c2405fd132ae205f0cff31dd928ee7b0b588c86fb3817ac4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee33421b07d4a57c2405fd132ae205f0cff31dd928ee7b0b588c86fb3817ac4c->enter($__internal_ee33421b07d4a57c2405fd132ae205f0cff31dd928ee7b0b588c86fb3817ac4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typeuser:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee33421b07d4a57c2405fd132ae205f0cff31dd928ee7b0b588c86fb3817ac4c->leave($__internal_ee33421b07d4a57c2405fd132ae205f0cff31dd928ee7b0b588c86fb3817ac4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d858fd2e2c315aebdc9520fd389c8595b65bf64485d8ee3cb1af6ffdac54c5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d858fd2e2c315aebdc9520fd389c8595b65bf64485d8ee3cb1af6ffdac54c5b2->enter($__internal_d858fd2e2c315aebdc9520fd389c8595b65bf64485d8ee3cb1af6ffdac54c5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Typeusers list</h1>

    <table>
        <thead>
            <tr>
                <th>Typeuser</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeUsers"] ?? $this->getContext($context, "typeUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeUser"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeuser_show", array("id" => $this->getAttribute($context["typeUser"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeUser"], "typeUser", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeUser"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeuser_show", array("id" => $this->getAttribute($context["typeUser"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeuser_edit", array("id" => $this->getAttribute($context["typeUser"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeuser_new");
        echo "\">Create a new typeUser</a>
        </li>
    </ul>
";
        
        $__internal_d858fd2e2c315aebdc9520fd389c8595b65bf64485d8ee3cb1af6ffdac54c5b2->leave($__internal_d858fd2e2c315aebdc9520fd389c8595b65bf64485d8ee3cb1af6ffdac54c5b2_prof);

    }

    public function getTemplateName()
    {
        return ":typeuser:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Typeusers list</h1>

    <table>
        <thead>
            <tr>
                <th>Typeuser</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for typeUser in typeUsers %}
            <tr>
                <td><a href=\"{{ path('typeuser_show', { 'id': typeUser.id }) }}\">{{ typeUser.typeUser }}</a></td>
                <td>{{ typeUser.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('typeuser_show', { 'id': typeUser.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('typeuser_edit', { 'id': typeUser.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('typeuser_new') }}\">Create a new typeUser</a>
        </li>
    </ul>
{% endblock %}
", ":typeuser:index.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/typeuser/index.html.twig");
    }
}

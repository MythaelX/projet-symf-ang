<?php

/* :typeuser:index.html.twig */
class __TwigTemplate_1929057e0c9e6e05a6fa1b3e4cbe20c67f83dc165ce2cf456e58230ab4a34700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":typeuser:index.html.twig", 1);
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
        $__internal_68669ccad3b5c8dc143cf6836064934fc009803c5c2a89d9a4a5ae6b10a70d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68669ccad3b5c8dc143cf6836064934fc009803c5c2a89d9a4a5ae6b10a70d11->enter($__internal_68669ccad3b5c8dc143cf6836064934fc009803c5c2a89d9a4a5ae6b10a70d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typeuser:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68669ccad3b5c8dc143cf6836064934fc009803c5c2a89d9a4a5ae6b10a70d11->leave($__internal_68669ccad3b5c8dc143cf6836064934fc009803c5c2a89d9a4a5ae6b10a70d11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44ca8e8634476b1b4d087df1ae1f21c4d9d2c20a84e19d75b08c7ad4e60c9e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ca8e8634476b1b4d087df1ae1f21c4d9d2c20a84e19d75b08c7ad4e60c9e77->enter($__internal_44ca8e8634476b1b4d087df1ae1f21c4d9d2c20a84e19d75b08c7ad4e60c9e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_44ca8e8634476b1b4d087df1ae1f21c4d9d2c20a84e19d75b08c7ad4e60c9e77->leave($__internal_44ca8e8634476b1b4d087df1ae1f21c4d9d2c20a84e19d75b08c7ad4e60c9e77_prof);

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
        return new Twig_Source("{% extends 'base.html.twig' %}

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
", ":typeuser:index.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/typeuser/index.html.twig");
    }
}

<?php

/* :user:show.html.twig */
class __TwigTemplate_f33d150d9c30fa10148c92eb4add46e344c63a601268b32aef7aa7f4dd5a87df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_0061936b0a4a06745a4e9c230fee9c6638c2d11af4528de59e4c04b1efb4e1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0061936b0a4a06745a4e9c230fee9c6638c2d11af4528de59e4c04b1efb4e1f0->enter($__internal_0061936b0a4a06745a4e9c230fee9c6638c2d11af4528de59e4c04b1efb4e1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0061936b0a4a06745a4e9c230fee9c6638c2d11af4528de59e4c04b1efb4e1f0->leave($__internal_0061936b0a4a06745a4e9c230fee9c6638c2d11af4528de59e4c04b1efb4e1f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97399a2690a6d3d421666842d78607482ce873931b6a71f65743deb3f0319517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97399a2690a6d3d421666842d78607482ce873931b6a71f65743deb3f0319517->enter($__internal_97399a2690a6d3d421666842d78607482ce873931b6a71f65743deb3f0319517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Distanceinit</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "distanceInit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_97399a2690a6d3d421666842d78607482ce873931b6a71f65743deb3f0319517->leave($__internal_97399a2690a6d3d421666842d78607482ce873931b6a71f65743deb3f0319517_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 49,  116 => 47,  110 => 44,  104 => 41,  94 => 34,  85 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ user.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ user.prenom }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ user.adresse }}</td>
            </tr>
            <tr>
                <th>Distanceinit</th>
                <td>{{ user.distanceInit }}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if user.created %}{{ user.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if user.updated %}{{ user.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:show.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/user/show.html.twig");
    }
}

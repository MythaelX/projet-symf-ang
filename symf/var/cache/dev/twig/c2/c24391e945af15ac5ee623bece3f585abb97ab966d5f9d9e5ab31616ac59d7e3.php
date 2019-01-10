<?php

/* :ville:index.html.twig */
class __TwigTemplate_14e7157e7eba0c374eb3d82b8ba432e254fb9b2bf3686a5ff57c20641453d5f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":ville:index.html.twig", 1);
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
        $__internal_8a8fde0c2a902cbf329f6718c6c20783cda7d66e50bc598edf2b64e138e1c5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8fde0c2a902cbf329f6718c6c20783cda7d66e50bc598edf2b64e138e1c5df->enter($__internal_8a8fde0c2a902cbf329f6718c6c20783cda7d66e50bc598edf2b64e138e1c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ville:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a8fde0c2a902cbf329f6718c6c20783cda7d66e50bc598edf2b64e138e1c5df->leave($__internal_8a8fde0c2a902cbf329f6718c6c20783cda7d66e50bc598edf2b64e138e1c5df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaf8160bd6b66e19fb877ff67752d70131157d0c2d4633dcbd66ee61d7037a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf8160bd6b66e19fb877ff67752d70131157d0c2d4633dcbd66ee61d7037a9f->enter($__internal_aaf8160bd6b66e19fb877ff67752d70131157d0c2d4633dcbd66ee61d7037a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aaf8160bd6b66e19fb877ff67752d70131157d0c2d4633dcbd66ee61d7037a9f->leave($__internal_aaf8160bd6b66e19fb877ff67752d70131157d0c2d4633dcbd66ee61d7037a9f_prof);

    }

    public function getTemplateName()
    {
        return ":ville:index.html.twig";
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
", ":ville:index.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/ville/index.html.twig");
    }
}

<?php

/* :service:show.html.twig */
class __TwigTemplate_778e5ef427213ba19a3d177ab27532676abbb8c894cf918d97331969cc8c5e1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":service:show.html.twig", 1);
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
        $__internal_d4e011a4acdb6ff60ebaf55cfd86095ff57c754babadd5c56950599d055987b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e011a4acdb6ff60ebaf55cfd86095ff57c754babadd5c56950599d055987b6->enter($__internal_d4e011a4acdb6ff60ebaf55cfd86095ff57c754babadd5c56950599d055987b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4e011a4acdb6ff60ebaf55cfd86095ff57c754babadd5c56950599d055987b6->leave($__internal_d4e011a4acdb6ff60ebaf55cfd86095ff57c754babadd5c56950599d055987b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_519706f6574ee3dfbfebf226e5d52a8b6ec66c56baf71b651cd63c6686bca8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519706f6574ee3dfbfebf226e5d52a8b6ec66c56baf71b651cd63c6686bca8e6->enter($__internal_519706f6574ee3dfbfebf226e5d52a8b6ec66c56baf71b651cd63c6686bca8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Service</h1>

    <table>
        <tbody>
            <tr>
                <th>Service</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "service", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_edit", array("id" => $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "id", array()))), "html", null, true);
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
        
        $__internal_519706f6574ee3dfbfebf226e5d52a8b6ec66c56baf71b651cd63c6686bca8e6->leave($__internal_519706f6574ee3dfbfebf226e5d52a8b6ec66c56baf71b651cd63c6686bca8e6_prof);

    }

    public function getTemplateName()
    {
        return ":service:show.html.twig";
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
    <h1>Service</h1>

    <table>
        <tbody>
            <tr>
                <th>Service</th>
                <td>{{ service.service }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ service.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('service_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('service_edit', { 'id': service.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":service:show.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/app/Resources/views/service/show.html.twig");
    }
}

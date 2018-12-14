<?php

/* :service:show.html.twig */
class __TwigTemplate_a64425c6fd97cc3788330ccbf184966b1db084a3e0d14fccdf17b858ba161c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":service:show.html.twig", 1);
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
        $__internal_ea99e57ac5a4395941c330e6621e69050e6bbacbc184d112930edd984f73929e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea99e57ac5a4395941c330e6621e69050e6bbacbc184d112930edd984f73929e->enter($__internal_ea99e57ac5a4395941c330e6621e69050e6bbacbc184d112930edd984f73929e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea99e57ac5a4395941c330e6621e69050e6bbacbc184d112930edd984f73929e->leave($__internal_ea99e57ac5a4395941c330e6621e69050e6bbacbc184d112930edd984f73929e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88f14e3f052fdb00b9df0a87edd240ea6137979f7b29e4c49e3434e6eb0b0778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f14e3f052fdb00b9df0a87edd240ea6137979f7b29e4c49e3434e6eb0b0778->enter($__internal_88f14e3f052fdb00b9df0a87edd240ea6137979f7b29e4c49e3434e6eb0b0778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_88f14e3f052fdb00b9df0a87edd240ea6137979f7b29e4c49e3434e6eb0b0778->leave($__internal_88f14e3f052fdb00b9df0a87edd240ea6137979f7b29e4c49e3434e6eb0b0778_prof);

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
        return new Twig_Source("{% extends 'base.html.twig' %}

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
", ":service:show.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/service/show.html.twig");
    }
}

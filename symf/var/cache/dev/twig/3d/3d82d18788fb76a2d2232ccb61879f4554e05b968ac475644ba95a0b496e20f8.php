<?php

/* service/show.html.twig */
class __TwigTemplate_bf40d90eb009f4f9951a5f307ffbfed19860084b1ce59ed299e640a92f8c9b19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", "service/show.html.twig", 1);
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
        $__internal_29e3701bac2cc2af79ff18970a8a10235f2b465419514c418b43782a9bdcb6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e3701bac2cc2af79ff18970a8a10235f2b465419514c418b43782a9bdcb6bd->enter($__internal_29e3701bac2cc2af79ff18970a8a10235f2b465419514c418b43782a9bdcb6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e3701bac2cc2af79ff18970a8a10235f2b465419514c418b43782a9bdcb6bd->leave($__internal_29e3701bac2cc2af79ff18970a8a10235f2b465419514c418b43782a9bdcb6bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e312c4513f9657fdabb4193411e78ca4ebc551358106daa84dd2ed5ffe96b9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e312c4513f9657fdabb4193411e78ca4ebc551358106daa84dd2ed5ffe96b9f0->enter($__internal_e312c4513f9657fdabb4193411e78ca4ebc551358106daa84dd2ed5ffe96b9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e312c4513f9657fdabb4193411e78ca4ebc551358106daa84dd2ed5ffe96b9f0->leave($__internal_e312c4513f9657fdabb4193411e78ca4ebc551358106daa84dd2ed5ffe96b9f0_prof);

    }

    public function getTemplateName()
    {
        return "service/show.html.twig";
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
", "service/show.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/service/show.html.twig");
    }
}

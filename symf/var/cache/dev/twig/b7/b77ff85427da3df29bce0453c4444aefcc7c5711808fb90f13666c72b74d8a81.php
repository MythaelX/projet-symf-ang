<?php

/* :typeuser:new.html.twig */
class __TwigTemplate_1a3e24b7e57c6da407a3efbd2985b0c5d9a8994b2ac46bc4851b1ed3cd64b3a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", ":typeuser:new.html.twig", 1);
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
        $__internal_b149d38383eb4101361c0458cdc64979c38a9fb49361f01cc2b8aec156e96061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b149d38383eb4101361c0458cdc64979c38a9fb49361f01cc2b8aec156e96061->enter($__internal_b149d38383eb4101361c0458cdc64979c38a9fb49361f01cc2b8aec156e96061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typeuser:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b149d38383eb4101361c0458cdc64979c38a9fb49361f01cc2b8aec156e96061->leave($__internal_b149d38383eb4101361c0458cdc64979c38a9fb49361f01cc2b8aec156e96061_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe46e8a6f72597e0496822e80620bb13c27e321efe9762ca75f95e9dc7a5f3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe46e8a6f72597e0496822e80620bb13c27e321efe9762ca75f95e9dc7a5f3cb->enter($__internal_fe46e8a6f72597e0496822e80620bb13c27e321efe9762ca75f95e9dc7a5f3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Typeuser creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeuser_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_fe46e8a6f72597e0496822e80620bb13c27e321efe9762ca75f95e9dc7a5f3cb->leave($__internal_fe46e8a6f72597e0496822e80620bb13c27e321efe9762ca75f95e9dc7a5f3cb_prof);

    }

    public function getTemplateName()
    {
        return ":typeuser:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Typeuser creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('typeuser_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":typeuser:new.html.twig", "/home/clement/cir3/projet 2.0/symf/app/Resources/views/typeuser/new.html.twig");
    }
}

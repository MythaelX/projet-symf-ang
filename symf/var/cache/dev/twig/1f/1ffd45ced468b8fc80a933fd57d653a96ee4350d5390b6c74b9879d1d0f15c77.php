<?php

/* FrontOfficeBundle:deplacementjour:edit.html.twig */
class __TwigTemplate_513f7fd3bbe682096b6980f8715cb425d4ce9d8425b8518d44ea42e25f8aa82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontOfficeBundle:deplacementjour:edit.html.twig", 1);
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
        $__internal_04e2b50001e513f617edb87705f425df3c05b0f064607d98d233b38a1a362155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e2b50001e513f617edb87705f425df3c05b0f064607d98d233b38a1a362155->enter($__internal_04e2b50001e513f617edb87705f425df3c05b0f064607d98d233b38a1a362155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:deplacementjour:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04e2b50001e513f617edb87705f425df3c05b0f064607d98d233b38a1a362155->leave($__internal_04e2b50001e513f617edb87705f425df3c05b0f064607d98d233b38a1a362155_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2e47841e975ada6bdc4c63d63d813c600f07b693b5d1f3ae3af2dc7fc0d67ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e47841e975ada6bdc4c63d63d813c600f07b693b5d1f3ae3af2dc7fc0d67ba->enter($__internal_f2e47841e975ada6bdc4c63d63d813c600f07b693b5d1f3ae3af2dc7fc0d67ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"modifFormulaire\">
    <h1>Modification déplacement jour</h1>
    <div>
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" class=\"maxwidth\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("f_deplacement_show", array("id" => $this->getAttribute($this->getAttribute(($context["deplacementJour"] ?? $this->getContext($context, "deplacementJour")), "deplacement", array()), "id", array()))), "html", null, true);
        echo "\">Retour à la liste</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</div>
";
        
        $__internal_f2e47841e975ada6bdc4c63d63d813c600f07b693b5d1f3ae3af2dc7fc0d67ba->leave($__internal_f2e47841e975ada6bdc4c63d63d813c600f07b693b5d1f3ae3af2dc7fc0d67ba_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:deplacementjour:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  67 => 17,  61 => 14,  54 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
<div id=\"modifFormulaire\">
    <h1>Modification déplacement jour</h1>
    <div>
    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" class=\"maxwidth\" value=\"Edit\" />
    {{ form_end(edit_form) }}
    </div>
    <ul>
        <li>
            <a href=\"{{ path('f_deplacement_show',{ 'id': deplacementJour.deplacement.id }) }}\">Retour à la liste</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</div>
{% endblock %}
", "FrontOfficeBundle:deplacementjour:edit.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/deplacementjour/edit.html.twig");
    }
}

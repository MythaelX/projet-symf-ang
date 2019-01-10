<?php

/* FrontOfficeBundle:Default:profil.html.twig */
class __TwigTemplate_60b48e0367ba55e968ebf7044d964038aac1df53e0266fa83d6bb6fcf72907a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontOfficeBundle:Default:profil.html.twig", 1);
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
        $__internal_189be0ace3daedaa910825fa92c7bf79d8db31f71f08156c0dc8eff1f170f6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189be0ace3daedaa910825fa92c7bf79d8db31f71f08156c0dc8eff1f170f6bb->enter($__internal_189be0ace3daedaa910825fa92c7bf79d8db31f71f08156c0dc8eff1f170f6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_189be0ace3daedaa910825fa92c7bf79d8db31f71f08156c0dc8eff1f170f6bb->leave($__internal_189be0ace3daedaa910825fa92c7bf79d8db31f71f08156c0dc8eff1f170f6bb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7426583b0872832d87bae9d97ae341b22d64f94536f003d88e992c7af4f17d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7426583b0872832d87bae9d97ae341b22d64f94536f003d88e992c7af4f17d91->enter($__internal_7426583b0872832d87bae9d97ae341b22d64f94536f003d88e992c7af4f17d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div id=\"modifProfil\" >
<h1> Modifier son profil </h1>
  ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
  <input type=\"submit\">
  ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_7426583b0872832d87bae9d97ae341b22d64f94536f003d88e992c7af4f17d91->leave($__internal_7426583b0872832d87bae9d97ae341b22d64f94536f003d88e992c7af4f17d91_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
<div id=\"modifProfil\" >
<h1> Modifier son profil </h1>
  {{form_start(form)}}
  {{form_widget(form)}}
  <input type=\"submit\">
  {{form_end(form)}}
</div>
{% endblock %}
", "FrontOfficeBundle:Default:profil.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/src/FrontOfficeBundle/Resources/views/Default/profil.html.twig");
    }
}

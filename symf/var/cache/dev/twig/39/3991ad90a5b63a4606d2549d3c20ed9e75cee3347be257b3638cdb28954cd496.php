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
        $__internal_af267fcb95bb7af851aa13ed710e8b8da3a3aa20c847d73cc046e1b8d8fc7597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af267fcb95bb7af851aa13ed710e8b8da3a3aa20c847d73cc046e1b8d8fc7597->enter($__internal_af267fcb95bb7af851aa13ed710e8b8da3a3aa20c847d73cc046e1b8d8fc7597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af267fcb95bb7af851aa13ed710e8b8da3a3aa20c847d73cc046e1b8d8fc7597->leave($__internal_af267fcb95bb7af851aa13ed710e8b8da3a3aa20c847d73cc046e1b8d8fc7597_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2997ed01536946d3be74aa4193289e939c09d06fb544067bf941280ff080cf95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2997ed01536946d3be74aa4193289e939c09d06fb544067bf941280ff080cf95->enter($__internal_2997ed01536946d3be74aa4193289e939c09d06fb544067bf941280ff080cf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1> formulaire </h1>
  ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
  <input type=\"submit\">
  ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2997ed01536946d3be74aa4193289e939c09d06fb544067bf941280ff080cf95->leave($__internal_2997ed01536946d3be74aa4193289e939c09d06fb544067bf941280ff080cf95_prof);

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
        return array (  52 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
<h1> formulaire </h1>
  {{form_start(form)}}
  {{form_widget(form)}}
  <input type=\"submit\">
  {{form_end(form)}}
{% endblock %}
", "FrontOfficeBundle:Default:profil.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/src/FrontOfficeBundle/Resources/views/Default/profil.html.twig");
    }
}

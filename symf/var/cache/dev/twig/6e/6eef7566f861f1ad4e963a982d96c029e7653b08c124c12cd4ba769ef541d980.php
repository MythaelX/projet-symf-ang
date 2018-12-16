<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_e210b62b5f5a2501b3ac085dc4df106e8fd0081aa4b50a025317f39a4fbbceef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseBack.html.twig", "BackOfficeBundle:Default:index.html.twig", 1);
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
        $__internal_e9153b444a50fc522a0b7b227785707c27103f3430448b3508fda74a1ce74f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9153b444a50fc522a0b7b227785707c27103f3430448b3508fda74a1ce74f20->enter($__internal_e9153b444a50fc522a0b7b227785707c27103f3430448b3508fda74a1ce74f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9153b444a50fc522a0b7b227785707c27103f3430448b3508fda74a1ce74f20->leave($__internal_e9153b444a50fc522a0b7b227785707c27103f3430448b3508fda74a1ce74f20_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_07456f6fc9b59a06ebf33667ae42d4654ff386e7137dbadd555235eac80c7427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07456f6fc9b59a06ebf33667ae42d4654ff386e7137dbadd555235eac80c7427->enter($__internal_07456f6fc9b59a06ebf33667ae42d4654ff386e7137dbadd555235eac80c7427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  Bienvenue ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo " dans le backOffice !
  <ul>
  <li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_index");
        echo "\">Modifier la table deplacement</a></li>
  <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacementjour_index");
        echo "\">Modifier la table deplacement_jour</a></li>
  <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_index");
        echo "\">Modifier la table service</a></li>
  <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("societe_index");
        echo "\">Modifier la table societe</a></li>
  <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedeplacement_index");
        echo "\">Modifier la table type_deplacement</a></li>
  <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeuser_index");
        echo "\">Modifier la table type_user</a></li>
  <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Modifier la table user</a></li>
  <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Modifier la table ville</a></li>
  </ul>
  <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_statistique");
        echo "\">Statistique</a>
";
        
        $__internal_07456f6fc9b59a06ebf33667ae42d4654ff386e7137dbadd555235eac80c7427->leave($__internal_07456f6fc9b59a06ebf33667ae42d4654ff386e7137dbadd555235eac80c7427_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
  Bienvenue {{utilisateur.nom}} {{utilisateur.prenom}} dans le backOffice !
  <ul>
  <li><a href=\"{{ path('deplacement_index') }}\">Modifier la table deplacement</a></li>
  <li><a href=\"{{ path('deplacementjour_index') }}\">Modifier la table deplacement_jour</a></li>
  <li><a href=\"{{ path('service_index') }}\">Modifier la table service</a></li>
  <li><a href=\"{{ path('societe_index') }}\">Modifier la table societe</a></li>
  <li><a href=\"{{ path('typedeplacement_index') }}\">Modifier la table type_deplacement</a></li>
  <li><a href=\"{{ path('typeuser_index') }}\">Modifier la table type_user</a></li>
  <li><a href=\"{{ path('user_index') }}\">Modifier la table user</a></li>
  <li><a href=\"{{ path('ville_index') }}\">Modifier la table ville</a></li>
  </ul>
  <a href=\"{{ path('back_office_statistique') }}\">Statistique</a>
{% endblock %}
", "BackOfficeBundle:Default:index.html.twig", "/home/clement/cir3/projet 2.0/symf/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}

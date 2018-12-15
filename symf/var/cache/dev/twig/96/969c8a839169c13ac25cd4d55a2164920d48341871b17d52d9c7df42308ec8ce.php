<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_ea1cb5116c611b8b849250bbd7f977bddaf95282a29f80106726ae858990f4ba extends Twig_Template
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
        $__internal_07a30509936de8c7e04440ffd33470d496f83f9c4866bf00278afbaa4c5947e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a30509936de8c7e04440ffd33470d496f83f9c4866bf00278afbaa4c5947e0->enter($__internal_07a30509936de8c7e04440ffd33470d496f83f9c4866bf00278afbaa4c5947e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a30509936de8c7e04440ffd33470d496f83f9c4866bf00278afbaa4c5947e0->leave($__internal_07a30509936de8c7e04440ffd33470d496f83f9c4866bf00278afbaa4c5947e0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_87dd9183f09e55bd088948a0d57117efe0d36ac0e58cd7f4993923d3fbfa6129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dd9183f09e55bd088948a0d57117efe0d36ac0e58cd7f4993923d3fbfa6129->enter($__internal_87dd9183f09e55bd088948a0d57117efe0d36ac0e58cd7f4993923d3fbfa6129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  Bienvenue ! nom prenom
  <ul>
  <li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement");
        echo "\">Modifier la table deplacement</a></li>
  <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacementjour");
        echo "\">Modifier la table deplacement_jour</a></li>
  <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service");
        echo "\">Modifier la table service</a></li>
  <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_societe");
        echo "\">Modifier la table societe</a></li>
  <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_typedeplacement");
        echo "\">Modifier la table type_deplacement</a></li>
  <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_typeuser");
        echo "\">Modifier la table type_user</a></li>
  <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user");
        echo "\">Modifier la table user</a></li>
  <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_ville");
        echo "\">Modifier la table ville</a></li>
  </ul>
";
        
        $__internal_87dd9183f09e55bd088948a0d57117efe0d36ac0e58cd7f4993923d3fbfa6129->leave($__internal_87dd9183f09e55bd088948a0d57117efe0d36ac0e58cd7f4993923d3fbfa6129_prof);

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
        return array (  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
  Bienvenue ! nom prenom
  <ul>
  <li><a href=\"{{ path('back_office_deplacement') }}\">Modifier la table deplacement</a></li>
  <li><a href=\"{{ path('back_office_deplacementjour') }}\">Modifier la table deplacement_jour</a></li>
  <li><a href=\"{{ path('back_office_service') }}\">Modifier la table service</a></li>
  <li><a href=\"{{ path('back_office_societe') }}\">Modifier la table societe</a></li>
  <li><a href=\"{{ path('back_office_typedeplacement') }}\">Modifier la table type_deplacement</a></li>
  <li><a href=\"{{ path('back_office_typeuser') }}\">Modifier la table type_user</a></li>
  <li><a href=\"{{ path('back_office_user') }}\">Modifier la table user</a></li>
  <li><a href=\"{{ path('back_office_ville') }}\">Modifier la table ville</a></li>
  </ul>
{% endblock %}
", "BackOfficeBundle:Default:index.html.twig", "/home/clement/cir3/projet 2.0/symf/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}

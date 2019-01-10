<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_8ee3f1255cb4c2a02a266c42e62ec077b323eec77d8b25f413d731ed618d4a22 extends Twig_Template
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
        $__internal_77c02df335d03917a1bab27852edd3ef4f09697295e06ca4e0a2501293aacc50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c02df335d03917a1bab27852edd3ef4f09697295e06ca4e0a2501293aacc50->enter($__internal_77c02df335d03917a1bab27852edd3ef4f09697295e06ca4e0a2501293aacc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77c02df335d03917a1bab27852edd3ef4f09697295e06ca4e0a2501293aacc50->leave($__internal_77c02df335d03917a1bab27852edd3ef4f09697295e06ca4e0a2501293aacc50_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_70a055a0813bd25c0f3a4548c7e236b246858318147e2e0f82ac102a673e0aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a055a0813bd25c0f3a4548c7e236b246858318147e2e0f82ac102a673e0aa7->enter($__internal_70a055a0813bd25c0f3a4548c7e236b246858318147e2e0f82ac102a673e0aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
  <span id=\"bienvenue\">Bienvenue ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo " dans le backOffice !</span>
<div id=\"tableau\">
  <ul>
  <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacement_index");
        echo "\">Modifier la table deplacement</a></li>
  <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deplacementjour_index");
        echo "\">Modifier la table deplacement_jour</a></li>
  <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_index");
        echo "\">Modifier la table service</a></li>
  <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("societe_index");
        echo "\">Modifier la table societe</a></li>
  <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typedeplacement_index");
        echo "\">Modifier la table type_deplacement</a></li>
  <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeuser_index");
        echo "\">Modifier la table type_user</a></li>
  <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Modifier la table user</a></li>
  <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Modifier la table ville</a></li>
  </ul>
  <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_statistique");
        echo "\">Statistique</a>
</div>
";
        
        $__internal_70a055a0813bd25c0f3a4548c7e236b246858318147e2e0f82ac102a673e0aa7->leave($__internal_70a055a0813bd25c0f3a4548c7e236b246858318147e2e0f82ac102a673e0aa7_prof);

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
        return array (  84 => 16,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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

  <span id=\"bienvenue\">Bienvenue {{utilisateur.nom}} {{utilisateur.prenom}} dans le backOffice !</span>
<div id=\"tableau\">
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
</div>
{% endblock %}
", "BackOfficeBundle:Default:index.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}

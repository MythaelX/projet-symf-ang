<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_76d2cb7dc23c1dc1c8baed0c24c1eebf7cfc9fc86f5329449f3341192865232c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontOfficeBundle:Default:index.html.twig", 1);
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
        $__internal_05bb13528ccbda0abf4bb7c16d6637981f532d9fd0a623a9797f1c6b220f6a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bb13528ccbda0abf4bb7c16d6637981f532d9fd0a623a9797f1c6b220f6a95->enter($__internal_05bb13528ccbda0abf4bb7c16d6637981f532d9fd0a623a9797f1c6b220f6a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05bb13528ccbda0abf4bb7c16d6637981f532d9fd0a623a9797f1c6b220f6a95->leave($__internal_05bb13528ccbda0abf4bb7c16d6637981f532d9fd0a623a9797f1c6b220f6a95_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c7866c4b4c3c85c3a8a05d982da8c838d7ccc8339e5fe55eaf56ee654c9e0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7866c4b4c3c85c3a8a05d982da8c838d7ccc8339e5fe55eaf56ee654c9e0de->enter($__internal_9c7866c4b4c3c85c3a8a05d982da8c838d7ccc8339e5fe55eaf56ee654c9e0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <span id=\"bienvenue\">Bienvenue ! ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "</span>
  <div id=\"tableau\">
  Déplacement réalisé :

  <table>
    <tr>
      <th>Annee</th>
      <th>Mois</th>
    </tr>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deplacements"] ?? $this->getContext($context, "deplacements")));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 13
            echo "    <tr>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "annee", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "mois", array()), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</table>
</div>
";
        
        $__internal_9c7866c4b4c3c85c3a8a05d982da8c838d7ccc8339e5fe55eaf56ee654c9e0de->leave($__internal_9c7866c4b4c3c85c3a8a05d982da8c838d7ccc8339e5fe55eaf56ee654c9e0de_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  66 => 15,  62 => 14,  59 => 13,  55 => 12,  40 => 3,  34 => 2,  11 => 1,);
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
  <span id=\"bienvenue\">Bienvenue ! {{utilisateur.nom}} {{utilisateur.prenom}}</span>
  <div id=\"tableau\">
  Déplacement réalisé :

  <table>
    <tr>
      <th>Annee</th>
      <th>Mois</th>
    </tr>
    {% for instance in deplacements %}
    <tr>
        <td>{{ instance.annee }}</td>
        <td>{{ instance.mois }}</td>
    </tr>
    {% endfor %}
</table>
</div>
{% endblock %}
", "FrontOfficeBundle:Default:index.html.twig", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}

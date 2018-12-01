<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_b55d2b0d981126d89dc66e3b0452507bea0822bd84e29482942768778ec07b8f extends Twig_Template
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
        $__internal_f8e80f1767cc1de1da0e2748d176bfa777ad58e942a8a406d2b46b6c815000e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e80f1767cc1de1da0e2748d176bfa777ad58e942a8a406d2b46b6c815000e4->enter($__internal_f8e80f1767cc1de1da0e2748d176bfa777ad58e942a8a406d2b46b6c815000e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e80f1767cc1de1da0e2748d176bfa777ad58e942a8a406d2b46b6c815000e4->leave($__internal_f8e80f1767cc1de1da0e2748d176bfa777ad58e942a8a406d2b46b6c815000e4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_14779e56a00a9131ca3e19769fbc54db0635e712113be75364e3086803358b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14779e56a00a9131ca3e19769fbc54db0635e712113be75364e3086803358b37->enter($__internal_14779e56a00a9131ca3e19769fbc54db0635e712113be75364e3086803358b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <th>nb de km</th>
      <th>montant</th>
      <th>jour</th>
    </tr>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["deplacements"] ?? $this->getContext($context, "deplacements")));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 14
            echo "    <tr>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "nbkm", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "montant", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "jour", array()), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>
</div>
";
        
        $__internal_14779e56a00a9131ca3e19769fbc54db0635e712113be75364e3086803358b37->leave($__internal_14779e56a00a9131ca3e19769fbc54db0635e712113be75364e3086803358b37_prof);

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
        return array (  80 => 20,  71 => 17,  67 => 16,  63 => 15,  60 => 14,  56 => 13,  40 => 3,  34 => 2,  11 => 1,);
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
      <th>nb de km</th>
      <th>montant</th>
      <th>jour</th>
    </tr>
    {% for instance in deplacements %}
    <tr>
        <td>{{ instance.nbkm }}</td>
        <td>{{ instance.montant }}</td>
        <td>{{ instance.jour }}</td>
    </tr>
    {% endfor %}
</table>
</div>
{% endblock %}
", "FrontOfficeBundle:Default:index.html.twig", "/home/clement/cir3/projet 2.0/symf/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}

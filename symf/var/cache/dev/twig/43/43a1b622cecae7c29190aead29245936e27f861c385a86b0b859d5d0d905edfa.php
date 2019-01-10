<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_fc5c68e340b1623762ec5eca82a55796b760f69edc70b8900c0edad5a33a6b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7838ad00b6623f991f9686f11359bdecbd6964ee9a4b91f1af95a933588590ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7838ad00b6623f991f9686f11359bdecbd6964ee9a4b91f1af95a933588590ec->enter($__internal_7838ad00b6623f991f9686f11359bdecbd6964ee9a4b91f1af95a933588590ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7838ad00b6623f991f9686f11359bdecbd6964ee9a4b91f1af95a933588590ec->leave($__internal_7838ad00b6623f991f9686f11359bdecbd6964ee9a4b91f1af95a933588590ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

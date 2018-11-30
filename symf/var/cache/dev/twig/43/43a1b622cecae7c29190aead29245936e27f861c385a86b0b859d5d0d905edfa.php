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
        $__internal_6296a6ed6e8b7a67dfbd8d0f96d50b7df9f100beb9b33e32b7ec4e9959415d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6296a6ed6e8b7a67dfbd8d0f96d50b7df9f100beb9b33e32b7ec4e9959415d0a->enter($__internal_6296a6ed6e8b7a67dfbd8d0f96d50b7df9f100beb9b33e32b7ec4e9959415d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6296a6ed6e8b7a67dfbd8d0f96d50b7df9f100beb9b33e32b7ec4e9959415d0a->leave($__internal_6296a6ed6e8b7a67dfbd8d0f96d50b7df9f100beb9b33e32b7ec4e9959415d0a_prof);

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
", "@Framework/Form/button_row.html.php", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

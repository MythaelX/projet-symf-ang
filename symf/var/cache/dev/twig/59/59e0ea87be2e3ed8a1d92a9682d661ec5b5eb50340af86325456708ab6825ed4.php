<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5da5dcdc7bf23566dbd489f2177fcfc57816ec1991693a4fe32d5ce50c443e23 extends Twig_Template
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
        $__internal_cac5bce38ace69a31aa3cc831a9cabddca3faf99f28250e7a1a2c3aad18923ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac5bce38ace69a31aa3cc831a9cabddca3faf99f28250e7a1a2c3aad18923ef->enter($__internal_cac5bce38ace69a31aa3cc831a9cabddca3faf99f28250e7a1a2c3aad18923ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cac5bce38ace69a31aa3cc831a9cabddca3faf99f28250e7a1a2c3aad18923ef->leave($__internal_cac5bce38ace69a31aa3cc831a9cabddca3faf99f28250e7a1a2c3aad18923ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d80f5488a760cbb06855744c9b6b151a0ef2c891c65aff590a206b2f7f9a65b0 extends Twig_Template
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
        $__internal_9e49a1874f30cc0a8167c1944985e4259f2ada2d299b08f7de70c99f50aec227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e49a1874f30cc0a8167c1944985e4259f2ada2d299b08f7de70c99f50aec227->enter($__internal_9e49a1874f30cc0a8167c1944985e4259f2ada2d299b08f7de70c99f50aec227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_9e49a1874f30cc0a8167c1944985e4259f2ada2d299b08f7de70c99f50aec227->leave($__internal_9e49a1874f30cc0a8167c1944985e4259f2ada2d299b08f7de70c99f50aec227_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

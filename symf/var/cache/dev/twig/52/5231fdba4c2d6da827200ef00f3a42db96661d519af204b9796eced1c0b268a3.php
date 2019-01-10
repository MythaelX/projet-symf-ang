<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_b71c5ebdf6ef34780df0e86230da4b00d06de304332916481c09e30e49b94299 extends Twig_Template
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
        $__internal_224dd3fac1e60cb830b67039fd59436c4248152866daa65d976644407a512623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224dd3fac1e60cb830b67039fd59436c4248152866daa65d976644407a512623->enter($__internal_224dd3fac1e60cb830b67039fd59436c4248152866daa65d976644407a512623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_224dd3fac1e60cb830b67039fd59436c4248152866daa65d976644407a512623->leave($__internal_224dd3fac1e60cb830b67039fd59436c4248152866daa65d976644407a512623_prof);

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
", "@Framework/Form/attributes.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

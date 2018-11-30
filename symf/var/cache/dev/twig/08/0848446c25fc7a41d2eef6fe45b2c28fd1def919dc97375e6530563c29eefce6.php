<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_203fe04463205e5f86e1c3bf527bcfdd59780b363985ecb3fef57d405bfbb6e6 extends Twig_Template
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
        $__internal_d861849c7884165e978baaf9fbfa0c27e40d4fff5019fde1078bf0daf68e2f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d861849c7884165e978baaf9fbfa0c27e40d4fff5019fde1078bf0daf68e2f4e->enter($__internal_d861849c7884165e978baaf9fbfa0c27e40d4fff5019fde1078bf0daf68e2f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d861849c7884165e978baaf9fbfa0c27e40d4fff5019fde1078bf0daf68e2f4e->leave($__internal_d861849c7884165e978baaf9fbfa0c27e40d4fff5019fde1078bf0daf68e2f4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

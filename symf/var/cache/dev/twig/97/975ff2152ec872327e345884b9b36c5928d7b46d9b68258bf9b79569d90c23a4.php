<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ab32176a561edf7eb15c88bb409bd3cb4a59c900e57b197253baaf1d9670db19 extends Twig_Template
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
        $__internal_10c4941bc95ddcc9a1235e2a3e1b05bbeec47ea5e8ee2e89ace87de5e3f1d86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c4941bc95ddcc9a1235e2a3e1b05bbeec47ea5e8ee2e89ace87de5e3f1d86d->enter($__internal_10c4941bc95ddcc9a1235e2a3e1b05bbeec47ea5e8ee2e89ace87de5e3f1d86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_10c4941bc95ddcc9a1235e2a3e1b05bbeec47ea5e8ee2e89ace87de5e3f1d86d->leave($__internal_10c4941bc95ddcc9a1235e2a3e1b05bbeec47ea5e8ee2e89ace87de5e3f1d86d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

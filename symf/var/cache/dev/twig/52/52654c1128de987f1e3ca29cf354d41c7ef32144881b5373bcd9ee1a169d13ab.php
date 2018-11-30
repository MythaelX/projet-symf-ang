<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_15da27b6631d8d9442ef3b8cbac72afbf3335b7defc22add87c353f0d08db3d9 extends Twig_Template
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
        $__internal_f4b6f3af9e3ae1d5ad7ff88f0ac23a906ab4cf173e73fd77c2cf84dbb66951aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b6f3af9e3ae1d5ad7ff88f0ac23a906ab4cf173e73fd77c2cf84dbb66951aa->enter($__internal_f4b6f3af9e3ae1d5ad7ff88f0ac23a906ab4cf173e73fd77c2cf84dbb66951aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_f4b6f3af9e3ae1d5ad7ff88f0ac23a906ab4cf173e73fd77c2cf84dbb66951aa->leave($__internal_f4b6f3af9e3ae1d5ad7ff88f0ac23a906ab4cf173e73fd77c2cf84dbb66951aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}

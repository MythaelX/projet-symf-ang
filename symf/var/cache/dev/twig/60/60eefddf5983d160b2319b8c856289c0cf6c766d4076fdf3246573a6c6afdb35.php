<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5aca845113715f6b4d0f6c77c21d5061d3b5865b850bd4ae945a86d72a168d95 extends Twig_Template
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
        $__internal_b1ae5b601a49d6288fa0cbc11548244a845b7f1bbd5d90001465f3fd8971609d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ae5b601a49d6288fa0cbc11548244a845b7f1bbd5d90001465f3fd8971609d->enter($__internal_b1ae5b601a49d6288fa0cbc11548244a845b7f1bbd5d90001465f3fd8971609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b1ae5b601a49d6288fa0cbc11548244a845b7f1bbd5d90001465f3fd8971609d->leave($__internal_b1ae5b601a49d6288fa0cbc11548244a845b7f1bbd5d90001465f3fd8971609d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
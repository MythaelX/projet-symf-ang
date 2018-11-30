<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_eb3e769d13e3a9305469b05a3df6b38817cdf7f5e9d56446b09f20d27659717f extends Twig_Template
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
        $__internal_d47f1732dd6f5f73aa8176e06f57ed22f25be2ca67577152eed106886bab9f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47f1732dd6f5f73aa8176e06f57ed22f25be2ca67577152eed106886bab9f29->enter($__internal_d47f1732dd6f5f73aa8176e06f57ed22f25be2ca67577152eed106886bab9f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d47f1732dd6f5f73aa8176e06f57ed22f25be2ca67577152eed106886bab9f29->leave($__internal_d47f1732dd6f5f73aa8176e06f57ed22f25be2ca67577152eed106886bab9f29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

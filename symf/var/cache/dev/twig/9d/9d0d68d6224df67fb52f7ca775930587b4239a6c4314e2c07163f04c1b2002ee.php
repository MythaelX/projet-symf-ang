<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3220d21018a82a6b0032cbb1fe1721da33902d35253b6dae3228d5c428cdea4f extends Twig_Template
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
        $__internal_e8720c16a1cdda43d28aeb9ca08c8031c37bfba74af24e74896dc5989264cbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8720c16a1cdda43d28aeb9ca08c8031c37bfba74af24e74896dc5989264cbbc->enter($__internal_e8720c16a1cdda43d28aeb9ca08c8031c37bfba74af24e74896dc5989264cbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e8720c16a1cdda43d28aeb9ca08c8031c37bfba74af24e74896dc5989264cbbc->leave($__internal_e8720c16a1cdda43d28aeb9ca08c8031c37bfba74af24e74896dc5989264cbbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

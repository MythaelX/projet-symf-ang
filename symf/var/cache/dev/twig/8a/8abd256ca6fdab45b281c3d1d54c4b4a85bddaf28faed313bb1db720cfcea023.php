<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_de32035458a7dbb678ae1b80de6ba98e3626203f5444ebdab8cd66aada112af3 extends Twig_Template
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
        $__internal_1c81b3c7564ca788258dbcb0578ee77e4d73e430d323bd499d99e6f47a2cfc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c81b3c7564ca788258dbcb0578ee77e4d73e430d323bd499d99e6f47a2cfc9f->enter($__internal_1c81b3c7564ca788258dbcb0578ee77e4d73e430d323bd499d99e6f47a2cfc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1c81b3c7564ca788258dbcb0578ee77e4d73e430d323bd499d99e6f47a2cfc9f->leave($__internal_1c81b3c7564ca788258dbcb0578ee77e4d73e430d323bd499d99e6f47a2cfc9f_prof);

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
", "@Framework/Form/email_widget.html.php", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

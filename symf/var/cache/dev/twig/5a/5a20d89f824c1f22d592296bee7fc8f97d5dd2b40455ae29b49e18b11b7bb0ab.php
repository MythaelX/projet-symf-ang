<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_5bc6144de67c9da302b54201084db29cc0546225208f26807b2a537a97e013b4 extends Twig_Template
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
        $__internal_108ef4e5321c72ace7e2ca98ff3ed94b8a7b3a994f206c9bcb5957c416744531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108ef4e5321c72ace7e2ca98ff3ed94b8a7b3a994f206c9bcb5957c416744531->enter($__internal_108ef4e5321c72ace7e2ca98ff3ed94b8a7b3a994f206c9bcb5957c416744531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_108ef4e5321c72ace7e2ca98ff3ed94b8a7b3a994f206c9bcb5957c416744531->leave($__internal_108ef4e5321c72ace7e2ca98ff3ed94b8a7b3a994f206c9bcb5957c416744531_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_954a30ea721dc897c5751f546792621b07124c04580dbb44f86d3877f2dc0e18 extends Twig_Template
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
        $__internal_7c76529683081781f22eec6e6b2f8b49204364d30d169dd934dfd71402457b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c76529683081781f22eec6e6b2f8b49204364d30d169dd934dfd71402457b06->enter($__internal_7c76529683081781f22eec6e6b2f8b49204364d30d169dd934dfd71402457b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7c76529683081781f22eec6e6b2f8b49204364d30d169dd934dfd71402457b06->leave($__internal_7c76529683081781f22eec6e6b2f8b49204364d30d169dd934dfd71402457b06_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

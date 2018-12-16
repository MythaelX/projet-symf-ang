<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d4517dc8d29ac5ea8236bf21c91bba556b72131f57c116c3110b3b42ea024f59 extends Twig_Template
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
        $__internal_ce6df94818abf154e5ab4cc00f9777e2d68816ff29f3aac2c302242905b4e955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6df94818abf154e5ab4cc00f9777e2d68816ff29f3aac2c302242905b4e955->enter($__internal_ce6df94818abf154e5ab4cc00f9777e2d68816ff29f3aac2c302242905b4e955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ce6df94818abf154e5ab4cc00f9777e2d68816ff29f3aac2c302242905b4e955->leave($__internal_ce6df94818abf154e5ab4cc00f9777e2d68816ff29f3aac2c302242905b4e955_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

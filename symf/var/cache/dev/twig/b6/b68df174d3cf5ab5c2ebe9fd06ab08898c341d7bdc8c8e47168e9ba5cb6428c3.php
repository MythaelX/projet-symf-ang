<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_9196e4ed7aebace85bdc8468e0ca53f850cc2bd2d9a266995fe66eb4151d6df3 extends Twig_Template
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
        $__internal_79f2a71075a68a15cf0b467ec822eea998b237e2c4397c094a0490e05ec3d516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f2a71075a68a15cf0b467ec822eea998b237e2c4397c094a0490e05ec3d516->enter($__internal_79f2a71075a68a15cf0b467ec822eea998b237e2c4397c094a0490e05ec3d516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_79f2a71075a68a15cf0b467ec822eea998b237e2c4397c094a0490e05ec3d516->leave($__internal_79f2a71075a68a15cf0b467ec822eea998b237e2c4397c094a0490e05ec3d516_prof);

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
", "@Framework/Form/submit_widget.html.php", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

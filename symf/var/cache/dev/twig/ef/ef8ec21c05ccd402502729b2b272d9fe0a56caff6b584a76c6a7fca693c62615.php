<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e2ce138134e3339c130f29a7f40a92f07ed0a3edf6f98d82f596cd940c2347a extends Twig_Template
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
        $__internal_29eaff3bc0a7eee8b16b695a26ec32ad9341d4d77878738577f7dfb646aab57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29eaff3bc0a7eee8b16b695a26ec32ad9341d4d77878738577f7dfb646aab57d->enter($__internal_29eaff3bc0a7eee8b16b695a26ec32ad9341d4d77878738577f7dfb646aab57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_29eaff3bc0a7eee8b16b695a26ec32ad9341d4d77878738577f7dfb646aab57d->leave($__internal_29eaff3bc0a7eee8b16b695a26ec32ad9341d4d77878738577f7dfb646aab57d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
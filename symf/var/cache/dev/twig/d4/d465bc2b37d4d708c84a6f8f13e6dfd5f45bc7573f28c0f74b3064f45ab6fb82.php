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
        $__internal_38f7dd39387ce6b7df49d2f247bb634f3764bbe4bf5e6b0a6577375d0c247fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f7dd39387ce6b7df49d2f247bb634f3764bbe4bf5e6b0a6577375d0c247fdc->enter($__internal_38f7dd39387ce6b7df49d2f247bb634f3764bbe4bf5e6b0a6577375d0c247fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_38f7dd39387ce6b7df49d2f247bb634f3764bbe4bf5e6b0a6577375d0c247fdc->leave($__internal_38f7dd39387ce6b7df49d2f247bb634f3764bbe4bf5e6b0a6577375d0c247fdc_prof);

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
", "@Framework/Form/search_widget.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

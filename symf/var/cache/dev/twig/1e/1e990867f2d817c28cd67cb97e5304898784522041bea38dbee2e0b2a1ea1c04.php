<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_94c9df8239fbc331265e709adef3c7ae5ed284f9112d5ffbab5616aac1f1bf6e extends Twig_Template
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
        $__internal_dccea54a5cf5151be267e7da97efc3942232111be33a91b4dc6732f599baa823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dccea54a5cf5151be267e7da97efc3942232111be33a91b4dc6732f599baa823->enter($__internal_dccea54a5cf5151be267e7da97efc3942232111be33a91b4dc6732f599baa823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_dccea54a5cf5151be267e7da97efc3942232111be33a91b4dc6732f599baa823->leave($__internal_dccea54a5cf5151be267e7da97efc3942232111be33a91b4dc6732f599baa823_prof);

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
", "@Framework/Form/search_widget.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

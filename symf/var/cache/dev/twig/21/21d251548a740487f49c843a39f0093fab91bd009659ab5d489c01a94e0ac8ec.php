<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_62a10e200f7a70a0fd4359fa40354d38ae6d4f533de2d52f1ff4d3fc67174289 extends Twig_Template
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
        $__internal_0386ee399cc7b220d1c2994e5a0660b0de60ef2c812c5b93696902cfa623098c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0386ee399cc7b220d1c2994e5a0660b0de60ef2c812c5b93696902cfa623098c->enter($__internal_0386ee399cc7b220d1c2994e5a0660b0de60ef2c812c5b93696902cfa623098c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0386ee399cc7b220d1c2994e5a0660b0de60ef2c812c5b93696902cfa623098c->leave($__internal_0386ee399cc7b220d1c2994e5a0660b0de60ef2c812c5b93696902cfa623098c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_21b9f3a82acdc7f61ba244cb0dbbbd0c469ad117b450b08f5db5f4af9ba22c94 extends Twig_Template
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
        $__internal_8a4d56e12c8e36da6df6f3384b234cc736518ce7fbb8cf5abc44fd4784d862cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4d56e12c8e36da6df6f3384b234cc736518ce7fbb8cf5abc44fd4784d862cc->enter($__internal_8a4d56e12c8e36da6df6f3384b234cc736518ce7fbb8cf5abc44fd4784d862cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8a4d56e12c8e36da6df6f3384b234cc736518ce7fbb8cf5abc44fd4784d862cc->leave($__internal_8a4d56e12c8e36da6df6f3384b234cc736518ce7fbb8cf5abc44fd4784d862cc_prof);

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
", "@Framework/Form/url_widget.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

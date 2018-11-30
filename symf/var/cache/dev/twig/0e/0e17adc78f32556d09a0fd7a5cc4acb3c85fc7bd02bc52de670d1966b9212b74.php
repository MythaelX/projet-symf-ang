<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_de4e6a2f3e909fc770ea70adc1fa0c2a11c66a2901c501bd973393230476d3d6 extends Twig_Template
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
        $__internal_5c28f5e89fa29b553be964a18168119c8efb26e9827c33f86ca0e888b05b5879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c28f5e89fa29b553be964a18168119c8efb26e9827c33f86ca0e888b05b5879->enter($__internal_5c28f5e89fa29b553be964a18168119c8efb26e9827c33f86ca0e888b05b5879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5c28f5e89fa29b553be964a18168119c8efb26e9827c33f86ca0e888b05b5879->leave($__internal_5c28f5e89fa29b553be964a18168119c8efb26e9827c33f86ca0e888b05b5879_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

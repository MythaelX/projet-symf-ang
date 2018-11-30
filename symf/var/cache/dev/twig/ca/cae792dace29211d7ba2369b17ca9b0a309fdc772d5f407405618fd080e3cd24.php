<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6f6453bd02a3b068e783bcca1fc701c612d2ef4892e1a97fa2089650fad69c3f extends Twig_Template
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
        $__internal_ff728c867ab26866a4b4b8d27fa8964d12ce28dfea437108325e3baec6344479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff728c867ab26866a4b4b8d27fa8964d12ce28dfea437108325e3baec6344479->enter($__internal_ff728c867ab26866a4b4b8d27fa8964d12ce28dfea437108325e3baec6344479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ff728c867ab26866a4b4b8d27fa8964d12ce28dfea437108325e3baec6344479->leave($__internal_ff728c867ab26866a4b4b8d27fa8964d12ce28dfea437108325e3baec6344479_prof);

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
", "@Framework/Form/form_enctype.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

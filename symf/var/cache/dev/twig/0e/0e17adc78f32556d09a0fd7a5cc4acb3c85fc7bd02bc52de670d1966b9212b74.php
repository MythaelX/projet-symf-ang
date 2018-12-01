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
        $__internal_a18c5f0c06cf8ff7549c8c8ebc5fffe8a27bb6bdf0e6bdf837d6a227c64ef2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18c5f0c06cf8ff7549c8c8ebc5fffe8a27bb6bdf0e6bdf837d6a227c64ef2d2->enter($__internal_a18c5f0c06cf8ff7549c8c8ebc5fffe8a27bb6bdf0e6bdf837d6a227c64ef2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a18c5f0c06cf8ff7549c8c8ebc5fffe8a27bb6bdf0e6bdf837d6a227c64ef2d2->leave($__internal_a18c5f0c06cf8ff7549c8c8ebc5fffe8a27bb6bdf0e6bdf837d6a227c64ef2d2_prof);

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
", "@Framework/Form/form_enctype.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

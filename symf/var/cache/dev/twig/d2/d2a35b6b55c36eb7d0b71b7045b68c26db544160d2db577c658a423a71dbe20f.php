<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_470ece86f7caa8f71cfabe7f1a0afc9d30e3b59eaf777e04bfa5602338541ae2 extends Twig_Template
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
        $__internal_22b007fc0fc7b5c22ffc513f7d8131e66d07feff8d55faa63ed9d0d838e935e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b007fc0fc7b5c22ffc513f7d8131e66d07feff8d55faa63ed9d0d838e935e9->enter($__internal_22b007fc0fc7b5c22ffc513f7d8131e66d07feff8d55faa63ed9d0d838e935e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_22b007fc0fc7b5c22ffc513f7d8131e66d07feff8d55faa63ed9d0d838e935e9->leave($__internal_22b007fc0fc7b5c22ffc513f7d8131e66d07feff8d55faa63ed9d0d838e935e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_256745554f04cfe790ef5d40e1da1c3674a582da1973d7786a8b99432a698a91 extends Twig_Template
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
        $__internal_b22b6ccee1d4409b93e94d7a77ff7db0e5856706d1dd12c2bbc6c84ef6469920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22b6ccee1d4409b93e94d7a77ff7db0e5856706d1dd12c2bbc6c84ef6469920->enter($__internal_b22b6ccee1d4409b93e94d7a77ff7db0e5856706d1dd12c2bbc6c84ef6469920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b22b6ccee1d4409b93e94d7a77ff7db0e5856706d1dd12c2bbc6c84ef6469920->leave($__internal_b22b6ccee1d4409b93e94d7a77ff7db0e5856706d1dd12c2bbc6c84ef6469920_prof);

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
", "@Framework/Form/hidden_row.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

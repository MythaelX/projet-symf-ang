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
        $__internal_bdbb65991d189b65613cae3cc88359313386c5012ab1f83928af17d0882a5b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbb65991d189b65613cae3cc88359313386c5012ab1f83928af17d0882a5b54->enter($__internal_bdbb65991d189b65613cae3cc88359313386c5012ab1f83928af17d0882a5b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bdbb65991d189b65613cae3cc88359313386c5012ab1f83928af17d0882a5b54->leave($__internal_bdbb65991d189b65613cae3cc88359313386c5012ab1f83928af17d0882a5b54_prof);

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

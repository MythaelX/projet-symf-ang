<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5c0c67b2c3ca5c864a666f379b4c0c1385f0015a6543fd938ee148f3a2cd6912 extends Twig_Template
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
        $__internal_fd0b73c3beb532f56d314708c906f8b523160ec2e2afaa3f5ea7337e8598c3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0b73c3beb532f56d314708c906f8b523160ec2e2afaa3f5ea7337e8598c3eb->enter($__internal_fd0b73c3beb532f56d314708c906f8b523160ec2e2afaa3f5ea7337e8598c3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fd0b73c3beb532f56d314708c906f8b523160ec2e2afaa3f5ea7337e8598c3eb->leave($__internal_fd0b73c3beb532f56d314708c906f8b523160ec2e2afaa3f5ea7337e8598c3eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

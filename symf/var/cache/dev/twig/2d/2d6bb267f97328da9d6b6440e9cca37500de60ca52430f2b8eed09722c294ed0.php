<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_51e111d5245a1a3fdb99fdecf81b6fef2bf158dd6fd91323380540be2bfc4c14 extends Twig_Template
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
        $__internal_1afef7320a029d39a4a42f29f585ea23e5edc81a6f8ac1491ae950b2976701ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afef7320a029d39a4a42f29f585ea23e5edc81a6f8ac1491ae950b2976701ac->enter($__internal_1afef7320a029d39a4a42f29f585ea23e5edc81a6f8ac1491ae950b2976701ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1afef7320a029d39a4a42f29f585ea23e5edc81a6f8ac1491ae950b2976701ac->leave($__internal_1afef7320a029d39a4a42f29f585ea23e5edc81a6f8ac1491ae950b2976701ac_prof);

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
", "@Framework/FormTable/button_row.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

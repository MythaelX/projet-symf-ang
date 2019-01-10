<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_09aaa5ffde976993d02133f9088b76d2169c5b61726c1e3cbcf68de03764ea60 extends Twig_Template
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
        $__internal_320f45f0cc74848eb1c3908cf11420a3b822bafd5a7030939737c7d0e2d9dd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320f45f0cc74848eb1c3908cf11420a3b822bafd5a7030939737c7d0e2d9dd10->enter($__internal_320f45f0cc74848eb1c3908cf11420a3b822bafd5a7030939737c7d0e2d9dd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_320f45f0cc74848eb1c3908cf11420a3b822bafd5a7030939737c7d0e2d9dd10->leave($__internal_320f45f0cc74848eb1c3908cf11420a3b822bafd5a7030939737c7d0e2d9dd10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b07e46fbab6e3248060ff90543cdffd6f6a1d4fa5702a6041c2a9f107df8af71 extends Twig_Template
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
        $__internal_41a53a040f78dbe00a22012153c9dbab8d8dc204f95afd04d34f78920e46d6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a53a040f78dbe00a22012153c9dbab8d8dc204f95afd04d34f78920e46d6ed->enter($__internal_41a53a040f78dbe00a22012153c9dbab8d8dc204f95afd04d34f78920e46d6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_41a53a040f78dbe00a22012153c9dbab8d8dc204f95afd04d34f78920e46d6ed->leave($__internal_41a53a040f78dbe00a22012153c9dbab8d8dc204f95afd04d34f78920e46d6ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

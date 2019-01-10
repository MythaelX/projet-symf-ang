<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e9a76348d9988e0bd685e7b3156870a4cecbbc51e203e0311c57c613742a9234 extends Twig_Template
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
        $__internal_4347f8e5e5ffaa75e88139f979b82bf41fcfe9cb3fb02574259a6d82005693a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4347f8e5e5ffaa75e88139f979b82bf41fcfe9cb3fb02574259a6d82005693a6->enter($__internal_4347f8e5e5ffaa75e88139f979b82bf41fcfe9cb3fb02574259a6d82005693a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4347f8e5e5ffaa75e88139f979b82bf41fcfe9cb3fb02574259a6d82005693a6->leave($__internal_4347f8e5e5ffaa75e88139f979b82bf41fcfe9cb3fb02574259a6d82005693a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/clement/cir3/projet 2.0/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

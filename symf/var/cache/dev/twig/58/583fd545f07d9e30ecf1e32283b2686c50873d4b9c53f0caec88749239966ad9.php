<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8db7b94acd594c587431f951edcaf89b9bc8955a165bdbb78dc6e47c8a0eb0bc extends Twig_Template
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
        $__internal_8bdd44b74f673a9cd70851ff4007b775c2b87b4b74c031d246c1aef7335bf3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdd44b74f673a9cd70851ff4007b775c2b87b4b74c031d246c1aef7335bf3dd->enter($__internal_8bdd44b74f673a9cd70851ff4007b775c2b87b4b74c031d246c1aef7335bf3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8bdd44b74f673a9cd70851ff4007b775c2b87b4b74c031d246c1aef7335bf3dd->leave($__internal_8bdd44b74f673a9cd70851ff4007b775c2b87b4b74c031d246c1aef7335bf3dd_prof);

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
", "@Framework/Form/form_end.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

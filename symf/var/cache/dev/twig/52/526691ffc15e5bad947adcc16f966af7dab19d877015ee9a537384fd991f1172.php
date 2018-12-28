<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4f41b962ded3b8ff3b4ffa6789a7462f89a533e29dfb6b1b57d1b844045253bd extends Twig_Template
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
        $__internal_309fc0f6d4eba6a8afcb3ab02f4c336dddb5f54b7e6bc0e1b25c656b54dd2956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309fc0f6d4eba6a8afcb3ab02f4c336dddb5f54b7e6bc0e1b25c656b54dd2956->enter($__internal_309fc0f6d4eba6a8afcb3ab02f4c336dddb5f54b7e6bc0e1b25c656b54dd2956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_309fc0f6d4eba6a8afcb3ab02f4c336dddb5f54b7e6bc0e1b25c656b54dd2956->leave($__internal_309fc0f6d4eba6a8afcb3ab02f4c336dddb5f54b7e6bc0e1b25c656b54dd2956_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/media/silice/DD/COURS/info/symfony/projet/projet-symf-ang/symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

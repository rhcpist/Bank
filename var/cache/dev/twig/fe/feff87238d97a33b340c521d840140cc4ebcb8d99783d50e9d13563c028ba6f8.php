<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3b14a186faec829b90601654405c6f935f9e5c0cedea8c80d61f032d250a75ee extends Twig_Template
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
        $__internal_77f07b1e37158dba3719e55b1fadac8c49a7c7db2d8f2e81fc870d39961b3f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f07b1e37158dba3719e55b1fadac8c49a7c7db2d8f2e81fc870d39961b3f8d->enter($__internal_77f07b1e37158dba3719e55b1fadac8c49a7c7db2d8f2e81fc870d39961b3f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9b460fefce0f4f12f7640771c4173df02f0b05947b5c2a0d88968fed4c796003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b460fefce0f4f12f7640771c4173df02f0b05947b5c2a0d88968fed4c796003->enter($__internal_9b460fefce0f4f12f7640771c4173df02f0b05947b5c2a0d88968fed4c796003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_77f07b1e37158dba3719e55b1fadac8c49a7c7db2d8f2e81fc870d39961b3f8d->leave($__internal_77f07b1e37158dba3719e55b1fadac8c49a7c7db2d8f2e81fc870d39961b3f8d_prof);

        
        $__internal_9b460fefce0f4f12f7640771c4173df02f0b05947b5c2a0d88968fed4c796003->leave($__internal_9b460fefce0f4f12f7640771c4173df02f0b05947b5c2a0d88968fed4c796003_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

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
        $__internal_00c385cfba08e308285a85c19183d209455aaf3dd59e9cd1c51a2126fb2f211b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c385cfba08e308285a85c19183d209455aaf3dd59e9cd1c51a2126fb2f211b->enter($__internal_00c385cfba08e308285a85c19183d209455aaf3dd59e9cd1c51a2126fb2f211b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4379da99ce27710d84c092c8be84396f450373951a66a00b78884638726c5dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4379da99ce27710d84c092c8be84396f450373951a66a00b78884638726c5dfe->enter($__internal_4379da99ce27710d84c092c8be84396f450373951a66a00b78884638726c5dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_00c385cfba08e308285a85c19183d209455aaf3dd59e9cd1c51a2126fb2f211b->leave($__internal_00c385cfba08e308285a85c19183d209455aaf3dd59e9cd1c51a2126fb2f211b_prof);

        
        $__internal_4379da99ce27710d84c092c8be84396f450373951a66a00b78884638726c5dfe->leave($__internal_4379da99ce27710d84c092c8be84396f450373951a66a00b78884638726c5dfe_prof);

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

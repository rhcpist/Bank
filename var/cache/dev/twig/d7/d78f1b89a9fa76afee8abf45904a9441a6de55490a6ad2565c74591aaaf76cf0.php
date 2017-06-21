<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c1c41f5729bf1bbab0e561e4d4d1733b3bd4ff4e260e20ecb6da9cfde79c0b66 extends Twig_Template
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
        $__internal_7e25c7004978c7d70e9f7265d9ae4a9037755161bf4c86baee4cdc7d64b48602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e25c7004978c7d70e9f7265d9ae4a9037755161bf4c86baee4cdc7d64b48602->enter($__internal_7e25c7004978c7d70e9f7265d9ae4a9037755161bf4c86baee4cdc7d64b48602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f841721af11f0f98eca1bf8accf42306547915a2ab71f3038dc71d3ed83df838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f841721af11f0f98eca1bf8accf42306547915a2ab71f3038dc71d3ed83df838->enter($__internal_f841721af11f0f98eca1bf8accf42306547915a2ab71f3038dc71d3ed83df838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7e25c7004978c7d70e9f7265d9ae4a9037755161bf4c86baee4cdc7d64b48602->leave($__internal_7e25c7004978c7d70e9f7265d9ae4a9037755161bf4c86baee4cdc7d64b48602_prof);

        
        $__internal_f841721af11f0f98eca1bf8accf42306547915a2ab71f3038dc71d3ed83df838->leave($__internal_f841721af11f0f98eca1bf8accf42306547915a2ab71f3038dc71d3ed83df838_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

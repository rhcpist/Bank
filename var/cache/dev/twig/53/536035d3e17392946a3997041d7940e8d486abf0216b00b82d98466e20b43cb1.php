<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d93d8fd393a4f0c2bc03935b6ce68e4ccab0ceed64b4f40658e6cf9343c9523d extends Twig_Template
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
        $__internal_6f2d8ac9ea2dc15e8139e6960c658268d7282f8a5b97d6e4d3480d59e7fca9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2d8ac9ea2dc15e8139e6960c658268d7282f8a5b97d6e4d3480d59e7fca9f9->enter($__internal_6f2d8ac9ea2dc15e8139e6960c658268d7282f8a5b97d6e4d3480d59e7fca9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b3668248c3c4716716d19a57841c409030c99b806656d5818ace323327adaad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3668248c3c4716716d19a57841c409030c99b806656d5818ace323327adaad1->enter($__internal_b3668248c3c4716716d19a57841c409030c99b806656d5818ace323327adaad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6f2d8ac9ea2dc15e8139e6960c658268d7282f8a5b97d6e4d3480d59e7fca9f9->leave($__internal_6f2d8ac9ea2dc15e8139e6960c658268d7282f8a5b97d6e4d3480d59e7fca9f9_prof);

        
        $__internal_b3668248c3c4716716d19a57841c409030c99b806656d5818ace323327adaad1->leave($__internal_b3668248c3c4716716d19a57841c409030c99b806656d5818ace323327adaad1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

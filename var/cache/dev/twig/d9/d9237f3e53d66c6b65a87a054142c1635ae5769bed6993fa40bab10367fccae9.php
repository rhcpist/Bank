<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_dac36821a73888e0d91113b570e971f73242968a095a2b26c609213ef8fea79d extends Twig_Template
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
        $__internal_9e695d26c8729cb3294829691f901ee936ee6325f4e8ab9b0a6bf5c005fd7519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e695d26c8729cb3294829691f901ee936ee6325f4e8ab9b0a6bf5c005fd7519->enter($__internal_9e695d26c8729cb3294829691f901ee936ee6325f4e8ab9b0a6bf5c005fd7519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_53b77ad8ba3b85ca2c03f42132e021de40e5db4e79a1cb10731ca1dbc705b914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b77ad8ba3b85ca2c03f42132e021de40e5db4e79a1cb10731ca1dbc705b914->enter($__internal_53b77ad8ba3b85ca2c03f42132e021de40e5db4e79a1cb10731ca1dbc705b914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_9e695d26c8729cb3294829691f901ee936ee6325f4e8ab9b0a6bf5c005fd7519->leave($__internal_9e695d26c8729cb3294829691f901ee936ee6325f4e8ab9b0a6bf5c005fd7519_prof);

        
        $__internal_53b77ad8ba3b85ca2c03f42132e021de40e5db4e79a1cb10731ca1dbc705b914->leave($__internal_53b77ad8ba3b85ca2c03f42132e021de40e5db4e79a1cb10731ca1dbc705b914_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

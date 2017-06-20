<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d529913c9c13e818e6ca281e0170ed902156c999d1a7f4d42f87f76426e45045 extends Twig_Template
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
        $__internal_c95af5db8d05da6575e9c3fd9649d543378db7858d5e8c054c5b855f809e6490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95af5db8d05da6575e9c3fd9649d543378db7858d5e8c054c5b855f809e6490->enter($__internal_c95af5db8d05da6575e9c3fd9649d543378db7858d5e8c054c5b855f809e6490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ef9d5a0bd1bc185c9d8f60e16dc543e3f2e04c22906ab16d84cdb78d7472ef8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9d5a0bd1bc185c9d8f60e16dc543e3f2e04c22906ab16d84cdb78d7472ef8f->enter($__internal_ef9d5a0bd1bc185c9d8f60e16dc543e3f2e04c22906ab16d84cdb78d7472ef8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c95af5db8d05da6575e9c3fd9649d543378db7858d5e8c054c5b855f809e6490->leave($__internal_c95af5db8d05da6575e9c3fd9649d543378db7858d5e8c054c5b855f809e6490_prof);

        
        $__internal_ef9d5a0bd1bc185c9d8f60e16dc543e3f2e04c22906ab16d84cdb78d7472ef8f->leave($__internal_ef9d5a0bd1bc185c9d8f60e16dc543e3f2e04c22906ab16d84cdb78d7472ef8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

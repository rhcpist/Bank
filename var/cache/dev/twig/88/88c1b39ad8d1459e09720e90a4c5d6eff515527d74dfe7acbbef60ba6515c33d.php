<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fc03a2b00a027e8068acf4b8788a2e5433a000dc986dca7d00474dd005814e76 extends Twig_Template
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
        $__internal_4a426e7ee3fe291272848d827029b812466c4917d0cda7f008f1804b8acf5787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a426e7ee3fe291272848d827029b812466c4917d0cda7f008f1804b8acf5787->enter($__internal_4a426e7ee3fe291272848d827029b812466c4917d0cda7f008f1804b8acf5787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_de2b05b53ca1e997be4c4974a872144288386356e7327cfdbad7388858c05f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2b05b53ca1e997be4c4974a872144288386356e7327cfdbad7388858c05f40->enter($__internal_de2b05b53ca1e997be4c4974a872144288386356e7327cfdbad7388858c05f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4a426e7ee3fe291272848d827029b812466c4917d0cda7f008f1804b8acf5787->leave($__internal_4a426e7ee3fe291272848d827029b812466c4917d0cda7f008f1804b8acf5787_prof);

        
        $__internal_de2b05b53ca1e997be4c4974a872144288386356e7327cfdbad7388858c05f40->leave($__internal_de2b05b53ca1e997be4c4974a872144288386356e7327cfdbad7388858c05f40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

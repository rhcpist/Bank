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
        $__internal_7daa2046b99d8f97d82e2024ad8b95a8abfe532d16ea7c0c28a97366283e3dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7daa2046b99d8f97d82e2024ad8b95a8abfe532d16ea7c0c28a97366283e3dcb->enter($__internal_7daa2046b99d8f97d82e2024ad8b95a8abfe532d16ea7c0c28a97366283e3dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_67c0184f85faa7448a35689cba9d490632b676a752cd767a64069f208953c8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c0184f85faa7448a35689cba9d490632b676a752cd767a64069f208953c8fb->enter($__internal_67c0184f85faa7448a35689cba9d490632b676a752cd767a64069f208953c8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7daa2046b99d8f97d82e2024ad8b95a8abfe532d16ea7c0c28a97366283e3dcb->leave($__internal_7daa2046b99d8f97d82e2024ad8b95a8abfe532d16ea7c0c28a97366283e3dcb_prof);

        
        $__internal_67c0184f85faa7448a35689cba9d490632b676a752cd767a64069f208953c8fb->leave($__internal_67c0184f85faa7448a35689cba9d490632b676a752cd767a64069f208953c8fb_prof);

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

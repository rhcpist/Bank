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
        $__internal_8d968d436a865fe3f41bbbcf1f5054a2cac45c56553cbfd1cb4b63b0a89610fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d968d436a865fe3f41bbbcf1f5054a2cac45c56553cbfd1cb4b63b0a89610fd->enter($__internal_8d968d436a865fe3f41bbbcf1f5054a2cac45c56553cbfd1cb4b63b0a89610fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_44a8693454a2ef90922ceab2d624c3c6b3a30578a699c135855fc30c202f8f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a8693454a2ef90922ceab2d624c3c6b3a30578a699c135855fc30c202f8f5d->enter($__internal_44a8693454a2ef90922ceab2d624c3c6b3a30578a699c135855fc30c202f8f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8d968d436a865fe3f41bbbcf1f5054a2cac45c56553cbfd1cb4b63b0a89610fd->leave($__internal_8d968d436a865fe3f41bbbcf1f5054a2cac45c56553cbfd1cb4b63b0a89610fd_prof);

        
        $__internal_44a8693454a2ef90922ceab2d624c3c6b3a30578a699c135855fc30c202f8f5d->leave($__internal_44a8693454a2ef90922ceab2d624c3c6b3a30578a699c135855fc30c202f8f5d_prof);

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

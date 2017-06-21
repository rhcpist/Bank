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
        $__internal_6828a6a3b70ecbfd5893999b603a122b5ffe5691529cc6286dec5163493527e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6828a6a3b70ecbfd5893999b603a122b5ffe5691529cc6286dec5163493527e1->enter($__internal_6828a6a3b70ecbfd5893999b603a122b5ffe5691529cc6286dec5163493527e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_476211b225979fe9d84908c66f2e6c8d68aa3b256fdf7d13293e2689bf342dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476211b225979fe9d84908c66f2e6c8d68aa3b256fdf7d13293e2689bf342dfb->enter($__internal_476211b225979fe9d84908c66f2e6c8d68aa3b256fdf7d13293e2689bf342dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6828a6a3b70ecbfd5893999b603a122b5ffe5691529cc6286dec5163493527e1->leave($__internal_6828a6a3b70ecbfd5893999b603a122b5ffe5691529cc6286dec5163493527e1_prof);

        
        $__internal_476211b225979fe9d84908c66f2e6c8d68aa3b256fdf7d13293e2689bf342dfb->leave($__internal_476211b225979fe9d84908c66f2e6c8d68aa3b256fdf7d13293e2689bf342dfb_prof);

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

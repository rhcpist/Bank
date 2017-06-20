<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7f82ac4b325906bb4443567d0e0d7cc47706b94c8a664c53f1f27cbd4e2e6638 extends Twig_Template
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
        $__internal_2d09dcfb737dda96ab59a4b5b0b91cec08c49f77877b9bca3f8ffabf49ba3ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d09dcfb737dda96ab59a4b5b0b91cec08c49f77877b9bca3f8ffabf49ba3ad6->enter($__internal_2d09dcfb737dda96ab59a4b5b0b91cec08c49f77877b9bca3f8ffabf49ba3ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_850a10f88f305748338630d8fcdd8ff3a6956231bc4ebb45a84370c6ded3d032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850a10f88f305748338630d8fcdd8ff3a6956231bc4ebb45a84370c6ded3d032->enter($__internal_850a10f88f305748338630d8fcdd8ff3a6956231bc4ebb45a84370c6ded3d032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2d09dcfb737dda96ab59a4b5b0b91cec08c49f77877b9bca3f8ffabf49ba3ad6->leave($__internal_2d09dcfb737dda96ab59a4b5b0b91cec08c49f77877b9bca3f8ffabf49ba3ad6_prof);

        
        $__internal_850a10f88f305748338630d8fcdd8ff3a6956231bc4ebb45a84370c6ded3d032->leave($__internal_850a10f88f305748338630d8fcdd8ff3a6956231bc4ebb45a84370c6ded3d032_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

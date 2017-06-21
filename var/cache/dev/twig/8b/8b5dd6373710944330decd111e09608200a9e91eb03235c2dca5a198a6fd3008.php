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
        $__internal_fdf3a7fe93c520ab5926ca8544772f33001adb2334486e74b48e9509d7c55b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf3a7fe93c520ab5926ca8544772f33001adb2334486e74b48e9509d7c55b99->enter($__internal_fdf3a7fe93c520ab5926ca8544772f33001adb2334486e74b48e9509d7c55b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9be2c643d7c385229bf5d05ac3f65f28763cd413c5dd02e1208b1e918cf46492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be2c643d7c385229bf5d05ac3f65f28763cd413c5dd02e1208b1e918cf46492->enter($__internal_9be2c643d7c385229bf5d05ac3f65f28763cd413c5dd02e1208b1e918cf46492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fdf3a7fe93c520ab5926ca8544772f33001adb2334486e74b48e9509d7c55b99->leave($__internal_fdf3a7fe93c520ab5926ca8544772f33001adb2334486e74b48e9509d7c55b99_prof);

        
        $__internal_9be2c643d7c385229bf5d05ac3f65f28763cd413c5dd02e1208b1e918cf46492->leave($__internal_9be2c643d7c385229bf5d05ac3f65f28763cd413c5dd02e1208b1e918cf46492_prof);

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

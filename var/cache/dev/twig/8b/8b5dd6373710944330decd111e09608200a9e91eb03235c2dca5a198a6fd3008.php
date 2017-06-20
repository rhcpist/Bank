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
        $__internal_35756ab0c56dd1693860fd03c7d5a0a9512cc4f400ca45f7fd60baa8f90168c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35756ab0c56dd1693860fd03c7d5a0a9512cc4f400ca45f7fd60baa8f90168c5->enter($__internal_35756ab0c56dd1693860fd03c7d5a0a9512cc4f400ca45f7fd60baa8f90168c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_60995025a6767f010e870d60d5bf05450bf43db01bb915079538a3a8e9543b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60995025a6767f010e870d60d5bf05450bf43db01bb915079538a3a8e9543b9f->enter($__internal_60995025a6767f010e870d60d5bf05450bf43db01bb915079538a3a8e9543b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_35756ab0c56dd1693860fd03c7d5a0a9512cc4f400ca45f7fd60baa8f90168c5->leave($__internal_35756ab0c56dd1693860fd03c7d5a0a9512cc4f400ca45f7fd60baa8f90168c5_prof);

        
        $__internal_60995025a6767f010e870d60d5bf05450bf43db01bb915079538a3a8e9543b9f->leave($__internal_60995025a6767f010e870d60d5bf05450bf43db01bb915079538a3a8e9543b9f_prof);

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

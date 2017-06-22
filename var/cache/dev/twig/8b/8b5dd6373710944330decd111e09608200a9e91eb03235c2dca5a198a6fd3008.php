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
        $__internal_a138aabf2b1305b5d2cc4ffb242f841e80117db586e47161ee8950df3a204669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a138aabf2b1305b5d2cc4ffb242f841e80117db586e47161ee8950df3a204669->enter($__internal_a138aabf2b1305b5d2cc4ffb242f841e80117db586e47161ee8950df3a204669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_826d0af083341d65323dcd292393d6b8e263fa7830c62acec9ebf6fc646dd05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826d0af083341d65323dcd292393d6b8e263fa7830c62acec9ebf6fc646dd05d->enter($__internal_826d0af083341d65323dcd292393d6b8e263fa7830c62acec9ebf6fc646dd05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a138aabf2b1305b5d2cc4ffb242f841e80117db586e47161ee8950df3a204669->leave($__internal_a138aabf2b1305b5d2cc4ffb242f841e80117db586e47161ee8950df3a204669_prof);

        
        $__internal_826d0af083341d65323dcd292393d6b8e263fa7830c62acec9ebf6fc646dd05d->leave($__internal_826d0af083341d65323dcd292393d6b8e263fa7830c62acec9ebf6fc646dd05d_prof);

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

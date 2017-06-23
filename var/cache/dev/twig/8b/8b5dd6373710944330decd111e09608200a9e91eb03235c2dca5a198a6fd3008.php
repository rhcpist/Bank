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
        $__internal_59bc2860dc30d48829d55d3bacb09f89b452083f1b2515269e82b3c99d0e51ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59bc2860dc30d48829d55d3bacb09f89b452083f1b2515269e82b3c99d0e51ff->enter($__internal_59bc2860dc30d48829d55d3bacb09f89b452083f1b2515269e82b3c99d0e51ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a3becddebbf4406eb01a712fc30bb7b8cdebf80b5996fdf51b13db64b42fce43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3becddebbf4406eb01a712fc30bb7b8cdebf80b5996fdf51b13db64b42fce43->enter($__internal_a3becddebbf4406eb01a712fc30bb7b8cdebf80b5996fdf51b13db64b42fce43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_59bc2860dc30d48829d55d3bacb09f89b452083f1b2515269e82b3c99d0e51ff->leave($__internal_59bc2860dc30d48829d55d3bacb09f89b452083f1b2515269e82b3c99d0e51ff_prof);

        
        $__internal_a3becddebbf4406eb01a712fc30bb7b8cdebf80b5996fdf51b13db64b42fce43->leave($__internal_a3becddebbf4406eb01a712fc30bb7b8cdebf80b5996fdf51b13db64b42fce43_prof);

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

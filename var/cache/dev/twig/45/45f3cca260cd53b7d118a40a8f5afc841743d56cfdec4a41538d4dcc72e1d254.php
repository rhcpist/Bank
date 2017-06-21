<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1be51bb0e6c2111e442eeb6c5ef24086c9e3be15f2209df93ca677121db886ba extends Twig_Template
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
        $__internal_1f81d359b0668c8348398e781614907aae5ed00e99f610beeb0a9f5d312651c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f81d359b0668c8348398e781614907aae5ed00e99f610beeb0a9f5d312651c6->enter($__internal_1f81d359b0668c8348398e781614907aae5ed00e99f610beeb0a9f5d312651c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d478de6a826559be921d879baf347148391dab2a93faa2423d5b3cc637a64c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d478de6a826559be921d879baf347148391dab2a93faa2423d5b3cc637a64c1d->enter($__internal_d478de6a826559be921d879baf347148391dab2a93faa2423d5b3cc637a64c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1f81d359b0668c8348398e781614907aae5ed00e99f610beeb0a9f5d312651c6->leave($__internal_1f81d359b0668c8348398e781614907aae5ed00e99f610beeb0a9f5d312651c6_prof);

        
        $__internal_d478de6a826559be921d879baf347148391dab2a93faa2423d5b3cc637a64c1d->leave($__internal_d478de6a826559be921d879baf347148391dab2a93faa2423d5b3cc637a64c1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}

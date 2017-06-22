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
        $__internal_f7fc01a6d3cba388d2f56974fee60eeefb3625d1ac881593791d2a44ac5566f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fc01a6d3cba388d2f56974fee60eeefb3625d1ac881593791d2a44ac5566f0->enter($__internal_f7fc01a6d3cba388d2f56974fee60eeefb3625d1ac881593791d2a44ac5566f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c83c56a0b2c0b84cad1803055637cce45d33f280b2ca298abee951374300b93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83c56a0b2c0b84cad1803055637cce45d33f280b2ca298abee951374300b93b->enter($__internal_c83c56a0b2c0b84cad1803055637cce45d33f280b2ca298abee951374300b93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f7fc01a6d3cba388d2f56974fee60eeefb3625d1ac881593791d2a44ac5566f0->leave($__internal_f7fc01a6d3cba388d2f56974fee60eeefb3625d1ac881593791d2a44ac5566f0_prof);

        
        $__internal_c83c56a0b2c0b84cad1803055637cce45d33f280b2ca298abee951374300b93b->leave($__internal_c83c56a0b2c0b84cad1803055637cce45d33f280b2ca298abee951374300b93b_prof);

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

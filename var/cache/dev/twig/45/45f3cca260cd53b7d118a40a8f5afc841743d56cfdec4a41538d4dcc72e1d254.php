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
        $__internal_a83ea11859ab5106b8ccc3512450a43bd0ea6e05ca8228c6ff8523045355670e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83ea11859ab5106b8ccc3512450a43bd0ea6e05ca8228c6ff8523045355670e->enter($__internal_a83ea11859ab5106b8ccc3512450a43bd0ea6e05ca8228c6ff8523045355670e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_cc434b99354bcb5961363ed5f9df2f43607e5dee5d69800272c43a6387f84978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc434b99354bcb5961363ed5f9df2f43607e5dee5d69800272c43a6387f84978->enter($__internal_cc434b99354bcb5961363ed5f9df2f43607e5dee5d69800272c43a6387f84978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a83ea11859ab5106b8ccc3512450a43bd0ea6e05ca8228c6ff8523045355670e->leave($__internal_a83ea11859ab5106b8ccc3512450a43bd0ea6e05ca8228c6ff8523045355670e_prof);

        
        $__internal_cc434b99354bcb5961363ed5f9df2f43607e5dee5d69800272c43a6387f84978->leave($__internal_cc434b99354bcb5961363ed5f9df2f43607e5dee5d69800272c43a6387f84978_prof);

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

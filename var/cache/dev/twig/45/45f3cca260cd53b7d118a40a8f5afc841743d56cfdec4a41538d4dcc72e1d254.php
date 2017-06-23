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
        $__internal_a6a404f9c2d3da7380c29423986aab9392dbe2ebe27429ce464e3bd81d7f072f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a404f9c2d3da7380c29423986aab9392dbe2ebe27429ce464e3bd81d7f072f->enter($__internal_a6a404f9c2d3da7380c29423986aab9392dbe2ebe27429ce464e3bd81d7f072f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4a07834f169ae9d9290a817cd65845028c194353e7236a37a37b5c0c770eb5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a07834f169ae9d9290a817cd65845028c194353e7236a37a37b5c0c770eb5cb->enter($__internal_4a07834f169ae9d9290a817cd65845028c194353e7236a37a37b5c0c770eb5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a6a404f9c2d3da7380c29423986aab9392dbe2ebe27429ce464e3bd81d7f072f->leave($__internal_a6a404f9c2d3da7380c29423986aab9392dbe2ebe27429ce464e3bd81d7f072f_prof);

        
        $__internal_4a07834f169ae9d9290a817cd65845028c194353e7236a37a37b5c0c770eb5cb->leave($__internal_4a07834f169ae9d9290a817cd65845028c194353e7236a37a37b5c0c770eb5cb_prof);

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

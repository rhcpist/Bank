<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_f5d9f001dbeab4b975802092d0303713c82d2ba560188d2e1bb6021046558db4 extends Twig_Template
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
        $__internal_a529f5b15cd57be206b690a829e3ec114e8d0664478095e944c48da676c1dfb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a529f5b15cd57be206b690a829e3ec114e8d0664478095e944c48da676c1dfb8->enter($__internal_a529f5b15cd57be206b690a829e3ec114e8d0664478095e944c48da676c1dfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_d0b8cc409fc9cef549273ec65d7779554bafffbea4d49e7ccfc7ab8bf2b8a65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b8cc409fc9cef549273ec65d7779554bafffbea4d49e7ccfc7ab8bf2b8a65d->enter($__internal_d0b8cc409fc9cef549273ec65d7779554bafffbea4d49e7ccfc7ab8bf2b8a65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_a529f5b15cd57be206b690a829e3ec114e8d0664478095e944c48da676c1dfb8->leave($__internal_a529f5b15cd57be206b690a829e3ec114e8d0664478095e944c48da676c1dfb8_prof);

        
        $__internal_d0b8cc409fc9cef549273ec65d7779554bafffbea4d49e7ccfc7ab8bf2b8a65d->leave($__internal_d0b8cc409fc9cef549273ec65d7779554bafffbea4d49e7ccfc7ab8bf2b8a65d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}

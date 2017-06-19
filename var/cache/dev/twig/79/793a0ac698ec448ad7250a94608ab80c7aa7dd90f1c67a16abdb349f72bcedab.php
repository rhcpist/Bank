<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_45e41ff887bf452337ef061634ece413b4f13ff380ee913647613a14ce642f08 extends Twig_Template
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
        $__internal_4c368ff81a2d47624e2b140e223686b38e0cab642d9b0f19ee8257e240359981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c368ff81a2d47624e2b140e223686b38e0cab642d9b0f19ee8257e240359981->enter($__internal_4c368ff81a2d47624e2b140e223686b38e0cab642d9b0f19ee8257e240359981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4b55da7ef80e325f2ae548ceeb0947de12d1c156fceca88511e49a9e1435db26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b55da7ef80e325f2ae548ceeb0947de12d1c156fceca88511e49a9e1435db26->enter($__internal_4b55da7ef80e325f2ae548ceeb0947de12d1c156fceca88511e49a9e1435db26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4c368ff81a2d47624e2b140e223686b38e0cab642d9b0f19ee8257e240359981->leave($__internal_4c368ff81a2d47624e2b140e223686b38e0cab642d9b0f19ee8257e240359981_prof);

        
        $__internal_4b55da7ef80e325f2ae548ceeb0947de12d1c156fceca88511e49a9e1435db26->leave($__internal_4b55da7ef80e325f2ae548ceeb0947de12d1c156fceca88511e49a9e1435db26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

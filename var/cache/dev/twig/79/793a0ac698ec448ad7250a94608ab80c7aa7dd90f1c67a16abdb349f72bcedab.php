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
        $__internal_4d7735eda0b60200b55f1b5ca3769bf72bed9f67abc92466a830cd422dc582d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7735eda0b60200b55f1b5ca3769bf72bed9f67abc92466a830cd422dc582d3->enter($__internal_4d7735eda0b60200b55f1b5ca3769bf72bed9f67abc92466a830cd422dc582d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e183983f6784bd77c5e316946ba1e8207fa9972c0cc7f538c0b8baba6e173315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e183983f6784bd77c5e316946ba1e8207fa9972c0cc7f538c0b8baba6e173315->enter($__internal_e183983f6784bd77c5e316946ba1e8207fa9972c0cc7f538c0b8baba6e173315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4d7735eda0b60200b55f1b5ca3769bf72bed9f67abc92466a830cd422dc582d3->leave($__internal_4d7735eda0b60200b55f1b5ca3769bf72bed9f67abc92466a830cd422dc582d3_prof);

        
        $__internal_e183983f6784bd77c5e316946ba1e8207fa9972c0cc7f538c0b8baba6e173315->leave($__internal_e183983f6784bd77c5e316946ba1e8207fa9972c0cc7f538c0b8baba6e173315_prof);

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

<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f0d6cd30d3be5bbf16f923f424070314a1de68bad754966093f391bbfe4380c6 extends Twig_Template
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
        $__internal_8c6f04a17dac7b04df4b3c4a9456f6c56301b4bf517bab17b1588210ba0a637b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6f04a17dac7b04df4b3c4a9456f6c56301b4bf517bab17b1588210ba0a637b->enter($__internal_8c6f04a17dac7b04df4b3c4a9456f6c56301b4bf517bab17b1588210ba0a637b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d9d913023b0a3ece171c26bbfa3d491d8ade92ccbd5b1e1723559db59bbc4826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d913023b0a3ece171c26bbfa3d491d8ade92ccbd5b1e1723559db59bbc4826->enter($__internal_d9d913023b0a3ece171c26bbfa3d491d8ade92ccbd5b1e1723559db59bbc4826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8c6f04a17dac7b04df4b3c4a9456f6c56301b4bf517bab17b1588210ba0a637b->leave($__internal_8c6f04a17dac7b04df4b3c4a9456f6c56301b4bf517bab17b1588210ba0a637b_prof);

        
        $__internal_d9d913023b0a3ece171c26bbfa3d491d8ade92ccbd5b1e1723559db59bbc4826->leave($__internal_d9d913023b0a3ece171c26bbfa3d491d8ade92ccbd5b1e1723559db59bbc4826_prof);

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

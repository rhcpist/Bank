<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c9b0686f7d8e4155f810da41db407bd7baa6851b6128752546c0f9f515c14a06 extends Twig_Template
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
        $__internal_c249977035abd3cbff60914a7df0e2826ba83adf7bb0d94923ac2012cc899684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c249977035abd3cbff60914a7df0e2826ba83adf7bb0d94923ac2012cc899684->enter($__internal_c249977035abd3cbff60914a7df0e2826ba83adf7bb0d94923ac2012cc899684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_416729882066e6ed27912674c15986d0359be8a391736d4affa4f746c8b49a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416729882066e6ed27912674c15986d0359be8a391736d4affa4f746c8b49a2c->enter($__internal_416729882066e6ed27912674c15986d0359be8a391736d4affa4f746c8b49a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c249977035abd3cbff60914a7df0e2826ba83adf7bb0d94923ac2012cc899684->leave($__internal_c249977035abd3cbff60914a7df0e2826ba83adf7bb0d94923ac2012cc899684_prof);

        
        $__internal_416729882066e6ed27912674c15986d0359be8a391736d4affa4f746c8b49a2c->leave($__internal_416729882066e6ed27912674c15986d0359be8a391736d4affa4f746c8b49a2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}

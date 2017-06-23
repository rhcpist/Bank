<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e8911517946b7b5fc0c39a0484a2e12193e218bdbdcae3edc56769820da6b4e2 extends Twig_Template
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
        $__internal_14165f846e10e75d605c8a705d1492d04bbb28abcba8eb4e3e7fa71e2365c8ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14165f846e10e75d605c8a705d1492d04bbb28abcba8eb4e3e7fa71e2365c8ec->enter($__internal_14165f846e10e75d605c8a705d1492d04bbb28abcba8eb4e3e7fa71e2365c8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_59e63fde98b6e58ddbe1e088456d00061c1cdf97ca136ac6e4a20942d36e5242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e63fde98b6e58ddbe1e088456d00061c1cdf97ca136ac6e4a20942d36e5242->enter($__internal_59e63fde98b6e58ddbe1e088456d00061c1cdf97ca136ac6e4a20942d36e5242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_14165f846e10e75d605c8a705d1492d04bbb28abcba8eb4e3e7fa71e2365c8ec->leave($__internal_14165f846e10e75d605c8a705d1492d04bbb28abcba8eb4e3e7fa71e2365c8ec_prof);

        
        $__internal_59e63fde98b6e58ddbe1e088456d00061c1cdf97ca136ac6e4a20942d36e5242->leave($__internal_59e63fde98b6e58ddbe1e088456d00061c1cdf97ca136ac6e4a20942d36e5242_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

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
        $__internal_4e680d197a9734330ea684302847b2148f6abc7869335234c8d100ebcf4a3877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e680d197a9734330ea684302847b2148f6abc7869335234c8d100ebcf4a3877->enter($__internal_4e680d197a9734330ea684302847b2148f6abc7869335234c8d100ebcf4a3877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3a4a866a6bc8abf97e6e73d75c4d227391864594562dad3d7b18c7072cf68ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4a866a6bc8abf97e6e73d75c4d227391864594562dad3d7b18c7072cf68ca7->enter($__internal_3a4a866a6bc8abf97e6e73d75c4d227391864594562dad3d7b18c7072cf68ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4e680d197a9734330ea684302847b2148f6abc7869335234c8d100ebcf4a3877->leave($__internal_4e680d197a9734330ea684302847b2148f6abc7869335234c8d100ebcf4a3877_prof);

        
        $__internal_3a4a866a6bc8abf97e6e73d75c4d227391864594562dad3d7b18c7072cf68ca7->leave($__internal_3a4a866a6bc8abf97e6e73d75c4d227391864594562dad3d7b18c7072cf68ca7_prof);

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

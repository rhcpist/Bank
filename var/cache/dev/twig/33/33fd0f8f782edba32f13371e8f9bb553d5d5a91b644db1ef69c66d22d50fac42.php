<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f6b7cfcc0ca6e7784f402d5351a8963a0457e5d7907df3854702098a4c617091 extends Twig_Template
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
        $__internal_318207798d54e8118c0701b47d10d8047193afe9e9e3181121958a5b16488a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318207798d54e8118c0701b47d10d8047193afe9e9e3181121958a5b16488a97->enter($__internal_318207798d54e8118c0701b47d10d8047193afe9e9e3181121958a5b16488a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_25e801a8cef1ee861643ac339a7001fe0a99d6aa378b54239b610b84dc4cb854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e801a8cef1ee861643ac339a7001fe0a99d6aa378b54239b610b84dc4cb854->enter($__internal_25e801a8cef1ee861643ac339a7001fe0a99d6aa378b54239b610b84dc4cb854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_318207798d54e8118c0701b47d10d8047193afe9e9e3181121958a5b16488a97->leave($__internal_318207798d54e8118c0701b47d10d8047193afe9e9e3181121958a5b16488a97_prof);

        
        $__internal_25e801a8cef1ee861643ac339a7001fe0a99d6aa378b54239b610b84dc4cb854->leave($__internal_25e801a8cef1ee861643ac339a7001fe0a99d6aa378b54239b610b84dc4cb854_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

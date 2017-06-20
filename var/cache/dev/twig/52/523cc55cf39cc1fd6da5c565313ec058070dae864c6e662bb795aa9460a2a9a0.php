<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2f855983947ccb822a3f333bb4742a654c143f40ebc6a80deac257df1ca8c134 extends Twig_Template
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
        $__internal_911f4ea114e3a190e0406aa483830141d615c13524182039167dd76544189909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911f4ea114e3a190e0406aa483830141d615c13524182039167dd76544189909->enter($__internal_911f4ea114e3a190e0406aa483830141d615c13524182039167dd76544189909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_505f783afccb5344c6f9eace13ac2aa0c6a4985495f97e05db69a21d5afe5a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505f783afccb5344c6f9eace13ac2aa0c6a4985495f97e05db69a21d5afe5a72->enter($__internal_505f783afccb5344c6f9eace13ac2aa0c6a4985495f97e05db69a21d5afe5a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_911f4ea114e3a190e0406aa483830141d615c13524182039167dd76544189909->leave($__internal_911f4ea114e3a190e0406aa483830141d615c13524182039167dd76544189909_prof);

        
        $__internal_505f783afccb5344c6f9eace13ac2aa0c6a4985495f97e05db69a21d5afe5a72->leave($__internal_505f783afccb5344c6f9eace13ac2aa0c6a4985495f97e05db69a21d5afe5a72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

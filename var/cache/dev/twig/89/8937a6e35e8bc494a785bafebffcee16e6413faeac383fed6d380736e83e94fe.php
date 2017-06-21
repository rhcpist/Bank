<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_335243e1645443dbe671377594d4d0228fbab5e00d3c14543b934ca2cfdb6681 extends Twig_Template
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
        $__internal_122b67a87c19f486d76ce15399f9c4ff1eb81070026dcee45ecc13bdfd689f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122b67a87c19f486d76ce15399f9c4ff1eb81070026dcee45ecc13bdfd689f89->enter($__internal_122b67a87c19f486d76ce15399f9c4ff1eb81070026dcee45ecc13bdfd689f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_89604e27d3d4b410cc561dddf299da9b19ed8b6dae1e7049088f488659b356c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89604e27d3d4b410cc561dddf299da9b19ed8b6dae1e7049088f488659b356c0->enter($__internal_89604e27d3d4b410cc561dddf299da9b19ed8b6dae1e7049088f488659b356c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_122b67a87c19f486d76ce15399f9c4ff1eb81070026dcee45ecc13bdfd689f89->leave($__internal_122b67a87c19f486d76ce15399f9c4ff1eb81070026dcee45ecc13bdfd689f89_prof);

        
        $__internal_89604e27d3d4b410cc561dddf299da9b19ed8b6dae1e7049088f488659b356c0->leave($__internal_89604e27d3d4b410cc561dddf299da9b19ed8b6dae1e7049088f488659b356c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

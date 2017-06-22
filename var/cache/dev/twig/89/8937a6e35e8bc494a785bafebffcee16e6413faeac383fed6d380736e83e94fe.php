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
        $__internal_155a1e67bae29d1c0e958e9d142f6570d378fbec69cf82bd076216c3d6841b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155a1e67bae29d1c0e958e9d142f6570d378fbec69cf82bd076216c3d6841b92->enter($__internal_155a1e67bae29d1c0e958e9d142f6570d378fbec69cf82bd076216c3d6841b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8d708f654dececc8c2bd5081bfc5378d7386ec189e290f2e797269a66a9670ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d708f654dececc8c2bd5081bfc5378d7386ec189e290f2e797269a66a9670ad->enter($__internal_8d708f654dececc8c2bd5081bfc5378d7386ec189e290f2e797269a66a9670ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_155a1e67bae29d1c0e958e9d142f6570d378fbec69cf82bd076216c3d6841b92->leave($__internal_155a1e67bae29d1c0e958e9d142f6570d378fbec69cf82bd076216c3d6841b92_prof);

        
        $__internal_8d708f654dececc8c2bd5081bfc5378d7386ec189e290f2e797269a66a9670ad->leave($__internal_8d708f654dececc8c2bd5081bfc5378d7386ec189e290f2e797269a66a9670ad_prof);

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

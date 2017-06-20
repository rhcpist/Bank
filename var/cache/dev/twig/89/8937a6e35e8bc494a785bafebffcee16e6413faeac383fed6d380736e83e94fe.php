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
        $__internal_17a6b2ca8bdc17b0983fd184d244edeacd6447ffcce5593761e82a84047a130d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a6b2ca8bdc17b0983fd184d244edeacd6447ffcce5593761e82a84047a130d->enter($__internal_17a6b2ca8bdc17b0983fd184d244edeacd6447ffcce5593761e82a84047a130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1776c5eb4d68cb1e38c60d35aa7134c151f83ded16aeffb30b63825499906059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1776c5eb4d68cb1e38c60d35aa7134c151f83ded16aeffb30b63825499906059->enter($__internal_1776c5eb4d68cb1e38c60d35aa7134c151f83ded16aeffb30b63825499906059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_17a6b2ca8bdc17b0983fd184d244edeacd6447ffcce5593761e82a84047a130d->leave($__internal_17a6b2ca8bdc17b0983fd184d244edeacd6447ffcce5593761e82a84047a130d_prof);

        
        $__internal_1776c5eb4d68cb1e38c60d35aa7134c151f83ded16aeffb30b63825499906059->leave($__internal_1776c5eb4d68cb1e38c60d35aa7134c151f83ded16aeffb30b63825499906059_prof);

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

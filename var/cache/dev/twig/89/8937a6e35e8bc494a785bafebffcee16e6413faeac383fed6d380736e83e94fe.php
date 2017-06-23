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
        $__internal_0480e48832d62007f54b190ade792cb58e5d162ac80cddc0b3cc7071ad2fe886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0480e48832d62007f54b190ade792cb58e5d162ac80cddc0b3cc7071ad2fe886->enter($__internal_0480e48832d62007f54b190ade792cb58e5d162ac80cddc0b3cc7071ad2fe886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8a5ed521c64125263d3051642d024f2a9c6ed9c356ebcdee99b63e9a3fb565d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5ed521c64125263d3051642d024f2a9c6ed9c356ebcdee99b63e9a3fb565d8->enter($__internal_8a5ed521c64125263d3051642d024f2a9c6ed9c356ebcdee99b63e9a3fb565d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0480e48832d62007f54b190ade792cb58e5d162ac80cddc0b3cc7071ad2fe886->leave($__internal_0480e48832d62007f54b190ade792cb58e5d162ac80cddc0b3cc7071ad2fe886_prof);

        
        $__internal_8a5ed521c64125263d3051642d024f2a9c6ed9c356ebcdee99b63e9a3fb565d8->leave($__internal_8a5ed521c64125263d3051642d024f2a9c6ed9c356ebcdee99b63e9a3fb565d8_prof);

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

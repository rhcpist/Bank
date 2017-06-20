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
        $__internal_b3da332a732ab4309429742fd809d0815f5dafabcadb16096ec33adecb07ba1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3da332a732ab4309429742fd809d0815f5dafabcadb16096ec33adecb07ba1d->enter($__internal_b3da332a732ab4309429742fd809d0815f5dafabcadb16096ec33adecb07ba1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2d823281fd42ad8783119c04d6ded191e1e0c3f820d971f9f684b9443bb22972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d823281fd42ad8783119c04d6ded191e1e0c3f820d971f9f684b9443bb22972->enter($__internal_2d823281fd42ad8783119c04d6ded191e1e0c3f820d971f9f684b9443bb22972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b3da332a732ab4309429742fd809d0815f5dafabcadb16096ec33adecb07ba1d->leave($__internal_b3da332a732ab4309429742fd809d0815f5dafabcadb16096ec33adecb07ba1d_prof);

        
        $__internal_2d823281fd42ad8783119c04d6ded191e1e0c3f820d971f9f684b9443bb22972->leave($__internal_2d823281fd42ad8783119c04d6ded191e1e0c3f820d971f9f684b9443bb22972_prof);

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

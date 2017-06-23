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
        $__internal_23ef5591431e53cf3cadee2511e03f03d75741cd486f0239f7b92a1d8fbe9ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ef5591431e53cf3cadee2511e03f03d75741cd486f0239f7b92a1d8fbe9ef7->enter($__internal_23ef5591431e53cf3cadee2511e03f03d75741cd486f0239f7b92a1d8fbe9ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ecf6af4921320fbb7e0e730bcfe001b2d792fd06da102f97e3873455d2860b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf6af4921320fbb7e0e730bcfe001b2d792fd06da102f97e3873455d2860b39->enter($__internal_ecf6af4921320fbb7e0e730bcfe001b2d792fd06da102f97e3873455d2860b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_23ef5591431e53cf3cadee2511e03f03d75741cd486f0239f7b92a1d8fbe9ef7->leave($__internal_23ef5591431e53cf3cadee2511e03f03d75741cd486f0239f7b92a1d8fbe9ef7_prof);

        
        $__internal_ecf6af4921320fbb7e0e730bcfe001b2d792fd06da102f97e3873455d2860b39->leave($__internal_ecf6af4921320fbb7e0e730bcfe001b2d792fd06da102f97e3873455d2860b39_prof);

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

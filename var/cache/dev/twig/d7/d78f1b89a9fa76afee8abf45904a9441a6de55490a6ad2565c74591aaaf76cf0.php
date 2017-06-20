<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c1c41f5729bf1bbab0e561e4d4d1733b3bd4ff4e260e20ecb6da9cfde79c0b66 extends Twig_Template
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
        $__internal_d231660efc502f68b3c94dac8ea281f64c2ff9b22649b604c14089f715312ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d231660efc502f68b3c94dac8ea281f64c2ff9b22649b604c14089f715312ac8->enter($__internal_d231660efc502f68b3c94dac8ea281f64c2ff9b22649b604c14089f715312ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f995ce23305cbcc0ddcac5939defc461dbc4cf5ea41480011d76fb073b56034b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f995ce23305cbcc0ddcac5939defc461dbc4cf5ea41480011d76fb073b56034b->enter($__internal_f995ce23305cbcc0ddcac5939defc461dbc4cf5ea41480011d76fb073b56034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d231660efc502f68b3c94dac8ea281f64c2ff9b22649b604c14089f715312ac8->leave($__internal_d231660efc502f68b3c94dac8ea281f64c2ff9b22649b604c14089f715312ac8_prof);

        
        $__internal_f995ce23305cbcc0ddcac5939defc461dbc4cf5ea41480011d76fb073b56034b->leave($__internal_f995ce23305cbcc0ddcac5939defc461dbc4cf5ea41480011d76fb073b56034b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

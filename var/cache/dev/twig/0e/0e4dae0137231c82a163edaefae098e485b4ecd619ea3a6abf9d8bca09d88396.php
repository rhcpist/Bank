<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5d42a085bdf3a4c0220f51a48ab07044cd987414d8df350f0bceff8f8359ef7e extends Twig_Template
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
        $__internal_1fb7f7a547e2fcfe03f69b4f6ce80d1caf7861ff20b523cdf5d50437b0d72d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb7f7a547e2fcfe03f69b4f6ce80d1caf7861ff20b523cdf5d50437b0d72d9d->enter($__internal_1fb7f7a547e2fcfe03f69b4f6ce80d1caf7861ff20b523cdf5d50437b0d72d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_fe8d88268543238e73245b5c5baf1b17a4837099b6134f5daa294976b296e036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8d88268543238e73245b5c5baf1b17a4837099b6134f5daa294976b296e036->enter($__internal_fe8d88268543238e73245b5c5baf1b17a4837099b6134f5daa294976b296e036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1fb7f7a547e2fcfe03f69b4f6ce80d1caf7861ff20b523cdf5d50437b0d72d9d->leave($__internal_1fb7f7a547e2fcfe03f69b4f6ce80d1caf7861ff20b523cdf5d50437b0d72d9d_prof);

        
        $__internal_fe8d88268543238e73245b5c5baf1b17a4837099b6134f5daa294976b296e036->leave($__internal_fe8d88268543238e73245b5c5baf1b17a4837099b6134f5daa294976b296e036_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_32590586bb3021f3ddc723b7a5822a0098d87795d822f49b3872b0150b1ece6f extends Twig_Template
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
        $__internal_0172a720e89f5a82dac74fa23dbf7051e9e9b04c2964535b293e717ca7c73611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0172a720e89f5a82dac74fa23dbf7051e9e9b04c2964535b293e717ca7c73611->enter($__internal_0172a720e89f5a82dac74fa23dbf7051e9e9b04c2964535b293e717ca7c73611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_5bc3daf4a3d3466f5921a94b2af22d43d74534508cf7029f04b756e607930d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc3daf4a3d3466f5921a94b2af22d43d74534508cf7029f04b756e607930d77->enter($__internal_5bc3daf4a3d3466f5921a94b2af22d43d74534508cf7029f04b756e607930d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0172a720e89f5a82dac74fa23dbf7051e9e9b04c2964535b293e717ca7c73611->leave($__internal_0172a720e89f5a82dac74fa23dbf7051e9e9b04c2964535b293e717ca7c73611_prof);

        
        $__internal_5bc3daf4a3d3466f5921a94b2af22d43d74534508cf7029f04b756e607930d77->leave($__internal_5bc3daf4a3d3466f5921a94b2af22d43d74534508cf7029f04b756e607930d77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

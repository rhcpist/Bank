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
        $__internal_0019bfef94df899c3bdc2814f16e8b7d9aee5a202b27259de7e47e3b8199ffe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0019bfef94df899c3bdc2814f16e8b7d9aee5a202b27259de7e47e3b8199ffe5->enter($__internal_0019bfef94df899c3bdc2814f16e8b7d9aee5a202b27259de7e47e3b8199ffe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4203b2cdf21c6b88cbcbccaac7ea4141f4c48cac6ba1c12143be6e3ffb8de044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4203b2cdf21c6b88cbcbccaac7ea4141f4c48cac6ba1c12143be6e3ffb8de044->enter($__internal_4203b2cdf21c6b88cbcbccaac7ea4141f4c48cac6ba1c12143be6e3ffb8de044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0019bfef94df899c3bdc2814f16e8b7d9aee5a202b27259de7e47e3b8199ffe5->leave($__internal_0019bfef94df899c3bdc2814f16e8b7d9aee5a202b27259de7e47e3b8199ffe5_prof);

        
        $__internal_4203b2cdf21c6b88cbcbccaac7ea4141f4c48cac6ba1c12143be6e3ffb8de044->leave($__internal_4203b2cdf21c6b88cbcbccaac7ea4141f4c48cac6ba1c12143be6e3ffb8de044_prof);

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

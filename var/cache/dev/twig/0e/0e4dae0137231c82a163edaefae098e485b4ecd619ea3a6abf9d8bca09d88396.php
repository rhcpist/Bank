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
        $__internal_955e9cf2a1c59efaed13d7c52a692a088ac691ec71a8e5a096cdc17a4d46eb1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955e9cf2a1c59efaed13d7c52a692a088ac691ec71a8e5a096cdc17a4d46eb1b->enter($__internal_955e9cf2a1c59efaed13d7c52a692a088ac691ec71a8e5a096cdc17a4d46eb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_be051a72e9ed32fc752a1edffd332dea70e3b4d03cb92858d5fbef0479e6d012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be051a72e9ed32fc752a1edffd332dea70e3b4d03cb92858d5fbef0479e6d012->enter($__internal_be051a72e9ed32fc752a1edffd332dea70e3b4d03cb92858d5fbef0479e6d012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_955e9cf2a1c59efaed13d7c52a692a088ac691ec71a8e5a096cdc17a4d46eb1b->leave($__internal_955e9cf2a1c59efaed13d7c52a692a088ac691ec71a8e5a096cdc17a4d46eb1b_prof);

        
        $__internal_be051a72e9ed32fc752a1edffd332dea70e3b4d03cb92858d5fbef0479e6d012->leave($__internal_be051a72e9ed32fc752a1edffd332dea70e3b4d03cb92858d5fbef0479e6d012_prof);

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

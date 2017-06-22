<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f6b7cfcc0ca6e7784f402d5351a8963a0457e5d7907df3854702098a4c617091 extends Twig_Template
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
        $__internal_146c1506554a89757e8a7e807ddb8af0e993c476bd0f916d9e18b71a34eea35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146c1506554a89757e8a7e807ddb8af0e993c476bd0f916d9e18b71a34eea35e->enter($__internal_146c1506554a89757e8a7e807ddb8af0e993c476bd0f916d9e18b71a34eea35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_140057af233337c1359be9a4ee7f3176afb338fbacce198797f9e472b7688a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140057af233337c1359be9a4ee7f3176afb338fbacce198797f9e472b7688a32->enter($__internal_140057af233337c1359be9a4ee7f3176afb338fbacce198797f9e472b7688a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_146c1506554a89757e8a7e807ddb8af0e993c476bd0f916d9e18b71a34eea35e->leave($__internal_146c1506554a89757e8a7e807ddb8af0e993c476bd0f916d9e18b71a34eea35e_prof);

        
        $__internal_140057af233337c1359be9a4ee7f3176afb338fbacce198797f9e472b7688a32->leave($__internal_140057af233337c1359be9a4ee7f3176afb338fbacce198797f9e472b7688a32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

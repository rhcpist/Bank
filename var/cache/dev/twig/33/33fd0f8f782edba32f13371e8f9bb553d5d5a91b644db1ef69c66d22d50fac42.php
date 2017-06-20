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
        $__internal_f0b7225a7e599a90601c38f56883025bea6e334f276d6caf54133df81587b05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b7225a7e599a90601c38f56883025bea6e334f276d6caf54133df81587b05c->enter($__internal_f0b7225a7e599a90601c38f56883025bea6e334f276d6caf54133df81587b05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_19c3ec701adc562ac7f72034f46a1dc80f722f04778b08b204cf0bad8cdcc941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c3ec701adc562ac7f72034f46a1dc80f722f04778b08b204cf0bad8cdcc941->enter($__internal_19c3ec701adc562ac7f72034f46a1dc80f722f04778b08b204cf0bad8cdcc941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f0b7225a7e599a90601c38f56883025bea6e334f276d6caf54133df81587b05c->leave($__internal_f0b7225a7e599a90601c38f56883025bea6e334f276d6caf54133df81587b05c_prof);

        
        $__internal_19c3ec701adc562ac7f72034f46a1dc80f722f04778b08b204cf0bad8cdcc941->leave($__internal_19c3ec701adc562ac7f72034f46a1dc80f722f04778b08b204cf0bad8cdcc941_prof);

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

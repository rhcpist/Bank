<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f3aa9f0c4ccab0bfdb315e9cf39001dbcf6845488f36a76d8b59060639ba0087 extends Twig_Template
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
        $__internal_7308b6c0bc7d6fe79a881a27be1686df14239814706d4dd423c51efa841aa7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7308b6c0bc7d6fe79a881a27be1686df14239814706d4dd423c51efa841aa7d1->enter($__internal_7308b6c0bc7d6fe79a881a27be1686df14239814706d4dd423c51efa841aa7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3e6c0a6adc2f66ed61c640089012425ffbc3d003ee8c413e83af951abc501373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6c0a6adc2f66ed61c640089012425ffbc3d003ee8c413e83af951abc501373->enter($__internal_3e6c0a6adc2f66ed61c640089012425ffbc3d003ee8c413e83af951abc501373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7308b6c0bc7d6fe79a881a27be1686df14239814706d4dd423c51efa841aa7d1->leave($__internal_7308b6c0bc7d6fe79a881a27be1686df14239814706d4dd423c51efa841aa7d1_prof);

        
        $__internal_3e6c0a6adc2f66ed61c640089012425ffbc3d003ee8c413e83af951abc501373->leave($__internal_3e6c0a6adc2f66ed61c640089012425ffbc3d003ee8c413e83af951abc501373_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

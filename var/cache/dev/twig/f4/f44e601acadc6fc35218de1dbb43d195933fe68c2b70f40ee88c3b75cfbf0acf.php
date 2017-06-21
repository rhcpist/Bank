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
        $__internal_1106c720a8b418040e28f89caa67dfa1ccca4178de13a48cf999d4aa4eb4d487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1106c720a8b418040e28f89caa67dfa1ccca4178de13a48cf999d4aa4eb4d487->enter($__internal_1106c720a8b418040e28f89caa67dfa1ccca4178de13a48cf999d4aa4eb4d487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_edb30f50e4723c6d9b9dbcbbdf0cab48910b9163be5e6960e0a04a724ac248f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb30f50e4723c6d9b9dbcbbdf0cab48910b9163be5e6960e0a04a724ac248f8->enter($__internal_edb30f50e4723c6d9b9dbcbbdf0cab48910b9163be5e6960e0a04a724ac248f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1106c720a8b418040e28f89caa67dfa1ccca4178de13a48cf999d4aa4eb4d487->leave($__internal_1106c720a8b418040e28f89caa67dfa1ccca4178de13a48cf999d4aa4eb4d487_prof);

        
        $__internal_edb30f50e4723c6d9b9dbcbbdf0cab48910b9163be5e6960e0a04a724ac248f8->leave($__internal_edb30f50e4723c6d9b9dbcbbdf0cab48910b9163be5e6960e0a04a724ac248f8_prof);

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

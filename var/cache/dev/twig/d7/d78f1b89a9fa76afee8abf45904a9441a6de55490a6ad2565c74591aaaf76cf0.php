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
        $__internal_530a91f141bc4a8893237fd4997e7cf4be252827785b6c1174a60012994fad20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530a91f141bc4a8893237fd4997e7cf4be252827785b6c1174a60012994fad20->enter($__internal_530a91f141bc4a8893237fd4997e7cf4be252827785b6c1174a60012994fad20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5397c2e16734797f4b3c6802bae3f7aec049c412b1ad1a48e0f80ca9ded3832c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5397c2e16734797f4b3c6802bae3f7aec049c412b1ad1a48e0f80ca9ded3832c->enter($__internal_5397c2e16734797f4b3c6802bae3f7aec049c412b1ad1a48e0f80ca9ded3832c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_530a91f141bc4a8893237fd4997e7cf4be252827785b6c1174a60012994fad20->leave($__internal_530a91f141bc4a8893237fd4997e7cf4be252827785b6c1174a60012994fad20_prof);

        
        $__internal_5397c2e16734797f4b3c6802bae3f7aec049c412b1ad1a48e0f80ca9ded3832c->leave($__internal_5397c2e16734797f4b3c6802bae3f7aec049c412b1ad1a48e0f80ca9ded3832c_prof);

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

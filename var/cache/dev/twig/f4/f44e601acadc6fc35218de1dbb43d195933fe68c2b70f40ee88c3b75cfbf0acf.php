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
        $__internal_f6bfd59391ef27edc0ce2d99c95ee92f9bc4e5929793a8b2108fee6368a202ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6bfd59391ef27edc0ce2d99c95ee92f9bc4e5929793a8b2108fee6368a202ea->enter($__internal_f6bfd59391ef27edc0ce2d99c95ee92f9bc4e5929793a8b2108fee6368a202ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1a9447b591a7d6e65790f5c2e202c4e092a742bfb98c9fb340f78d208341f470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9447b591a7d6e65790f5c2e202c4e092a742bfb98c9fb340f78d208341f470->enter($__internal_1a9447b591a7d6e65790f5c2e202c4e092a742bfb98c9fb340f78d208341f470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f6bfd59391ef27edc0ce2d99c95ee92f9bc4e5929793a8b2108fee6368a202ea->leave($__internal_f6bfd59391ef27edc0ce2d99c95ee92f9bc4e5929793a8b2108fee6368a202ea_prof);

        
        $__internal_1a9447b591a7d6e65790f5c2e202c4e092a742bfb98c9fb340f78d208341f470->leave($__internal_1a9447b591a7d6e65790f5c2e202c4e092a742bfb98c9fb340f78d208341f470_prof);

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

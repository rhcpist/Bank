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
        $__internal_98c75e8ae6f912c1b33a5fdfea50968cb0a9387322f37f5536c115b37a73b0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c75e8ae6f912c1b33a5fdfea50968cb0a9387322f37f5536c115b37a73b0e7->enter($__internal_98c75e8ae6f912c1b33a5fdfea50968cb0a9387322f37f5536c115b37a73b0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b7a1d64524e66c2b08276965991b38ba5149cfe74d8afb04e7fc8b422019feee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a1d64524e66c2b08276965991b38ba5149cfe74d8afb04e7fc8b422019feee->enter($__internal_b7a1d64524e66c2b08276965991b38ba5149cfe74d8afb04e7fc8b422019feee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_98c75e8ae6f912c1b33a5fdfea50968cb0a9387322f37f5536c115b37a73b0e7->leave($__internal_98c75e8ae6f912c1b33a5fdfea50968cb0a9387322f37f5536c115b37a73b0e7_prof);

        
        $__internal_b7a1d64524e66c2b08276965991b38ba5149cfe74d8afb04e7fc8b422019feee->leave($__internal_b7a1d64524e66c2b08276965991b38ba5149cfe74d8afb04e7fc8b422019feee_prof);

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

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
        $__internal_3c70a5efa248b0e212b6b31a1a71a6e67aba354b54ded7cc1de1ad8b8983d3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c70a5efa248b0e212b6b31a1a71a6e67aba354b54ded7cc1de1ad8b8983d3a3->enter($__internal_3c70a5efa248b0e212b6b31a1a71a6e67aba354b54ded7cc1de1ad8b8983d3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8122196d1f9af79b92af7ad4e751779661d2fab5b4935af89667ec19262c28aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8122196d1f9af79b92af7ad4e751779661d2fab5b4935af89667ec19262c28aa->enter($__internal_8122196d1f9af79b92af7ad4e751779661d2fab5b4935af89667ec19262c28aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3c70a5efa248b0e212b6b31a1a71a6e67aba354b54ded7cc1de1ad8b8983d3a3->leave($__internal_3c70a5efa248b0e212b6b31a1a71a6e67aba354b54ded7cc1de1ad8b8983d3a3_prof);

        
        $__internal_8122196d1f9af79b92af7ad4e751779661d2fab5b4935af89667ec19262c28aa->leave($__internal_8122196d1f9af79b92af7ad4e751779661d2fab5b4935af89667ec19262c28aa_prof);

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

<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c132ea54f17d2bf879c3c890c3fb911b41a54d17b6387d5be74c790315186c6a extends Twig_Template
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
        $__internal_bed7505143a7944cd171be16ad9d9804e90b831d97ce1eb765ba055097d003e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed7505143a7944cd171be16ad9d9804e90b831d97ce1eb765ba055097d003e5->enter($__internal_bed7505143a7944cd171be16ad9d9804e90b831d97ce1eb765ba055097d003e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_0e9b916ff0672f6368202da821be0b9e01497f393326390edb5f25b2980b6733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9b916ff0672f6368202da821be0b9e01497f393326390edb5f25b2980b6733->enter($__internal_0e9b916ff0672f6368202da821be0b9e01497f393326390edb5f25b2980b6733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bed7505143a7944cd171be16ad9d9804e90b831d97ce1eb765ba055097d003e5->leave($__internal_bed7505143a7944cd171be16ad9d9804e90b831d97ce1eb765ba055097d003e5_prof);

        
        $__internal_0e9b916ff0672f6368202da821be0b9e01497f393326390edb5f25b2980b6733->leave($__internal_0e9b916ff0672f6368202da821be0b9e01497f393326390edb5f25b2980b6733_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

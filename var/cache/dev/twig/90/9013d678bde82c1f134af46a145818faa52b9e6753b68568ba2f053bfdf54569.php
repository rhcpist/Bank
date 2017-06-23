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
        $__internal_31c849557785b48a71937061baa936a3c03b8fb38c667756bd41248adca1dcbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c849557785b48a71937061baa936a3c03b8fb38c667756bd41248adca1dcbd->enter($__internal_31c849557785b48a71937061baa936a3c03b8fb38c667756bd41248adca1dcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_337bb4edb9c147e22498819eae7a0d9ffab2769ad5c4e683a7fa7b2577233cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337bb4edb9c147e22498819eae7a0d9ffab2769ad5c4e683a7fa7b2577233cf9->enter($__internal_337bb4edb9c147e22498819eae7a0d9ffab2769ad5c4e683a7fa7b2577233cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_31c849557785b48a71937061baa936a3c03b8fb38c667756bd41248adca1dcbd->leave($__internal_31c849557785b48a71937061baa936a3c03b8fb38c667756bd41248adca1dcbd_prof);

        
        $__internal_337bb4edb9c147e22498819eae7a0d9ffab2769ad5c4e683a7fa7b2577233cf9->leave($__internal_337bb4edb9c147e22498819eae7a0d9ffab2769ad5c4e683a7fa7b2577233cf9_prof);

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

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
        $__internal_27c5b5e7115cd49cfbf68a75bb0f675f4badd97540f11607f2c801781bcac617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c5b5e7115cd49cfbf68a75bb0f675f4badd97540f11607f2c801781bcac617->enter($__internal_27c5b5e7115cd49cfbf68a75bb0f675f4badd97540f11607f2c801781bcac617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2d285bb8cfff72b2d6c93d2f5ad9c0d07b47defed8e481eacb8167c757647369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d285bb8cfff72b2d6c93d2f5ad9c0d07b47defed8e481eacb8167c757647369->enter($__internal_2d285bb8cfff72b2d6c93d2f5ad9c0d07b47defed8e481eacb8167c757647369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_27c5b5e7115cd49cfbf68a75bb0f675f4badd97540f11607f2c801781bcac617->leave($__internal_27c5b5e7115cd49cfbf68a75bb0f675f4badd97540f11607f2c801781bcac617_prof);

        
        $__internal_2d285bb8cfff72b2d6c93d2f5ad9c0d07b47defed8e481eacb8167c757647369->leave($__internal_2d285bb8cfff72b2d6c93d2f5ad9c0d07b47defed8e481eacb8167c757647369_prof);

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

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
        $__internal_a17115b87918b1ab0f7c45b7c1ac79df766ad49f33d9aab305ea2538d0f9eeb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17115b87918b1ab0f7c45b7c1ac79df766ad49f33d9aab305ea2538d0f9eeb4->enter($__internal_a17115b87918b1ab0f7c45b7c1ac79df766ad49f33d9aab305ea2538d0f9eeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1b1f8326e54bc8f39c6cce703795a367a23fa7ff628fdf2b3a2d693d66c4096e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1f8326e54bc8f39c6cce703795a367a23fa7ff628fdf2b3a2d693d66c4096e->enter($__internal_1b1f8326e54bc8f39c6cce703795a367a23fa7ff628fdf2b3a2d693d66c4096e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a17115b87918b1ab0f7c45b7c1ac79df766ad49f33d9aab305ea2538d0f9eeb4->leave($__internal_a17115b87918b1ab0f7c45b7c1ac79df766ad49f33d9aab305ea2538d0f9eeb4_prof);

        
        $__internal_1b1f8326e54bc8f39c6cce703795a367a23fa7ff628fdf2b3a2d693d66c4096e->leave($__internal_1b1f8326e54bc8f39c6cce703795a367a23fa7ff628fdf2b3a2d693d66c4096e_prof);

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

<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_25041fdfb88ae87d47823f15f49dd96ec62a3d8e18ca5736e209f63c244ec4ad extends Twig_Template
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
        $__internal_d78d154bb18766991294c837e5705a16b9129395a38e6fad909061eb9b60baae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78d154bb18766991294c837e5705a16b9129395a38e6fad909061eb9b60baae->enter($__internal_d78d154bb18766991294c837e5705a16b9129395a38e6fad909061eb9b60baae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f12cc44fc8bfb6cbb4450b6acac0b528f85caaca2a2a9af45ab973f7184323a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12cc44fc8bfb6cbb4450b6acac0b528f85caaca2a2a9af45ab973f7184323a5->enter($__internal_f12cc44fc8bfb6cbb4450b6acac0b528f85caaca2a2a9af45ab973f7184323a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d78d154bb18766991294c837e5705a16b9129395a38e6fad909061eb9b60baae->leave($__internal_d78d154bb18766991294c837e5705a16b9129395a38e6fad909061eb9b60baae_prof);

        
        $__internal_f12cc44fc8bfb6cbb4450b6acac0b528f85caaca2a2a9af45ab973f7184323a5->leave($__internal_f12cc44fc8bfb6cbb4450b6acac0b528f85caaca2a2a9af45ab973f7184323a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

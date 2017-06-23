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
        $__internal_16686a437cbd043ff4d00732750f61c0ccb232a003d352423ba22bcb20f583b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16686a437cbd043ff4d00732750f61c0ccb232a003d352423ba22bcb20f583b5->enter($__internal_16686a437cbd043ff4d00732750f61c0ccb232a003d352423ba22bcb20f583b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d251a9a2b58598edc716fc5897fe20d290b0d4c40cde2290d79bc52df133256b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d251a9a2b58598edc716fc5897fe20d290b0d4c40cde2290d79bc52df133256b->enter($__internal_d251a9a2b58598edc716fc5897fe20d290b0d4c40cde2290d79bc52df133256b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_16686a437cbd043ff4d00732750f61c0ccb232a003d352423ba22bcb20f583b5->leave($__internal_16686a437cbd043ff4d00732750f61c0ccb232a003d352423ba22bcb20f583b5_prof);

        
        $__internal_d251a9a2b58598edc716fc5897fe20d290b0d4c40cde2290d79bc52df133256b->leave($__internal_d251a9a2b58598edc716fc5897fe20d290b0d4c40cde2290d79bc52df133256b_prof);

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

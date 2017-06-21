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
        $__internal_1cd01813fb7f88b1ca90efe0a271dd37e31d1f97e3e93d0bd6a9ff41f06fe0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd01813fb7f88b1ca90efe0a271dd37e31d1f97e3e93d0bd6a9ff41f06fe0f2->enter($__internal_1cd01813fb7f88b1ca90efe0a271dd37e31d1f97e3e93d0bd6a9ff41f06fe0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1f296f3a01743958e7228a78dc295f9d91e6d4896fccae3710ad19d5de9e082e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f296f3a01743958e7228a78dc295f9d91e6d4896fccae3710ad19d5de9e082e->enter($__internal_1f296f3a01743958e7228a78dc295f9d91e6d4896fccae3710ad19d5de9e082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1cd01813fb7f88b1ca90efe0a271dd37e31d1f97e3e93d0bd6a9ff41f06fe0f2->leave($__internal_1cd01813fb7f88b1ca90efe0a271dd37e31d1f97e3e93d0bd6a9ff41f06fe0f2_prof);

        
        $__internal_1f296f3a01743958e7228a78dc295f9d91e6d4896fccae3710ad19d5de9e082e->leave($__internal_1f296f3a01743958e7228a78dc295f9d91e6d4896fccae3710ad19d5de9e082e_prof);

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

<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_b83e9e62cd6e7746ee2abc68929b3319a488cd43ab33d41bfab8668ad06348cc extends Twig_Template
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
        $__internal_4e694a258284654baa59dd591fa3a8be2c4f018cdb1e7889499550739086d776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e694a258284654baa59dd591fa3a8be2c4f018cdb1e7889499550739086d776->enter($__internal_4e694a258284654baa59dd591fa3a8be2c4f018cdb1e7889499550739086d776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_28ecef19e7297dc97eccb8d07f6a83bdb79f64fea4ae984dd8342e1f77c1a698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ecef19e7297dc97eccb8d07f6a83bdb79f64fea4ae984dd8342e1f77c1a698->enter($__internal_28ecef19e7297dc97eccb8d07f6a83bdb79f64fea4ae984dd8342e1f77c1a698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4e694a258284654baa59dd591fa3a8be2c4f018cdb1e7889499550739086d776->leave($__internal_4e694a258284654baa59dd591fa3a8be2c4f018cdb1e7889499550739086d776_prof);

        
        $__internal_28ecef19e7297dc97eccb8d07f6a83bdb79f64fea4ae984dd8342e1f77c1a698->leave($__internal_28ecef19e7297dc97eccb8d07f6a83bdb79f64fea4ae984dd8342e1f77c1a698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}

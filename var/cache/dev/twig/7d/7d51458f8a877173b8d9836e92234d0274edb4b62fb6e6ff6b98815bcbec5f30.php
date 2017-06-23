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
        $__internal_eda0169a56ef9c667b40cfe900e5e33127158134b412c783d3531bab90067110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda0169a56ef9c667b40cfe900e5e33127158134b412c783d3531bab90067110->enter($__internal_eda0169a56ef9c667b40cfe900e5e33127158134b412c783d3531bab90067110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_b9651d491f21a7ce56f1b5ddbd628157b39a3dc999ad57affb8b057b774830fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9651d491f21a7ce56f1b5ddbd628157b39a3dc999ad57affb8b057b774830fd->enter($__internal_b9651d491f21a7ce56f1b5ddbd628157b39a3dc999ad57affb8b057b774830fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_eda0169a56ef9c667b40cfe900e5e33127158134b412c783d3531bab90067110->leave($__internal_eda0169a56ef9c667b40cfe900e5e33127158134b412c783d3531bab90067110_prof);

        
        $__internal_b9651d491f21a7ce56f1b5ddbd628157b39a3dc999ad57affb8b057b774830fd->leave($__internal_b9651d491f21a7ce56f1b5ddbd628157b39a3dc999ad57affb8b057b774830fd_prof);

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

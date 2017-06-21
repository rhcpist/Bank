<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_899bd4f0cddec6105912a3e738410b614414cda70129013148c5c0527d7ae341 extends Twig_Template
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
        $__internal_f9d147bb99190c57e4b6401ca89f578b41d61ea18a38873301ea421f8ec2a2b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d147bb99190c57e4b6401ca89f578b41d61ea18a38873301ea421f8ec2a2b1->enter($__internal_f9d147bb99190c57e4b6401ca89f578b41d61ea18a38873301ea421f8ec2a2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_3923540c13f3aa0ab87216f3d9d02eb6a5f10efe37cacc517b64e1aed753079f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3923540c13f3aa0ab87216f3d9d02eb6a5f10efe37cacc517b64e1aed753079f->enter($__internal_3923540c13f3aa0ab87216f3d9d02eb6a5f10efe37cacc517b64e1aed753079f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f9d147bb99190c57e4b6401ca89f578b41d61ea18a38873301ea421f8ec2a2b1->leave($__internal_f9d147bb99190c57e4b6401ca89f578b41d61ea18a38873301ea421f8ec2a2b1_prof);

        
        $__internal_3923540c13f3aa0ab87216f3d9d02eb6a5f10efe37cacc517b64e1aed753079f->leave($__internal_3923540c13f3aa0ab87216f3d9d02eb6a5f10efe37cacc517b64e1aed753079f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}

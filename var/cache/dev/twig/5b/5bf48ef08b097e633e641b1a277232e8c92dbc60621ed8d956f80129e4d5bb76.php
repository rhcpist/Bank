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
        $__internal_606cbd9449d47870123e983065c968caea568b6c487246131371794dbadcd3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606cbd9449d47870123e983065c968caea568b6c487246131371794dbadcd3aa->enter($__internal_606cbd9449d47870123e983065c968caea568b6c487246131371794dbadcd3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_aaa2a907870a70747cd5b11570d82f0c0549b97df55b19cdb64d066e810ed3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa2a907870a70747cd5b11570d82f0c0549b97df55b19cdb64d066e810ed3cd->enter($__internal_aaa2a907870a70747cd5b11570d82f0c0549b97df55b19cdb64d066e810ed3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_606cbd9449d47870123e983065c968caea568b6c487246131371794dbadcd3aa->leave($__internal_606cbd9449d47870123e983065c968caea568b6c487246131371794dbadcd3aa_prof);

        
        $__internal_aaa2a907870a70747cd5b11570d82f0c0549b97df55b19cdb64d066e810ed3cd->leave($__internal_aaa2a907870a70747cd5b11570d82f0c0549b97df55b19cdb64d066e810ed3cd_prof);

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

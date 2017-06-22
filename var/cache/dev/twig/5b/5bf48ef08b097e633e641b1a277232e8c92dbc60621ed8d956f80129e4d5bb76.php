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
        $__internal_25f9585208b44585ec1c109533614bcb88bdf2b902bd8afac08e6f642f59d162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f9585208b44585ec1c109533614bcb88bdf2b902bd8afac08e6f642f59d162->enter($__internal_25f9585208b44585ec1c109533614bcb88bdf2b902bd8afac08e6f642f59d162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_4ff0d39a7e808e5a667544e190c0f2ef8e1ca2720c206fb822886a2da2799b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff0d39a7e808e5a667544e190c0f2ef8e1ca2720c206fb822886a2da2799b7e->enter($__internal_4ff0d39a7e808e5a667544e190c0f2ef8e1ca2720c206fb822886a2da2799b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_25f9585208b44585ec1c109533614bcb88bdf2b902bd8afac08e6f642f59d162->leave($__internal_25f9585208b44585ec1c109533614bcb88bdf2b902bd8afac08e6f642f59d162_prof);

        
        $__internal_4ff0d39a7e808e5a667544e190c0f2ef8e1ca2720c206fb822886a2da2799b7e->leave($__internal_4ff0d39a7e808e5a667544e190c0f2ef8e1ca2720c206fb822886a2da2799b7e_prof);

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

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
        $__internal_9af1ae0d6a62a9c64910fe3b6be1b3904986c7cb7a7fe67faa92096ff5788435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af1ae0d6a62a9c64910fe3b6be1b3904986c7cb7a7fe67faa92096ff5788435->enter($__internal_9af1ae0d6a62a9c64910fe3b6be1b3904986c7cb7a7fe67faa92096ff5788435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_5e343f8eab60b7d56d451bbdd1a2379ac492a6ffc89c0e683bdb635fd14df501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e343f8eab60b7d56d451bbdd1a2379ac492a6ffc89c0e683bdb635fd14df501->enter($__internal_5e343f8eab60b7d56d451bbdd1a2379ac492a6ffc89c0e683bdb635fd14df501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9af1ae0d6a62a9c64910fe3b6be1b3904986c7cb7a7fe67faa92096ff5788435->leave($__internal_9af1ae0d6a62a9c64910fe3b6be1b3904986c7cb7a7fe67faa92096ff5788435_prof);

        
        $__internal_5e343f8eab60b7d56d451bbdd1a2379ac492a6ffc89c0e683bdb635fd14df501->leave($__internal_5e343f8eab60b7d56d451bbdd1a2379ac492a6ffc89c0e683bdb635fd14df501_prof);

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

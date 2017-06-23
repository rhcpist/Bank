<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d529913c9c13e818e6ca281e0170ed902156c999d1a7f4d42f87f76426e45045 extends Twig_Template
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
        $__internal_465e34ae56d7e5fb09144aa8b33a08ee4b3a432ee940a0710ab3b904dcf0f61b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465e34ae56d7e5fb09144aa8b33a08ee4b3a432ee940a0710ab3b904dcf0f61b->enter($__internal_465e34ae56d7e5fb09144aa8b33a08ee4b3a432ee940a0710ab3b904dcf0f61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_bf3b4a297289365a53910530897f814652500cca57fcec865644e942dfaff843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3b4a297289365a53910530897f814652500cca57fcec865644e942dfaff843->enter($__internal_bf3b4a297289365a53910530897f814652500cca57fcec865644e942dfaff843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_465e34ae56d7e5fb09144aa8b33a08ee4b3a432ee940a0710ab3b904dcf0f61b->leave($__internal_465e34ae56d7e5fb09144aa8b33a08ee4b3a432ee940a0710ab3b904dcf0f61b_prof);

        
        $__internal_bf3b4a297289365a53910530897f814652500cca57fcec865644e942dfaff843->leave($__internal_bf3b4a297289365a53910530897f814652500cca57fcec865644e942dfaff843_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

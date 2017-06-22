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
        $__internal_b90c483c692e23c2dae479b766bf2bd71a8d596b82282af0a45d4d1dde6f613d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90c483c692e23c2dae479b766bf2bd71a8d596b82282af0a45d4d1dde6f613d->enter($__internal_b90c483c692e23c2dae479b766bf2bd71a8d596b82282af0a45d4d1dde6f613d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fcc76cf88a73094efd647364317e6b65a57c29591e840fce62b3367025748ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc76cf88a73094efd647364317e6b65a57c29591e840fce62b3367025748ca2->enter($__internal_fcc76cf88a73094efd647364317e6b65a57c29591e840fce62b3367025748ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b90c483c692e23c2dae479b766bf2bd71a8d596b82282af0a45d4d1dde6f613d->leave($__internal_b90c483c692e23c2dae479b766bf2bd71a8d596b82282af0a45d4d1dde6f613d_prof);

        
        $__internal_fcc76cf88a73094efd647364317e6b65a57c29591e840fce62b3367025748ca2->leave($__internal_fcc76cf88a73094efd647364317e6b65a57c29591e840fce62b3367025748ca2_prof);

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

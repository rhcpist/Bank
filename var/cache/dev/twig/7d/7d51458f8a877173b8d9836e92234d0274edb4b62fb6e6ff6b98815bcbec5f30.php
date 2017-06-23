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
        $__internal_62973d8d2765d4242f8a25ed2f9d020f24aded9d9ce399f5e1427d7e9e687053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62973d8d2765d4242f8a25ed2f9d020f24aded9d9ce399f5e1427d7e9e687053->enter($__internal_62973d8d2765d4242f8a25ed2f9d020f24aded9d9ce399f5e1427d7e9e687053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_876e835868ce2ea0c542ab955759a8cb03653ef8a2b4915c1511aba683a6eba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876e835868ce2ea0c542ab955759a8cb03653ef8a2b4915c1511aba683a6eba0->enter($__internal_876e835868ce2ea0c542ab955759a8cb03653ef8a2b4915c1511aba683a6eba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_62973d8d2765d4242f8a25ed2f9d020f24aded9d9ce399f5e1427d7e9e687053->leave($__internal_62973d8d2765d4242f8a25ed2f9d020f24aded9d9ce399f5e1427d7e9e687053_prof);

        
        $__internal_876e835868ce2ea0c542ab955759a8cb03653ef8a2b4915c1511aba683a6eba0->leave($__internal_876e835868ce2ea0c542ab955759a8cb03653ef8a2b4915c1511aba683a6eba0_prof);

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

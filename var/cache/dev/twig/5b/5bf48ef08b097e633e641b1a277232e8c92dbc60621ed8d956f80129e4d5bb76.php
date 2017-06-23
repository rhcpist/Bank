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
        $__internal_90ed1d301383f003da5626a712784dc83755462a57aa52b62c818fea10ec908b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ed1d301383f003da5626a712784dc83755462a57aa52b62c818fea10ec908b->enter($__internal_90ed1d301383f003da5626a712784dc83755462a57aa52b62c818fea10ec908b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_fcdb1b1ad4f9c1ee167c1de9cb2d15702f159de28949fba22bfb28facd7e3398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdb1b1ad4f9c1ee167c1de9cb2d15702f159de28949fba22bfb28facd7e3398->enter($__internal_fcdb1b1ad4f9c1ee167c1de9cb2d15702f159de28949fba22bfb28facd7e3398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_90ed1d301383f003da5626a712784dc83755462a57aa52b62c818fea10ec908b->leave($__internal_90ed1d301383f003da5626a712784dc83755462a57aa52b62c818fea10ec908b_prof);

        
        $__internal_fcdb1b1ad4f9c1ee167c1de9cb2d15702f159de28949fba22bfb28facd7e3398->leave($__internal_fcdb1b1ad4f9c1ee167c1de9cb2d15702f159de28949fba22bfb28facd7e3398_prof);

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

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
        $__internal_77e5f604cb96db394e5204e6782d385e66ed810a8dd4f32002fd212a717f21cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e5f604cb96db394e5204e6782d385e66ed810a8dd4f32002fd212a717f21cc->enter($__internal_77e5f604cb96db394e5204e6782d385e66ed810a8dd4f32002fd212a717f21cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ee1883f3368c7c5d4518fb29d65cec71905c7d2d2021291fed54b6fcc388796d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1883f3368c7c5d4518fb29d65cec71905c7d2d2021291fed54b6fcc388796d->enter($__internal_ee1883f3368c7c5d4518fb29d65cec71905c7d2d2021291fed54b6fcc388796d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_77e5f604cb96db394e5204e6782d385e66ed810a8dd4f32002fd212a717f21cc->leave($__internal_77e5f604cb96db394e5204e6782d385e66ed810a8dd4f32002fd212a717f21cc_prof);

        
        $__internal_ee1883f3368c7c5d4518fb29d65cec71905c7d2d2021291fed54b6fcc388796d->leave($__internal_ee1883f3368c7c5d4518fb29d65cec71905c7d2d2021291fed54b6fcc388796d_prof);

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

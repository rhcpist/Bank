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
        $__internal_e1762b80833b58d166f97a92b6d90e64881b6df0cb2be32f9775c7d4177d6534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1762b80833b58d166f97a92b6d90e64881b6df0cb2be32f9775c7d4177d6534->enter($__internal_e1762b80833b58d166f97a92b6d90e64881b6df0cb2be32f9775c7d4177d6534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_3a24265c2fa56defb9a22ce23fa47b10f3f420267449cd953c26bd2ef91a6b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a24265c2fa56defb9a22ce23fa47b10f3f420267449cd953c26bd2ef91a6b90->enter($__internal_3a24265c2fa56defb9a22ce23fa47b10f3f420267449cd953c26bd2ef91a6b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e1762b80833b58d166f97a92b6d90e64881b6df0cb2be32f9775c7d4177d6534->leave($__internal_e1762b80833b58d166f97a92b6d90e64881b6df0cb2be32f9775c7d4177d6534_prof);

        
        $__internal_3a24265c2fa56defb9a22ce23fa47b10f3f420267449cd953c26bd2ef91a6b90->leave($__internal_3a24265c2fa56defb9a22ce23fa47b10f3f420267449cd953c26bd2ef91a6b90_prof);

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

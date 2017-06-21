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
        $__internal_475696e7deacbe9b9daa1a1060667466f89d0c13109b15f21f2ed74090aaf51e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475696e7deacbe9b9daa1a1060667466f89d0c13109b15f21f2ed74090aaf51e->enter($__internal_475696e7deacbe9b9daa1a1060667466f89d0c13109b15f21f2ed74090aaf51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_3d7b056aabfe52b3177afc5ef63cf7d04800fe036da7783dfefb28c1fd8870d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7b056aabfe52b3177afc5ef63cf7d04800fe036da7783dfefb28c1fd8870d3->enter($__internal_3d7b056aabfe52b3177afc5ef63cf7d04800fe036da7783dfefb28c1fd8870d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_475696e7deacbe9b9daa1a1060667466f89d0c13109b15f21f2ed74090aaf51e->leave($__internal_475696e7deacbe9b9daa1a1060667466f89d0c13109b15f21f2ed74090aaf51e_prof);

        
        $__internal_3d7b056aabfe52b3177afc5ef63cf7d04800fe036da7783dfefb28c1fd8870d3->leave($__internal_3d7b056aabfe52b3177afc5ef63cf7d04800fe036da7783dfefb28c1fd8870d3_prof);

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

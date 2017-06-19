<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d4b145e55febb24d99779d44b4cb6f458c6a27548fd08d03f5b876c3e3765d25 extends Twig_Template
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
        $__internal_1f97a4ee8aef3582c4adf86c0f8aafac88e13479bf78d95ad2be8276acecaf75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f97a4ee8aef3582c4adf86c0f8aafac88e13479bf78d95ad2be8276acecaf75->enter($__internal_1f97a4ee8aef3582c4adf86c0f8aafac88e13479bf78d95ad2be8276acecaf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ef60e677c4104a23effe5392f19f9744393c98e604e31d634b56f332b5befc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef60e677c4104a23effe5392f19f9744393c98e604e31d634b56f332b5befc20->enter($__internal_ef60e677c4104a23effe5392f19f9744393c98e604e31d634b56f332b5befc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1f97a4ee8aef3582c4adf86c0f8aafac88e13479bf78d95ad2be8276acecaf75->leave($__internal_1f97a4ee8aef3582c4adf86c0f8aafac88e13479bf78d95ad2be8276acecaf75_prof);

        
        $__internal_ef60e677c4104a23effe5392f19f9744393c98e604e31d634b56f332b5befc20->leave($__internal_ef60e677c4104a23effe5392f19f9744393c98e604e31d634b56f332b5befc20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

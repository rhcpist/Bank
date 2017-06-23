<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5d42a085bdf3a4c0220f51a48ab07044cd987414d8df350f0bceff8f8359ef7e extends Twig_Template
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
        $__internal_8d9fffb2a4e24326a487ed8f209c2e0d32f7a29a18b03d49a7bd35c8f223fe8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9fffb2a4e24326a487ed8f209c2e0d32f7a29a18b03d49a7bd35c8f223fe8a->enter($__internal_8d9fffb2a4e24326a487ed8f209c2e0d32f7a29a18b03d49a7bd35c8f223fe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_de0fe48ae45fa0839e637b31f88d7bfcdf22e36a5fa280dc4331715fb594d02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0fe48ae45fa0839e637b31f88d7bfcdf22e36a5fa280dc4331715fb594d02d->enter($__internal_de0fe48ae45fa0839e637b31f88d7bfcdf22e36a5fa280dc4331715fb594d02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8d9fffb2a4e24326a487ed8f209c2e0d32f7a29a18b03d49a7bd35c8f223fe8a->leave($__internal_8d9fffb2a4e24326a487ed8f209c2e0d32f7a29a18b03d49a7bd35c8f223fe8a_prof);

        
        $__internal_de0fe48ae45fa0839e637b31f88d7bfcdf22e36a5fa280dc4331715fb594d02d->leave($__internal_de0fe48ae45fa0839e637b31f88d7bfcdf22e36a5fa280dc4331715fb594d02d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

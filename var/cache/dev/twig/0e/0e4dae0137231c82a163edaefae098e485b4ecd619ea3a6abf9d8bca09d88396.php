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
        $__internal_e715d8d4042c41ea89f1a9e0ba9e068947fafbd4fe7e7eb52740e1a8c597f0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e715d8d4042c41ea89f1a9e0ba9e068947fafbd4fe7e7eb52740e1a8c597f0cd->enter($__internal_e715d8d4042c41ea89f1a9e0ba9e068947fafbd4fe7e7eb52740e1a8c597f0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a6577e5ae63c58591ac0b23536ad1af524ed4224d0660df65dad2325233975d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6577e5ae63c58591ac0b23536ad1af524ed4224d0660df65dad2325233975d0->enter($__internal_a6577e5ae63c58591ac0b23536ad1af524ed4224d0660df65dad2325233975d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e715d8d4042c41ea89f1a9e0ba9e068947fafbd4fe7e7eb52740e1a8c597f0cd->leave($__internal_e715d8d4042c41ea89f1a9e0ba9e068947fafbd4fe7e7eb52740e1a8c597f0cd_prof);

        
        $__internal_a6577e5ae63c58591ac0b23536ad1af524ed4224d0660df65dad2325233975d0->leave($__internal_a6577e5ae63c58591ac0b23536ad1af524ed4224d0660df65dad2325233975d0_prof);

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

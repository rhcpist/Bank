<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e8911517946b7b5fc0c39a0484a2e12193e218bdbdcae3edc56769820da6b4e2 extends Twig_Template
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
        $__internal_b3010a4b0c29186335ddd5c05287eb02eca406178605bf1b2388343899bec854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3010a4b0c29186335ddd5c05287eb02eca406178605bf1b2388343899bec854->enter($__internal_b3010a4b0c29186335ddd5c05287eb02eca406178605bf1b2388343899bec854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_15f7ef6c46428eafd5c07e2d10b34e17fe32a3d54d111f44ee8a6eb23680d2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f7ef6c46428eafd5c07e2d10b34e17fe32a3d54d111f44ee8a6eb23680d2da->enter($__internal_15f7ef6c46428eafd5c07e2d10b34e17fe32a3d54d111f44ee8a6eb23680d2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b3010a4b0c29186335ddd5c05287eb02eca406178605bf1b2388343899bec854->leave($__internal_b3010a4b0c29186335ddd5c05287eb02eca406178605bf1b2388343899bec854_prof);

        
        $__internal_15f7ef6c46428eafd5c07e2d10b34e17fe32a3d54d111f44ee8a6eb23680d2da->leave($__internal_15f7ef6c46428eafd5c07e2d10b34e17fe32a3d54d111f44ee8a6eb23680d2da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

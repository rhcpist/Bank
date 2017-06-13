<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f223a60a1a0c49be0d8aaf1ab4822ea5bfc6d7e750ca0937584a25792a50d191 extends Twig_Template
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
        $__internal_4e6d064f4c6e0fbdcb059800e93ef479e46246826527e3ab57db24bf338d7a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6d064f4c6e0fbdcb059800e93ef479e46246826527e3ab57db24bf338d7a50->enter($__internal_4e6d064f4c6e0fbdcb059800e93ef479e46246826527e3ab57db24bf338d7a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_517cec2779672cab5ae3d1322617e744aeca15fb30fe4cfbe8c11b49d865e699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517cec2779672cab5ae3d1322617e744aeca15fb30fe4cfbe8c11b49d865e699->enter($__internal_517cec2779672cab5ae3d1322617e744aeca15fb30fe4cfbe8c11b49d865e699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4e6d064f4c6e0fbdcb059800e93ef479e46246826527e3ab57db24bf338d7a50->leave($__internal_4e6d064f4c6e0fbdcb059800e93ef479e46246826527e3ab57db24bf338d7a50_prof);

        
        $__internal_517cec2779672cab5ae3d1322617e744aeca15fb30fe4cfbe8c11b49d865e699->leave($__internal_517cec2779672cab5ae3d1322617e744aeca15fb30fe4cfbe8c11b49d865e699_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

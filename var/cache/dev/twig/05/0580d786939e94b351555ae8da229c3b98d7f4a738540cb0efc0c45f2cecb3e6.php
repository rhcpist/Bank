<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e8f9f9ff741c907d3ec871e16853ec90dcc0976efdec26288143c0dcf0055018 extends Twig_Template
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
        $__internal_19757d1b8772df24b672866c3716ba5ded1f116ebe322d538223c837237df62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19757d1b8772df24b672866c3716ba5ded1f116ebe322d538223c837237df62b->enter($__internal_19757d1b8772df24b672866c3716ba5ded1f116ebe322d538223c837237df62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ac7a488b56f2fe77b41f2e51e194bf17f038b3a962a07c90b6acc06ac81bee91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7a488b56f2fe77b41f2e51e194bf17f038b3a962a07c90b6acc06ac81bee91->enter($__internal_ac7a488b56f2fe77b41f2e51e194bf17f038b3a962a07c90b6acc06ac81bee91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_19757d1b8772df24b672866c3716ba5ded1f116ebe322d538223c837237df62b->leave($__internal_19757d1b8772df24b672866c3716ba5ded1f116ebe322d538223c837237df62b_prof);

        
        $__internal_ac7a488b56f2fe77b41f2e51e194bf17f038b3a962a07c90b6acc06ac81bee91->leave($__internal_ac7a488b56f2fe77b41f2e51e194bf17f038b3a962a07c90b6acc06ac81bee91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

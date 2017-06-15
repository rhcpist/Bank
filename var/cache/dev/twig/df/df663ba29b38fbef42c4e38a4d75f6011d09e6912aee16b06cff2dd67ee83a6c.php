<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b6e852d8e54fa8891f8dc48c5831f97dc2a456f1c4fe7db6b273a8e13a1c8bd3 extends Twig_Template
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
        $__internal_8319ba8822576f3376f1efecd042b8902cb0ec7ee1aa81179299ce7405c8d499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8319ba8822576f3376f1efecd042b8902cb0ec7ee1aa81179299ce7405c8d499->enter($__internal_8319ba8822576f3376f1efecd042b8902cb0ec7ee1aa81179299ce7405c8d499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_455a4b30245604bc3249fa764feb5e144520783a4b676c4809244dbb0782abe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455a4b30245604bc3249fa764feb5e144520783a4b676c4809244dbb0782abe1->enter($__internal_455a4b30245604bc3249fa764feb5e144520783a4b676c4809244dbb0782abe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8319ba8822576f3376f1efecd042b8902cb0ec7ee1aa81179299ce7405c8d499->leave($__internal_8319ba8822576f3376f1efecd042b8902cb0ec7ee1aa81179299ce7405c8d499_prof);

        
        $__internal_455a4b30245604bc3249fa764feb5e144520783a4b676c4809244dbb0782abe1->leave($__internal_455a4b30245604bc3249fa764feb5e144520783a4b676c4809244dbb0782abe1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

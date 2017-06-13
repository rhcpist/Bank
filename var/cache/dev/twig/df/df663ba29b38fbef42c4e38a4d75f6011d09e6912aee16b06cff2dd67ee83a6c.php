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
        $__internal_e3d39449e7a76f4aa282f514773eafcdb527c084478d1a7257bf490166761d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d39449e7a76f4aa282f514773eafcdb527c084478d1a7257bf490166761d9b->enter($__internal_e3d39449e7a76f4aa282f514773eafcdb527c084478d1a7257bf490166761d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b064430d379ac444e11823122249a691cdcda585825457e5220ff5004312f00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b064430d379ac444e11823122249a691cdcda585825457e5220ff5004312f00e->enter($__internal_b064430d379ac444e11823122249a691cdcda585825457e5220ff5004312f00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e3d39449e7a76f4aa282f514773eafcdb527c084478d1a7257bf490166761d9b->leave($__internal_e3d39449e7a76f4aa282f514773eafcdb527c084478d1a7257bf490166761d9b_prof);

        
        $__internal_b064430d379ac444e11823122249a691cdcda585825457e5220ff5004312f00e->leave($__internal_b064430d379ac444e11823122249a691cdcda585825457e5220ff5004312f00e_prof);

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

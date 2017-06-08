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
        $__internal_cbe96a67d72b5c626df2194f9d29d2346ddddf6139d6ed4bcc747f12e4838fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe96a67d72b5c626df2194f9d29d2346ddddf6139d6ed4bcc747f12e4838fd3->enter($__internal_cbe96a67d72b5c626df2194f9d29d2346ddddf6139d6ed4bcc747f12e4838fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_599d1230bc8f579a9f1c7aceee7d7cbd46f8bcd3aed1284e3da2273c650456c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599d1230bc8f579a9f1c7aceee7d7cbd46f8bcd3aed1284e3da2273c650456c7->enter($__internal_599d1230bc8f579a9f1c7aceee7d7cbd46f8bcd3aed1284e3da2273c650456c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cbe96a67d72b5c626df2194f9d29d2346ddddf6139d6ed4bcc747f12e4838fd3->leave($__internal_cbe96a67d72b5c626df2194f9d29d2346ddddf6139d6ed4bcc747f12e4838fd3_prof);

        
        $__internal_599d1230bc8f579a9f1c7aceee7d7cbd46f8bcd3aed1284e3da2273c650456c7->leave($__internal_599d1230bc8f579a9f1c7aceee7d7cbd46f8bcd3aed1284e3da2273c650456c7_prof);

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

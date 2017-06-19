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
        $__internal_957c33d3e192e0d2be88879eb2ec95e4924e5af1623cfc33191d36f973cb4719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957c33d3e192e0d2be88879eb2ec95e4924e5af1623cfc33191d36f973cb4719->enter($__internal_957c33d3e192e0d2be88879eb2ec95e4924e5af1623cfc33191d36f973cb4719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_e27016560b3105f772c44cb3a495f140855494c4e138b81afa66fa0ff6e86921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27016560b3105f772c44cb3a495f140855494c4e138b81afa66fa0ff6e86921->enter($__internal_e27016560b3105f772c44cb3a495f140855494c4e138b81afa66fa0ff6e86921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_957c33d3e192e0d2be88879eb2ec95e4924e5af1623cfc33191d36f973cb4719->leave($__internal_957c33d3e192e0d2be88879eb2ec95e4924e5af1623cfc33191d36f973cb4719_prof);

        
        $__internal_e27016560b3105f772c44cb3a495f140855494c4e138b81afa66fa0ff6e86921->leave($__internal_e27016560b3105f772c44cb3a495f140855494c4e138b81afa66fa0ff6e86921_prof);

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

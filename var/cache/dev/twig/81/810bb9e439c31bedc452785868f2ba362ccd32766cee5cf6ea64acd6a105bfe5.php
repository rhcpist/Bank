<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_32590586bb3021f3ddc723b7a5822a0098d87795d822f49b3872b0150b1ece6f extends Twig_Template
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
        $__internal_5e735fe6b6592e81085c91ec31cdc6edf6313299e117d0d95a7afd3a24e27aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e735fe6b6592e81085c91ec31cdc6edf6313299e117d0d95a7afd3a24e27aa2->enter($__internal_5e735fe6b6592e81085c91ec31cdc6edf6313299e117d0d95a7afd3a24e27aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_546e18cda422f6d5e91530ea5f1d72f01488de9c14532c2eac83f433d585ea0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546e18cda422f6d5e91530ea5f1d72f01488de9c14532c2eac83f433d585ea0a->enter($__internal_546e18cda422f6d5e91530ea5f1d72f01488de9c14532c2eac83f433d585ea0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5e735fe6b6592e81085c91ec31cdc6edf6313299e117d0d95a7afd3a24e27aa2->leave($__internal_5e735fe6b6592e81085c91ec31cdc6edf6313299e117d0d95a7afd3a24e27aa2_prof);

        
        $__internal_546e18cda422f6d5e91530ea5f1d72f01488de9c14532c2eac83f433d585ea0a->leave($__internal_546e18cda422f6d5e91530ea5f1d72f01488de9c14532c2eac83f433d585ea0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

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
        $__internal_6c4c9b81fdeb264b93a7d150e456351f70ebf65b3798c473b57df6298832ec10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4c9b81fdeb264b93a7d150e456351f70ebf65b3798c473b57df6298832ec10->enter($__internal_6c4c9b81fdeb264b93a7d150e456351f70ebf65b3798c473b57df6298832ec10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_dd6bfec9f7d4ec500352c26d8710ef81dcc1c9ff54fb4c3ea9232c57b9c01b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6bfec9f7d4ec500352c26d8710ef81dcc1c9ff54fb4c3ea9232c57b9c01b35->enter($__internal_dd6bfec9f7d4ec500352c26d8710ef81dcc1c9ff54fb4c3ea9232c57b9c01b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6c4c9b81fdeb264b93a7d150e456351f70ebf65b3798c473b57df6298832ec10->leave($__internal_6c4c9b81fdeb264b93a7d150e456351f70ebf65b3798c473b57df6298832ec10_prof);

        
        $__internal_dd6bfec9f7d4ec500352c26d8710ef81dcc1c9ff54fb4c3ea9232c57b9c01b35->leave($__internal_dd6bfec9f7d4ec500352c26d8710ef81dcc1c9ff54fb4c3ea9232c57b9c01b35_prof);

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

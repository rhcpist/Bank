<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_478b954e76eac7be2e5398f54e96abd4f1fe4c12ea4bffbf5573f3b60a3f5785 extends Twig_Template
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
        $__internal_4d065f0354f65fc554d3539ce9ddc42f462c25f642740e740d9d92e2c43e9ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d065f0354f65fc554d3539ce9ddc42f462c25f642740e740d9d92e2c43e9ede->enter($__internal_4d065f0354f65fc554d3539ce9ddc42f462c25f642740e740d9d92e2c43e9ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0b36315d5ac4cec5aa2645ff98a155ebb5ef9d765ec3c3f6a1bb95059d7196c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b36315d5ac4cec5aa2645ff98a155ebb5ef9d765ec3c3f6a1bb95059d7196c5->enter($__internal_0b36315d5ac4cec5aa2645ff98a155ebb5ef9d765ec3c3f6a1bb95059d7196c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4d065f0354f65fc554d3539ce9ddc42f462c25f642740e740d9d92e2c43e9ede->leave($__internal_4d065f0354f65fc554d3539ce9ddc42f462c25f642740e740d9d92e2c43e9ede_prof);

        
        $__internal_0b36315d5ac4cec5aa2645ff98a155ebb5ef9d765ec3c3f6a1bb95059d7196c5->leave($__internal_0b36315d5ac4cec5aa2645ff98a155ebb5ef9d765ec3c3f6a1bb95059d7196c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

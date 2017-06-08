<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7720bfd7f0878f482e7453be2fd2ca3eae022e427362c6ffd95833053e96b8ec extends Twig_Template
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
        $__internal_c92a877d6f37810be10020a75b3b83666f0af60b826fa4b8de755c76d6525476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92a877d6f37810be10020a75b3b83666f0af60b826fa4b8de755c76d6525476->enter($__internal_c92a877d6f37810be10020a75b3b83666f0af60b826fa4b8de755c76d6525476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_bec6e9b6d047342fc6c8648543374b80f66563ffab062d17047562ede8a601ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec6e9b6d047342fc6c8648543374b80f66563ffab062d17047562ede8a601ba->enter($__internal_bec6e9b6d047342fc6c8648543374b80f66563ffab062d17047562ede8a601ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c92a877d6f37810be10020a75b3b83666f0af60b826fa4b8de755c76d6525476->leave($__internal_c92a877d6f37810be10020a75b3b83666f0af60b826fa4b8de755c76d6525476_prof);

        
        $__internal_bec6e9b6d047342fc6c8648543374b80f66563ffab062d17047562ede8a601ba->leave($__internal_bec6e9b6d047342fc6c8648543374b80f66563ffab062d17047562ede8a601ba_prof);

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

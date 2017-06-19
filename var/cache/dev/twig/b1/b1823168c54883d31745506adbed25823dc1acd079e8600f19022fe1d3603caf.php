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
        $__internal_3a5921c56cea2b721c6f469d85c509d744b05be69a6e67bccd301ba521470f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5921c56cea2b721c6f469d85c509d744b05be69a6e67bccd301ba521470f98->enter($__internal_3a5921c56cea2b721c6f469d85c509d744b05be69a6e67bccd301ba521470f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d942d6b6f8a3d32128e3898a174d60aba7096ede4118e447a704ee3b1616ff87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d942d6b6f8a3d32128e3898a174d60aba7096ede4118e447a704ee3b1616ff87->enter($__internal_d942d6b6f8a3d32128e3898a174d60aba7096ede4118e447a704ee3b1616ff87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3a5921c56cea2b721c6f469d85c509d744b05be69a6e67bccd301ba521470f98->leave($__internal_3a5921c56cea2b721c6f469d85c509d744b05be69a6e67bccd301ba521470f98_prof);

        
        $__internal_d942d6b6f8a3d32128e3898a174d60aba7096ede4118e447a704ee3b1616ff87->leave($__internal_d942d6b6f8a3d32128e3898a174d60aba7096ede4118e447a704ee3b1616ff87_prof);

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

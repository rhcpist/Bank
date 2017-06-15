<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_df60cd642bc852e25bbfd9cd4c7c8ba66d91264a7bc3b02d175f2b3090bad104 extends Twig_Template
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
        $__internal_52c21b10d8673c1c6294d047c332f7329301b9c746ff45c2de369fe95c6ad868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c21b10d8673c1c6294d047c332f7329301b9c746ff45c2de369fe95c6ad868->enter($__internal_52c21b10d8673c1c6294d047c332f7329301b9c746ff45c2de369fe95c6ad868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_20a25b86055f311d26346ef3acf36d9854755a669bb9592c6ec348362a245c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a25b86055f311d26346ef3acf36d9854755a669bb9592c6ec348362a245c34->enter($__internal_20a25b86055f311d26346ef3acf36d9854755a669bb9592c6ec348362a245c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_52c21b10d8673c1c6294d047c332f7329301b9c746ff45c2de369fe95c6ad868->leave($__internal_52c21b10d8673c1c6294d047c332f7329301b9c746ff45c2de369fe95c6ad868_prof);

        
        $__internal_20a25b86055f311d26346ef3acf36d9854755a669bb9592c6ec348362a245c34->leave($__internal_20a25b86055f311d26346ef3acf36d9854755a669bb9592c6ec348362a245c34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}

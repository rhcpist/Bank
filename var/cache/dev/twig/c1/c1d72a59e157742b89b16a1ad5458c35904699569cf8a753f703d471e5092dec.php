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
        $__internal_febb49ab2e9ad10927d4ff7a451fdc2d2d19b134bdb7a2debc296b2988597dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_febb49ab2e9ad10927d4ff7a451fdc2d2d19b134bdb7a2debc296b2988597dfe->enter($__internal_febb49ab2e9ad10927d4ff7a451fdc2d2d19b134bdb7a2debc296b2988597dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6c09ecfabd736ceed454d70d5ba9d0eb7e3ed57cfba9578528654e0cca7feb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c09ecfabd736ceed454d70d5ba9d0eb7e3ed57cfba9578528654e0cca7feb0c->enter($__internal_6c09ecfabd736ceed454d70d5ba9d0eb7e3ed57cfba9578528654e0cca7feb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_febb49ab2e9ad10927d4ff7a451fdc2d2d19b134bdb7a2debc296b2988597dfe->leave($__internal_febb49ab2e9ad10927d4ff7a451fdc2d2d19b134bdb7a2debc296b2988597dfe_prof);

        
        $__internal_6c09ecfabd736ceed454d70d5ba9d0eb7e3ed57cfba9578528654e0cca7feb0c->leave($__internal_6c09ecfabd736ceed454d70d5ba9d0eb7e3ed57cfba9578528654e0cca7feb0c_prof);

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

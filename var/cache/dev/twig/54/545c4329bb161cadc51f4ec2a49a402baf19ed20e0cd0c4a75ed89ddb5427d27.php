<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_bd62656010163c72493bffb24ab6d1c05f16b726e0ec665cf687b4a231ed2e24 extends Twig_Template
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
        $__internal_7485edb883280e1afae58f8322fc5006d5a149aba0f1a2568a5933f8e5aa2572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7485edb883280e1afae58f8322fc5006d5a149aba0f1a2568a5933f8e5aa2572->enter($__internal_7485edb883280e1afae58f8322fc5006d5a149aba0f1a2568a5933f8e5aa2572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_03b6f476ee2a9b9545238fab7edad7dab843412b5da1f2153198df3293eff4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b6f476ee2a9b9545238fab7edad7dab843412b5da1f2153198df3293eff4eb->enter($__internal_03b6f476ee2a9b9545238fab7edad7dab843412b5da1f2153198df3293eff4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_7485edb883280e1afae58f8322fc5006d5a149aba0f1a2568a5933f8e5aa2572->leave($__internal_7485edb883280e1afae58f8322fc5006d5a149aba0f1a2568a5933f8e5aa2572_prof);

        
        $__internal_03b6f476ee2a9b9545238fab7edad7dab843412b5da1f2153198df3293eff4eb->leave($__internal_03b6f476ee2a9b9545238fab7edad7dab843412b5da1f2153198df3293eff4eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

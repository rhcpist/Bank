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
        $__internal_d9cf480c781c2dedabb54785e00fafc22abe6f951aff27f6b1debbab372202db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9cf480c781c2dedabb54785e00fafc22abe6f951aff27f6b1debbab372202db->enter($__internal_d9cf480c781c2dedabb54785e00fafc22abe6f951aff27f6b1debbab372202db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_eb620f8df4d51d89c74190eaa491cd953b0c469e59a6f8a46126e6e260d0231e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb620f8df4d51d89c74190eaa491cd953b0c469e59a6f8a46126e6e260d0231e->enter($__internal_eb620f8df4d51d89c74190eaa491cd953b0c469e59a6f8a46126e6e260d0231e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_d9cf480c781c2dedabb54785e00fafc22abe6f951aff27f6b1debbab372202db->leave($__internal_d9cf480c781c2dedabb54785e00fafc22abe6f951aff27f6b1debbab372202db_prof);

        
        $__internal_eb620f8df4d51d89c74190eaa491cd953b0c469e59a6f8a46126e6e260d0231e->leave($__internal_eb620f8df4d51d89c74190eaa491cd953b0c469e59a6f8a46126e6e260d0231e_prof);

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

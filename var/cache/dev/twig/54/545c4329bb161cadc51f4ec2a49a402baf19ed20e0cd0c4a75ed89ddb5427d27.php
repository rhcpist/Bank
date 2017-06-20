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
        $__internal_fb5f5677dc175852753e80ac625c75e7a38bbf06b5660a197458d788e50601fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5f5677dc175852753e80ac625c75e7a38bbf06b5660a197458d788e50601fe->enter($__internal_fb5f5677dc175852753e80ac625c75e7a38bbf06b5660a197458d788e50601fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b800064e41bfa031e51112c3ada3627fdc26f422b3129c9bcbd7d48f87fcda9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b800064e41bfa031e51112c3ada3627fdc26f422b3129c9bcbd7d48f87fcda9f->enter($__internal_b800064e41bfa031e51112c3ada3627fdc26f422b3129c9bcbd7d48f87fcda9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_fb5f5677dc175852753e80ac625c75e7a38bbf06b5660a197458d788e50601fe->leave($__internal_fb5f5677dc175852753e80ac625c75e7a38bbf06b5660a197458d788e50601fe_prof);

        
        $__internal_b800064e41bfa031e51112c3ada3627fdc26f422b3129c9bcbd7d48f87fcda9f->leave($__internal_b800064e41bfa031e51112c3ada3627fdc26f422b3129c9bcbd7d48f87fcda9f_prof);

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

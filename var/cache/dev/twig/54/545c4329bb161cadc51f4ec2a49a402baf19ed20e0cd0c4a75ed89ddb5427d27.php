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
        $__internal_4b46068280d131abb8841c7f9c29f10ec7c709c2ddbd617c053e1c6a60e8015a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b46068280d131abb8841c7f9c29f10ec7c709c2ddbd617c053e1c6a60e8015a->enter($__internal_4b46068280d131abb8841c7f9c29f10ec7c709c2ddbd617c053e1c6a60e8015a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_509296ebf84c0c826e962516a9a101e4a95bc13b74f5ab522ef7130522b5e06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509296ebf84c0c826e962516a9a101e4a95bc13b74f5ab522ef7130522b5e06e->enter($__internal_509296ebf84c0c826e962516a9a101e4a95bc13b74f5ab522ef7130522b5e06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4b46068280d131abb8841c7f9c29f10ec7c709c2ddbd617c053e1c6a60e8015a->leave($__internal_4b46068280d131abb8841c7f9c29f10ec7c709c2ddbd617c053e1c6a60e8015a_prof);

        
        $__internal_509296ebf84c0c826e962516a9a101e4a95bc13b74f5ab522ef7130522b5e06e->leave($__internal_509296ebf84c0c826e962516a9a101e4a95bc13b74f5ab522ef7130522b5e06e_prof);

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

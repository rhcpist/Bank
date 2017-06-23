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
        $__internal_872b27cf860fd649db3386f8acec2ad88dcc1e5c40f2e73867e138192e627539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872b27cf860fd649db3386f8acec2ad88dcc1e5c40f2e73867e138192e627539->enter($__internal_872b27cf860fd649db3386f8acec2ad88dcc1e5c40f2e73867e138192e627539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6b022084ba0c7f72e3193e92281b71ac50cdd4ce57123adbb02de5176070b549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b022084ba0c7f72e3193e92281b71ac50cdd4ce57123adbb02de5176070b549->enter($__internal_6b022084ba0c7f72e3193e92281b71ac50cdd4ce57123adbb02de5176070b549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_872b27cf860fd649db3386f8acec2ad88dcc1e5c40f2e73867e138192e627539->leave($__internal_872b27cf860fd649db3386f8acec2ad88dcc1e5c40f2e73867e138192e627539_prof);

        
        $__internal_6b022084ba0c7f72e3193e92281b71ac50cdd4ce57123adbb02de5176070b549->leave($__internal_6b022084ba0c7f72e3193e92281b71ac50cdd4ce57123adbb02de5176070b549_prof);

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

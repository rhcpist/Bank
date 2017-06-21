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
        $__internal_2d01bcf3169c23c22578cef3ec1d3ccbfd54a90402c1ed5db7bf3db473379ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d01bcf3169c23c22578cef3ec1d3ccbfd54a90402c1ed5db7bf3db473379ba5->enter($__internal_2d01bcf3169c23c22578cef3ec1d3ccbfd54a90402c1ed5db7bf3db473379ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_1d2d40b939c1abe9b525e03e9a7c359bf1aecccbd4238b54be125ab26e300ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2d40b939c1abe9b525e03e9a7c359bf1aecccbd4238b54be125ab26e300ec4->enter($__internal_1d2d40b939c1abe9b525e03e9a7c359bf1aecccbd4238b54be125ab26e300ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_2d01bcf3169c23c22578cef3ec1d3ccbfd54a90402c1ed5db7bf3db473379ba5->leave($__internal_2d01bcf3169c23c22578cef3ec1d3ccbfd54a90402c1ed5db7bf3db473379ba5_prof);

        
        $__internal_1d2d40b939c1abe9b525e03e9a7c359bf1aecccbd4238b54be125ab26e300ec4->leave($__internal_1d2d40b939c1abe9b525e03e9a7c359bf1aecccbd4238b54be125ab26e300ec4_prof);

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

<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5db72ae7d2152c3640981351f95ade62ae403f0848539fb3231f6e9cd37f066e extends Twig_Template
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
        $__internal_723036ddedb0e85387cefe993ea36f6a5d74337b2bbf720a71f287f54b2ad04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723036ddedb0e85387cefe993ea36f6a5d74337b2bbf720a71f287f54b2ad04f->enter($__internal_723036ddedb0e85387cefe993ea36f6a5d74337b2bbf720a71f287f54b2ad04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b4764c4d26a9ebb2687780a03f51769a7ef1ef4cdab5159c0f457856f7f46669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4764c4d26a9ebb2687780a03f51769a7ef1ef4cdab5159c0f457856f7f46669->enter($__internal_b4764c4d26a9ebb2687780a03f51769a7ef1ef4cdab5159c0f457856f7f46669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_723036ddedb0e85387cefe993ea36f6a5d74337b2bbf720a71f287f54b2ad04f->leave($__internal_723036ddedb0e85387cefe993ea36f6a5d74337b2bbf720a71f287f54b2ad04f_prof);

        
        $__internal_b4764c4d26a9ebb2687780a03f51769a7ef1ef4cdab5159c0f457856f7f46669->leave($__internal_b4764c4d26a9ebb2687780a03f51769a7ef1ef4cdab5159c0f457856f7f46669_prof);

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

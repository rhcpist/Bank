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
        $__internal_b02e9e410816e3c32f4f1538999b1f2062dd1575f1e047abc0fc9bb49921b048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02e9e410816e3c32f4f1538999b1f2062dd1575f1e047abc0fc9bb49921b048->enter($__internal_b02e9e410816e3c32f4f1538999b1f2062dd1575f1e047abc0fc9bb49921b048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2bb8c005520a8a1155250c59845041c88fb08eef554e2b8d52727e447559b97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb8c005520a8a1155250c59845041c88fb08eef554e2b8d52727e447559b97c->enter($__internal_2bb8c005520a8a1155250c59845041c88fb08eef554e2b8d52727e447559b97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_b02e9e410816e3c32f4f1538999b1f2062dd1575f1e047abc0fc9bb49921b048->leave($__internal_b02e9e410816e3c32f4f1538999b1f2062dd1575f1e047abc0fc9bb49921b048_prof);

        
        $__internal_2bb8c005520a8a1155250c59845041c88fb08eef554e2b8d52727e447559b97c->leave($__internal_2bb8c005520a8a1155250c59845041c88fb08eef554e2b8d52727e447559b97c_prof);

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

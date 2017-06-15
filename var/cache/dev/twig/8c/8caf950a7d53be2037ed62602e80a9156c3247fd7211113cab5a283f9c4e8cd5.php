<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_109d3656d532905138e0898fdb2c6313b722825c73685a6ae2f59d74743e28b1 extends Twig_Template
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
        $__internal_4ed6ba5fc838da261458beb52afbaa3bd0d30e30052192e135b5afdb84ff5262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed6ba5fc838da261458beb52afbaa3bd0d30e30052192e135b5afdb84ff5262->enter($__internal_4ed6ba5fc838da261458beb52afbaa3bd0d30e30052192e135b5afdb84ff5262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_56964867c66ad92fec23469fd223963a1df1f195f35a46d38ce45ce8cecdfebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56964867c66ad92fec23469fd223963a1df1f195f35a46d38ce45ce8cecdfebe->enter($__internal_56964867c66ad92fec23469fd223963a1df1f195f35a46d38ce45ce8cecdfebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4ed6ba5fc838da261458beb52afbaa3bd0d30e30052192e135b5afdb84ff5262->leave($__internal_4ed6ba5fc838da261458beb52afbaa3bd0d30e30052192e135b5afdb84ff5262_prof);

        
        $__internal_56964867c66ad92fec23469fd223963a1df1f195f35a46d38ce45ce8cecdfebe->leave($__internal_56964867c66ad92fec23469fd223963a1df1f195f35a46d38ce45ce8cecdfebe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

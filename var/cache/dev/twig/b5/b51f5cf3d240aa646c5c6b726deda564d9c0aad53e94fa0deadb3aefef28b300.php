<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0369cc1779a867bdc102e7466f48756e7d1adf5ccc84b6cbb8f02b992229f8bd extends Twig_Template
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
        $__internal_0784c49ed88c3f0c9bd05962142ae38ad267a16bda500ef667bd11aac8c9eaff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0784c49ed88c3f0c9bd05962142ae38ad267a16bda500ef667bd11aac8c9eaff->enter($__internal_0784c49ed88c3f0c9bd05962142ae38ad267a16bda500ef667bd11aac8c9eaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_12b4f9830464c0982120c5eb1950ae821b37df10fbcb0ad7c3ece43a13b36515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b4f9830464c0982120c5eb1950ae821b37df10fbcb0ad7c3ece43a13b36515->enter($__internal_12b4f9830464c0982120c5eb1950ae821b37df10fbcb0ad7c3ece43a13b36515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0784c49ed88c3f0c9bd05962142ae38ad267a16bda500ef667bd11aac8c9eaff->leave($__internal_0784c49ed88c3f0c9bd05962142ae38ad267a16bda500ef667bd11aac8c9eaff_prof);

        
        $__internal_12b4f9830464c0982120c5eb1950ae821b37df10fbcb0ad7c3ece43a13b36515->leave($__internal_12b4f9830464c0982120c5eb1950ae821b37df10fbcb0ad7c3ece43a13b36515_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

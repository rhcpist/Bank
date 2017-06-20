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
        $__internal_b7446b964376b30c1ce3d0294aeeb0bb471ebd5273cad1be503e369a7cec7d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7446b964376b30c1ce3d0294aeeb0bb471ebd5273cad1be503e369a7cec7d32->enter($__internal_b7446b964376b30c1ce3d0294aeeb0bb471ebd5273cad1be503e369a7cec7d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3f25762cca225ea2cc71640364e0c8e5b808f163cd6df73f4b0dcdb202b20631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f25762cca225ea2cc71640364e0c8e5b808f163cd6df73f4b0dcdb202b20631->enter($__internal_3f25762cca225ea2cc71640364e0c8e5b808f163cd6df73f4b0dcdb202b20631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b7446b964376b30c1ce3d0294aeeb0bb471ebd5273cad1be503e369a7cec7d32->leave($__internal_b7446b964376b30c1ce3d0294aeeb0bb471ebd5273cad1be503e369a7cec7d32_prof);

        
        $__internal_3f25762cca225ea2cc71640364e0c8e5b808f163cd6df73f4b0dcdb202b20631->leave($__internal_3f25762cca225ea2cc71640364e0c8e5b808f163cd6df73f4b0dcdb202b20631_prof);

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

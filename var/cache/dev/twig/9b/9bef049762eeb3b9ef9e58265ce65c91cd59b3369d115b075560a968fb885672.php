<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_dcb8440db662175ff5ab0ba6d3f511622fa5e771346dacc47b48a281737b8117 extends Twig_Template
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
        $__internal_e84a452a3a23021cd0419a94183be1113beb624faeadb6b35edadaf7f1a31d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84a452a3a23021cd0419a94183be1113beb624faeadb6b35edadaf7f1a31d32->enter($__internal_e84a452a3a23021cd0419a94183be1113beb624faeadb6b35edadaf7f1a31d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c32a6d3e74caa1964360bacc468439cc0ba88dba4a090a97330445bc492034b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32a6d3e74caa1964360bacc468439cc0ba88dba4a090a97330445bc492034b1->enter($__internal_c32a6d3e74caa1964360bacc468439cc0ba88dba4a090a97330445bc492034b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e84a452a3a23021cd0419a94183be1113beb624faeadb6b35edadaf7f1a31d32->leave($__internal_e84a452a3a23021cd0419a94183be1113beb624faeadb6b35edadaf7f1a31d32_prof);

        
        $__internal_c32a6d3e74caa1964360bacc468439cc0ba88dba4a090a97330445bc492034b1->leave($__internal_c32a6d3e74caa1964360bacc468439cc0ba88dba4a090a97330445bc492034b1_prof);

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

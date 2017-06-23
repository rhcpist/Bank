<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a6e51224e61870718d6512b4b0fe3ece1c61774027e5a2aad7d8b1ca13d11712 extends Twig_Template
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
        $__internal_6644a47b5adc6962833bcf6f5f5cc1585929b8e1f71a194b9b5ae7a71d817b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6644a47b5adc6962833bcf6f5f5cc1585929b8e1f71a194b9b5ae7a71d817b08->enter($__internal_6644a47b5adc6962833bcf6f5f5cc1585929b8e1f71a194b9b5ae7a71d817b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0175b9c5c10a0e5de849ca9e876fe2496005add211daf9cf0f54340d908e9ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0175b9c5c10a0e5de849ca9e876fe2496005add211daf9cf0f54340d908e9ad3->enter($__internal_0175b9c5c10a0e5de849ca9e876fe2496005add211daf9cf0f54340d908e9ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6644a47b5adc6962833bcf6f5f5cc1585929b8e1f71a194b9b5ae7a71d817b08->leave($__internal_6644a47b5adc6962833bcf6f5f5cc1585929b8e1f71a194b9b5ae7a71d817b08_prof);

        
        $__internal_0175b9c5c10a0e5de849ca9e876fe2496005add211daf9cf0f54340d908e9ad3->leave($__internal_0175b9c5c10a0e5de849ca9e876fe2496005add211daf9cf0f54340d908e9ad3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

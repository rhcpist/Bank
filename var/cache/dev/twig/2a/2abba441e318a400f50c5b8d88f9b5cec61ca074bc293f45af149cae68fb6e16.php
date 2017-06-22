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
        $__internal_bc60dc92d24c5ce92412ae309942a5fd6025186b65db6fe44085e52fea5b7d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc60dc92d24c5ce92412ae309942a5fd6025186b65db6fe44085e52fea5b7d98->enter($__internal_bc60dc92d24c5ce92412ae309942a5fd6025186b65db6fe44085e52fea5b7d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3a74da0a053e675f2df50dab5e1f956c031859abf4025c339290a2795d606798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a74da0a053e675f2df50dab5e1f956c031859abf4025c339290a2795d606798->enter($__internal_3a74da0a053e675f2df50dab5e1f956c031859abf4025c339290a2795d606798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bc60dc92d24c5ce92412ae309942a5fd6025186b65db6fe44085e52fea5b7d98->leave($__internal_bc60dc92d24c5ce92412ae309942a5fd6025186b65db6fe44085e52fea5b7d98_prof);

        
        $__internal_3a74da0a053e675f2df50dab5e1f956c031859abf4025c339290a2795d606798->leave($__internal_3a74da0a053e675f2df50dab5e1f956c031859abf4025c339290a2795d606798_prof);

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

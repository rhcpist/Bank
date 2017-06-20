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
        $__internal_d82b21065576bff1121d4f22253ad1a763987a6d6fed22df80f3bcde5bbfabd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82b21065576bff1121d4f22253ad1a763987a6d6fed22df80f3bcde5bbfabd2->enter($__internal_d82b21065576bff1121d4f22253ad1a763987a6d6fed22df80f3bcde5bbfabd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0253a92f00099099213e2dcd9375cb7380c1d106137366956fcbc4b18f07b0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0253a92f00099099213e2dcd9375cb7380c1d106137366956fcbc4b18f07b0a6->enter($__internal_0253a92f00099099213e2dcd9375cb7380c1d106137366956fcbc4b18f07b0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d82b21065576bff1121d4f22253ad1a763987a6d6fed22df80f3bcde5bbfabd2->leave($__internal_d82b21065576bff1121d4f22253ad1a763987a6d6fed22df80f3bcde5bbfabd2_prof);

        
        $__internal_0253a92f00099099213e2dcd9375cb7380c1d106137366956fcbc4b18f07b0a6->leave($__internal_0253a92f00099099213e2dcd9375cb7380c1d106137366956fcbc4b18f07b0a6_prof);

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

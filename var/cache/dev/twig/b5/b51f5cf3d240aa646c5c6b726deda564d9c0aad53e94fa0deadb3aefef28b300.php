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
        $__internal_462de499dced498af889cdbc6be1f19f89c83d65ca3b74555c0fd4e94b2eab94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462de499dced498af889cdbc6be1f19f89c83d65ca3b74555c0fd4e94b2eab94->enter($__internal_462de499dced498af889cdbc6be1f19f89c83d65ca3b74555c0fd4e94b2eab94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c7bd639bbe2d72e65b56b6f4592b6aef46f2f3ee1f66ece30db7d579a37b600c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bd639bbe2d72e65b56b6f4592b6aef46f2f3ee1f66ece30db7d579a37b600c->enter($__internal_c7bd639bbe2d72e65b56b6f4592b6aef46f2f3ee1f66ece30db7d579a37b600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_462de499dced498af889cdbc6be1f19f89c83d65ca3b74555c0fd4e94b2eab94->leave($__internal_462de499dced498af889cdbc6be1f19f89c83d65ca3b74555c0fd4e94b2eab94_prof);

        
        $__internal_c7bd639bbe2d72e65b56b6f4592b6aef46f2f3ee1f66ece30db7d579a37b600c->leave($__internal_c7bd639bbe2d72e65b56b6f4592b6aef46f2f3ee1f66ece30db7d579a37b600c_prof);

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

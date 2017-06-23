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
        $__internal_8680b3fa0f401f628119cf8c6e48eec53bce6241487d189c3e5b9d9d74b07ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8680b3fa0f401f628119cf8c6e48eec53bce6241487d189c3e5b9d9d74b07ef9->enter($__internal_8680b3fa0f401f628119cf8c6e48eec53bce6241487d189c3e5b9d9d74b07ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9e30069b5f127932bcc884cb3dbc06fb67a29f017de9da3b581837514aae7d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e30069b5f127932bcc884cb3dbc06fb67a29f017de9da3b581837514aae7d83->enter($__internal_9e30069b5f127932bcc884cb3dbc06fb67a29f017de9da3b581837514aae7d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8680b3fa0f401f628119cf8c6e48eec53bce6241487d189c3e5b9d9d74b07ef9->leave($__internal_8680b3fa0f401f628119cf8c6e48eec53bce6241487d189c3e5b9d9d74b07ef9_prof);

        
        $__internal_9e30069b5f127932bcc884cb3dbc06fb67a29f017de9da3b581837514aae7d83->leave($__internal_9e30069b5f127932bcc884cb3dbc06fb67a29f017de9da3b581837514aae7d83_prof);

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

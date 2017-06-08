<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_30e1e12268fea5f67a8937bde498e2f181626634087e6acda63468be6412fc8a extends Twig_Template
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
        $__internal_8fe924070509c4000bda12ace67da2e6ad2098be3da447951fc91d1c3a72b551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe924070509c4000bda12ace67da2e6ad2098be3da447951fc91d1c3a72b551->enter($__internal_8fe924070509c4000bda12ace67da2e6ad2098be3da447951fc91d1c3a72b551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f3024d0d2f6cb62610859736838aec1b267c76d471fdaef8d0f6da67df33bcdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3024d0d2f6cb62610859736838aec1b267c76d471fdaef8d0f6da67df33bcdd->enter($__internal_f3024d0d2f6cb62610859736838aec1b267c76d471fdaef8d0f6da67df33bcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8fe924070509c4000bda12ace67da2e6ad2098be3da447951fc91d1c3a72b551->leave($__internal_8fe924070509c4000bda12ace67da2e6ad2098be3da447951fc91d1c3a72b551_prof);

        
        $__internal_f3024d0d2f6cb62610859736838aec1b267c76d471fdaef8d0f6da67df33bcdd->leave($__internal_f3024d0d2f6cb62610859736838aec1b267c76d471fdaef8d0f6da67df33bcdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

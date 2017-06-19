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
        $__internal_aed93f1b9c189399c15d6fde153d1b0cb70b0ffb8cd3a254ac22fda35279bac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed93f1b9c189399c15d6fde153d1b0cb70b0ffb8cd3a254ac22fda35279bac3->enter($__internal_aed93f1b9c189399c15d6fde153d1b0cb70b0ffb8cd3a254ac22fda35279bac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_cef69d2945054eadcaac62ea90b605f16ba67db7cdc9cac90a1dfd7f3df37e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef69d2945054eadcaac62ea90b605f16ba67db7cdc9cac90a1dfd7f3df37e0b->enter($__internal_cef69d2945054eadcaac62ea90b605f16ba67db7cdc9cac90a1dfd7f3df37e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_aed93f1b9c189399c15d6fde153d1b0cb70b0ffb8cd3a254ac22fda35279bac3->leave($__internal_aed93f1b9c189399c15d6fde153d1b0cb70b0ffb8cd3a254ac22fda35279bac3_prof);

        
        $__internal_cef69d2945054eadcaac62ea90b605f16ba67db7cdc9cac90a1dfd7f3df37e0b->leave($__internal_cef69d2945054eadcaac62ea90b605f16ba67db7cdc9cac90a1dfd7f3df37e0b_prof);

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

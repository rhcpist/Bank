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
        $__internal_6cdb19d8c300f8ad80a87fe8706043e53d2388f7064e8e4592d83fc5793c8f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdb19d8c300f8ad80a87fe8706043e53d2388f7064e8e4592d83fc5793c8f26->enter($__internal_6cdb19d8c300f8ad80a87fe8706043e53d2388f7064e8e4592d83fc5793c8f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b02e96bdc878aa1d36c7a9eb8e7f7b9c289eea76a8546dc0e7d9ea75f0d6fe43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02e96bdc878aa1d36c7a9eb8e7f7b9c289eea76a8546dc0e7d9ea75f0d6fe43->enter($__internal_b02e96bdc878aa1d36c7a9eb8e7f7b9c289eea76a8546dc0e7d9ea75f0d6fe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6cdb19d8c300f8ad80a87fe8706043e53d2388f7064e8e4592d83fc5793c8f26->leave($__internal_6cdb19d8c300f8ad80a87fe8706043e53d2388f7064e8e4592d83fc5793c8f26_prof);

        
        $__internal_b02e96bdc878aa1d36c7a9eb8e7f7b9c289eea76a8546dc0e7d9ea75f0d6fe43->leave($__internal_b02e96bdc878aa1d36c7a9eb8e7f7b9c289eea76a8546dc0e7d9ea75f0d6fe43_prof);

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

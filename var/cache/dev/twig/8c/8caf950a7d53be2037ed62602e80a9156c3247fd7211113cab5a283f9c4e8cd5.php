<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_109d3656d532905138e0898fdb2c6313b722825c73685a6ae2f59d74743e28b1 extends Twig_Template
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
        $__internal_7e8a6cc54001f79d9a5551a4b67cfc9848e5f3f25e32db8330c52d7bb5a33f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8a6cc54001f79d9a5551a4b67cfc9848e5f3f25e32db8330c52d7bb5a33f3c->enter($__internal_7e8a6cc54001f79d9a5551a4b67cfc9848e5f3f25e32db8330c52d7bb5a33f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e22b432fe325af42becab6f6dc2ad5272c8a90cabaab76a6c51ad87fd0044214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22b432fe325af42becab6f6dc2ad5272c8a90cabaab76a6c51ad87fd0044214->enter($__internal_e22b432fe325af42becab6f6dc2ad5272c8a90cabaab76a6c51ad87fd0044214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7e8a6cc54001f79d9a5551a4b67cfc9848e5f3f25e32db8330c52d7bb5a33f3c->leave($__internal_7e8a6cc54001f79d9a5551a4b67cfc9848e5f3f25e32db8330c52d7bb5a33f3c_prof);

        
        $__internal_e22b432fe325af42becab6f6dc2ad5272c8a90cabaab76a6c51ad87fd0044214->leave($__internal_e22b432fe325af42becab6f6dc2ad5272c8a90cabaab76a6c51ad87fd0044214_prof);

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

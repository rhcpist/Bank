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
        $__internal_626a82a0646329a33020aebd6c90f0701f85e1cc3daa92f57e31f1e8c3ed9723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626a82a0646329a33020aebd6c90f0701f85e1cc3daa92f57e31f1e8c3ed9723->enter($__internal_626a82a0646329a33020aebd6c90f0701f85e1cc3daa92f57e31f1e8c3ed9723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_fb1c1660ad453e698c782352c89dbbd877c88cb11aa5b596073a977d54afff33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1c1660ad453e698c782352c89dbbd877c88cb11aa5b596073a977d54afff33->enter($__internal_fb1c1660ad453e698c782352c89dbbd877c88cb11aa5b596073a977d54afff33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_626a82a0646329a33020aebd6c90f0701f85e1cc3daa92f57e31f1e8c3ed9723->leave($__internal_626a82a0646329a33020aebd6c90f0701f85e1cc3daa92f57e31f1e8c3ed9723_prof);

        
        $__internal_fb1c1660ad453e698c782352c89dbbd877c88cb11aa5b596073a977d54afff33->leave($__internal_fb1c1660ad453e698c782352c89dbbd877c88cb11aa5b596073a977d54afff33_prof);

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

<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cdb779f4622a8a731e1c3fd84dbc17b37198c52f49449d04e0ae5faa974a126b extends Twig_Template
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
        $__internal_e6e998d80b347b9287c9dd1b0d034e764430af4c0fbfef74c4c632c875f2cc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e998d80b347b9287c9dd1b0d034e764430af4c0fbfef74c4c632c875f2cc43->enter($__internal_e6e998d80b347b9287c9dd1b0d034e764430af4c0fbfef74c4c632c875f2cc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8c377cc61e39ce5f81aa8b18ef76982027a74ead98ca8883ef5d00f90d27f8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c377cc61e39ce5f81aa8b18ef76982027a74ead98ca8883ef5d00f90d27f8c3->enter($__internal_8c377cc61e39ce5f81aa8b18ef76982027a74ead98ca8883ef5d00f90d27f8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e6e998d80b347b9287c9dd1b0d034e764430af4c0fbfef74c4c632c875f2cc43->leave($__internal_e6e998d80b347b9287c9dd1b0d034e764430af4c0fbfef74c4c632c875f2cc43_prof);

        
        $__internal_8c377cc61e39ce5f81aa8b18ef76982027a74ead98ca8883ef5d00f90d27f8c3->leave($__internal_8c377cc61e39ce5f81aa8b18ef76982027a74ead98ca8883ef5d00f90d27f8c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

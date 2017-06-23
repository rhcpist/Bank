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
        $__internal_2d714d964a19d6e62307b1349d95653d4713579e13fc4413ea0c73b5050da0df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d714d964a19d6e62307b1349d95653d4713579e13fc4413ea0c73b5050da0df->enter($__internal_2d714d964a19d6e62307b1349d95653d4713579e13fc4413ea0c73b5050da0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_958913a6ad6735b89721a7a1c77f7c9e5e865a16638c7236dafb24e0d74f5334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958913a6ad6735b89721a7a1c77f7c9e5e865a16638c7236dafb24e0d74f5334->enter($__internal_958913a6ad6735b89721a7a1c77f7c9e5e865a16638c7236dafb24e0d74f5334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2d714d964a19d6e62307b1349d95653d4713579e13fc4413ea0c73b5050da0df->leave($__internal_2d714d964a19d6e62307b1349d95653d4713579e13fc4413ea0c73b5050da0df_prof);

        
        $__internal_958913a6ad6735b89721a7a1c77f7c9e5e865a16638c7236dafb24e0d74f5334->leave($__internal_958913a6ad6735b89721a7a1c77f7c9e5e865a16638c7236dafb24e0d74f5334_prof);

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

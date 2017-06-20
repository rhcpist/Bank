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
        $__internal_bea6bd50866276977854322e7d62b8b852fce00e102a5b7eea01f71e7de314ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea6bd50866276977854322e7d62b8b852fce00e102a5b7eea01f71e7de314ec->enter($__internal_bea6bd50866276977854322e7d62b8b852fce00e102a5b7eea01f71e7de314ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b44baf4deeb6bf7e4b034546cd579555207b32c394b8e2c4cb36380f8d79b6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44baf4deeb6bf7e4b034546cd579555207b32c394b8e2c4cb36380f8d79b6e0->enter($__internal_b44baf4deeb6bf7e4b034546cd579555207b32c394b8e2c4cb36380f8d79b6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bea6bd50866276977854322e7d62b8b852fce00e102a5b7eea01f71e7de314ec->leave($__internal_bea6bd50866276977854322e7d62b8b852fce00e102a5b7eea01f71e7de314ec_prof);

        
        $__internal_b44baf4deeb6bf7e4b034546cd579555207b32c394b8e2c4cb36380f8d79b6e0->leave($__internal_b44baf4deeb6bf7e4b034546cd579555207b32c394b8e2c4cb36380f8d79b6e0_prof);

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

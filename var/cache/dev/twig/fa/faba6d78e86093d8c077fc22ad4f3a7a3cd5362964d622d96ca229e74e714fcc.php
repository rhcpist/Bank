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
        $__internal_cdf79576ff4bdd475b8b341405801d8324f9f9fd7ec4536830776e871f004438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf79576ff4bdd475b8b341405801d8324f9f9fd7ec4536830776e871f004438->enter($__internal_cdf79576ff4bdd475b8b341405801d8324f9f9fd7ec4536830776e871f004438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9fe3a4151d4ac3b3b9d4576a40ab4c527a266b1d291926ff016c1bfd4c712add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe3a4151d4ac3b3b9d4576a40ab4c527a266b1d291926ff016c1bfd4c712add->enter($__internal_9fe3a4151d4ac3b3b9d4576a40ab4c527a266b1d291926ff016c1bfd4c712add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cdf79576ff4bdd475b8b341405801d8324f9f9fd7ec4536830776e871f004438->leave($__internal_cdf79576ff4bdd475b8b341405801d8324f9f9fd7ec4536830776e871f004438_prof);

        
        $__internal_9fe3a4151d4ac3b3b9d4576a40ab4c527a266b1d291926ff016c1bfd4c712add->leave($__internal_9fe3a4151d4ac3b3b9d4576a40ab4c527a266b1d291926ff016c1bfd4c712add_prof);

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

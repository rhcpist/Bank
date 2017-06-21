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
        $__internal_fed7249f041e2bede22ba5b5859add1838379b64e6f6074571a01a31720521f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed7249f041e2bede22ba5b5859add1838379b64e6f6074571a01a31720521f5->enter($__internal_fed7249f041e2bede22ba5b5859add1838379b64e6f6074571a01a31720521f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_94480ad9bebdd7884095cdd39509777170001d342b1292b029936c235a67999e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94480ad9bebdd7884095cdd39509777170001d342b1292b029936c235a67999e->enter($__internal_94480ad9bebdd7884095cdd39509777170001d342b1292b029936c235a67999e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fed7249f041e2bede22ba5b5859add1838379b64e6f6074571a01a31720521f5->leave($__internal_fed7249f041e2bede22ba5b5859add1838379b64e6f6074571a01a31720521f5_prof);

        
        $__internal_94480ad9bebdd7884095cdd39509777170001d342b1292b029936c235a67999e->leave($__internal_94480ad9bebdd7884095cdd39509777170001d342b1292b029936c235a67999e_prof);

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

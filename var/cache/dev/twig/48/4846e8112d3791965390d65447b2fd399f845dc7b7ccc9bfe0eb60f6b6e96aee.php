<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b04551a39dae58e67eafa561918bff12c05a9b290a89b5c1f4c9d0a03dccd80f extends Twig_Template
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
        $__internal_278bf1eff59e615a1a4e054b877a39607b1f1550a25ca97c559a4aacc23df353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278bf1eff59e615a1a4e054b877a39607b1f1550a25ca97c559a4aacc23df353->enter($__internal_278bf1eff59e615a1a4e054b877a39607b1f1550a25ca97c559a4aacc23df353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3d7df0b4cfcaa68a029f7b2fe5fcfecce8c344ee60526c79d70cc067ea452173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7df0b4cfcaa68a029f7b2fe5fcfecce8c344ee60526c79d70cc067ea452173->enter($__internal_3d7df0b4cfcaa68a029f7b2fe5fcfecce8c344ee60526c79d70cc067ea452173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_278bf1eff59e615a1a4e054b877a39607b1f1550a25ca97c559a4aacc23df353->leave($__internal_278bf1eff59e615a1a4e054b877a39607b1f1550a25ca97c559a4aacc23df353_prof);

        
        $__internal_3d7df0b4cfcaa68a029f7b2fe5fcfecce8c344ee60526c79d70cc067ea452173->leave($__internal_3d7df0b4cfcaa68a029f7b2fe5fcfecce8c344ee60526c79d70cc067ea452173_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

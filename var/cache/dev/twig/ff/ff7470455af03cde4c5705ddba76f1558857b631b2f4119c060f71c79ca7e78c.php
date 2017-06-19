<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c21263e74344919c60ce7ccc3202f2423e214b3140c4370c129177288e263f2f extends Twig_Template
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
        $__internal_bdae85962367380d25730f59c1fc1d5ca23ea4f196372ab86f2d1bac256f99ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdae85962367380d25730f59c1fc1d5ca23ea4f196372ab86f2d1bac256f99ed->enter($__internal_bdae85962367380d25730f59c1fc1d5ca23ea4f196372ab86f2d1bac256f99ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_de4f245757853303e45897d7ce70fc73ed44b147a884232d84ff5edd89537325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4f245757853303e45897d7ce70fc73ed44b147a884232d84ff5edd89537325->enter($__internal_de4f245757853303e45897d7ce70fc73ed44b147a884232d84ff5edd89537325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bdae85962367380d25730f59c1fc1d5ca23ea4f196372ab86f2d1bac256f99ed->leave($__internal_bdae85962367380d25730f59c1fc1d5ca23ea4f196372ab86f2d1bac256f99ed_prof);

        
        $__internal_de4f245757853303e45897d7ce70fc73ed44b147a884232d84ff5edd89537325->leave($__internal_de4f245757853303e45897d7ce70fc73ed44b147a884232d84ff5edd89537325_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

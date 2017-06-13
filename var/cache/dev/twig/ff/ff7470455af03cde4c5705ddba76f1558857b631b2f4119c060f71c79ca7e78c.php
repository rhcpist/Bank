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
        $__internal_dc630c42b0ca95a07e97d53a0f77168263438df0cff118de4a377e6191891721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc630c42b0ca95a07e97d53a0f77168263438df0cff118de4a377e6191891721->enter($__internal_dc630c42b0ca95a07e97d53a0f77168263438df0cff118de4a377e6191891721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_673e6b7c432c7e7aac02e90db61844b3380bf24bb76dfa69b30e32dbf767330b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673e6b7c432c7e7aac02e90db61844b3380bf24bb76dfa69b30e32dbf767330b->enter($__internal_673e6b7c432c7e7aac02e90db61844b3380bf24bb76dfa69b30e32dbf767330b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_dc630c42b0ca95a07e97d53a0f77168263438df0cff118de4a377e6191891721->leave($__internal_dc630c42b0ca95a07e97d53a0f77168263438df0cff118de4a377e6191891721_prof);

        
        $__internal_673e6b7c432c7e7aac02e90db61844b3380bf24bb76dfa69b30e32dbf767330b->leave($__internal_673e6b7c432c7e7aac02e90db61844b3380bf24bb76dfa69b30e32dbf767330b_prof);

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

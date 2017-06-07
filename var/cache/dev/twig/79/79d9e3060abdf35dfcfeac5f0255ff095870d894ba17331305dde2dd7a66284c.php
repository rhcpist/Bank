<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_393118274fa2488926f08557dda6d00e35466a73e992ef56ae294cc0645eecda extends Twig_Template
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
        $__internal_0cdb1d92ba4c8b5001fccd3150623ea1e363e2d3147efdd3cb5587c9da48c2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdb1d92ba4c8b5001fccd3150623ea1e363e2d3147efdd3cb5587c9da48c2ae->enter($__internal_0cdb1d92ba4c8b5001fccd3150623ea1e363e2d3147efdd3cb5587c9da48c2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c7e7684b70f1e7c29bfbf097c2e7a4c9d130554da08376f6ef65c126b309c4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e7684b70f1e7c29bfbf097c2e7a4c9d130554da08376f6ef65c126b309c4fb->enter($__internal_c7e7684b70f1e7c29bfbf097c2e7a4c9d130554da08376f6ef65c126b309c4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0cdb1d92ba4c8b5001fccd3150623ea1e363e2d3147efdd3cb5587c9da48c2ae->leave($__internal_0cdb1d92ba4c8b5001fccd3150623ea1e363e2d3147efdd3cb5587c9da48c2ae_prof);

        
        $__internal_c7e7684b70f1e7c29bfbf097c2e7a4c9d130554da08376f6ef65c126b309c4fb->leave($__internal_c7e7684b70f1e7c29bfbf097c2e7a4c9d130554da08376f6ef65c126b309c4fb_prof);

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

<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d529913c9c13e818e6ca281e0170ed902156c999d1a7f4d42f87f76426e45045 extends Twig_Template
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
        $__internal_c8cc9d5a96a507ffb56259c6d9f70330af320a545db8613f9aeea69c563a96b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8cc9d5a96a507ffb56259c6d9f70330af320a545db8613f9aeea69c563a96b4->enter($__internal_c8cc9d5a96a507ffb56259c6d9f70330af320a545db8613f9aeea69c563a96b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f7ca6b7321743462880aca78d0fda2e8dc135b3f802ecadb4ef9f111859a0ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ca6b7321743462880aca78d0fda2e8dc135b3f802ecadb4ef9f111859a0ecd->enter($__internal_f7ca6b7321743462880aca78d0fda2e8dc135b3f802ecadb4ef9f111859a0ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c8cc9d5a96a507ffb56259c6d9f70330af320a545db8613f9aeea69c563a96b4->leave($__internal_c8cc9d5a96a507ffb56259c6d9f70330af320a545db8613f9aeea69c563a96b4_prof);

        
        $__internal_f7ca6b7321743462880aca78d0fda2e8dc135b3f802ecadb4ef9f111859a0ecd->leave($__internal_f7ca6b7321743462880aca78d0fda2e8dc135b3f802ecadb4ef9f111859a0ecd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

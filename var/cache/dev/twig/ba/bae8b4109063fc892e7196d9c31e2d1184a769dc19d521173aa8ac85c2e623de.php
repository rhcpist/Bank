<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3349b48b0a177373cef751f7e357f31fe985e25cf1f51ca296a7f7f3cdc38c25 extends Twig_Template
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
        $__internal_400cb8cdc12aa25e8569d1dc38a0cc6ba0e487dd6979a534b379d899c5407d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400cb8cdc12aa25e8569d1dc38a0cc6ba0e487dd6979a534b379d899c5407d7f->enter($__internal_400cb8cdc12aa25e8569d1dc38a0cc6ba0e487dd6979a534b379d899c5407d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_3562cdabf8219f67ab54c65c975819a708d3d969aa05f61dcd528f9a0c5e28e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3562cdabf8219f67ab54c65c975819a708d3d969aa05f61dcd528f9a0c5e28e7->enter($__internal_3562cdabf8219f67ab54c65c975819a708d3d969aa05f61dcd528f9a0c5e28e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_400cb8cdc12aa25e8569d1dc38a0cc6ba0e487dd6979a534b379d899c5407d7f->leave($__internal_400cb8cdc12aa25e8569d1dc38a0cc6ba0e487dd6979a534b379d899c5407d7f_prof);

        
        $__internal_3562cdabf8219f67ab54c65c975819a708d3d969aa05f61dcd528f9a0c5e28e7->leave($__internal_3562cdabf8219f67ab54c65c975819a708d3d969aa05f61dcd528f9a0c5e28e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

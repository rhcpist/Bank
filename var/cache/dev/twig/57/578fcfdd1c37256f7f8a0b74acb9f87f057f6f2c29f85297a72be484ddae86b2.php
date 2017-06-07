<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_3cc123541ab4fe7af303a589029ba0458e4ed4e3ddfe5b3d7e738623bdf0918e extends Twig_Template
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
        $__internal_df9a8acbf6ac9189f863f3f8a5dcdddd3fdba838ed552b4b21bd5d5bf434c5d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9a8acbf6ac9189f863f3f8a5dcdddd3fdba838ed552b4b21bd5d5bf434c5d0->enter($__internal_df9a8acbf6ac9189f863f3f8a5dcdddd3fdba838ed552b4b21bd5d5bf434c5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2bf3e430034f9cc772d3291dbb9ec29ecec57f400abc02d439b95b997b3c2c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf3e430034f9cc772d3291dbb9ec29ecec57f400abc02d439b95b997b3c2c35->enter($__internal_2bf3e430034f9cc772d3291dbb9ec29ecec57f400abc02d439b95b997b3c2c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_df9a8acbf6ac9189f863f3f8a5dcdddd3fdba838ed552b4b21bd5d5bf434c5d0->leave($__internal_df9a8acbf6ac9189f863f3f8a5dcdddd3fdba838ed552b4b21bd5d5bf434c5d0_prof);

        
        $__internal_2bf3e430034f9cc772d3291dbb9ec29ecec57f400abc02d439b95b997b3c2c35->leave($__internal_2bf3e430034f9cc772d3291dbb9ec29ecec57f400abc02d439b95b997b3c2c35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

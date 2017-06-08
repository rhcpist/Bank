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
        $__internal_3fae704956ef13e7473f2f103ca36dae497f04e97ae9fa9c074ce190b4fdd51f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fae704956ef13e7473f2f103ca36dae497f04e97ae9fa9c074ce190b4fdd51f->enter($__internal_3fae704956ef13e7473f2f103ca36dae497f04e97ae9fa9c074ce190b4fdd51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_cfec18daeda238182cc99d987e31663b2be998d137f3ee59b35c537c6a5b5376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfec18daeda238182cc99d987e31663b2be998d137f3ee59b35c537c6a5b5376->enter($__internal_cfec18daeda238182cc99d987e31663b2be998d137f3ee59b35c537c6a5b5376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3fae704956ef13e7473f2f103ca36dae497f04e97ae9fa9c074ce190b4fdd51f->leave($__internal_3fae704956ef13e7473f2f103ca36dae497f04e97ae9fa9c074ce190b4fdd51f_prof);

        
        $__internal_cfec18daeda238182cc99d987e31663b2be998d137f3ee59b35c537c6a5b5376->leave($__internal_cfec18daeda238182cc99d987e31663b2be998d137f3ee59b35c537c6a5b5376_prof);

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

<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_858b06542bdc7031a028eb06ae337d41456d6838b252d74aff6d7da65a8a5c48 extends Twig_Template
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
        $__internal_406bbe5e24297d51b901f2b63fc4a15f5bcc44ce343294248bd43ba4b7243594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406bbe5e24297d51b901f2b63fc4a15f5bcc44ce343294248bd43ba4b7243594->enter($__internal_406bbe5e24297d51b901f2b63fc4a15f5bcc44ce343294248bd43ba4b7243594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ec9de00fe10cccc3cf2b852c14f3f25e5c750aafdfa01c6c8578919e375f3946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9de00fe10cccc3cf2b852c14f3f25e5c750aafdfa01c6c8578919e375f3946->enter($__internal_ec9de00fe10cccc3cf2b852c14f3f25e5c750aafdfa01c6c8578919e375f3946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_406bbe5e24297d51b901f2b63fc4a15f5bcc44ce343294248bd43ba4b7243594->leave($__internal_406bbe5e24297d51b901f2b63fc4a15f5bcc44ce343294248bd43ba4b7243594_prof);

        
        $__internal_ec9de00fe10cccc3cf2b852c14f3f25e5c750aafdfa01c6c8578919e375f3946->leave($__internal_ec9de00fe10cccc3cf2b852c14f3f25e5c750aafdfa01c6c8578919e375f3946_prof);

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

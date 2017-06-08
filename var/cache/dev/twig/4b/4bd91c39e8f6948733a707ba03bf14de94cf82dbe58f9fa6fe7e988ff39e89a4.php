<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d23fc62807a495928976c096986eee54c009a98864308dc736d870b96192c27c extends Twig_Template
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
        $__internal_ad57fb4933997146ab4542d5e029d0f9e70f2a89f74877b0c201404d67a459ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad57fb4933997146ab4542d5e029d0f9e70f2a89f74877b0c201404d67a459ad->enter($__internal_ad57fb4933997146ab4542d5e029d0f9e70f2a89f74877b0c201404d67a459ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4dd3ccf196c9319a146500c01cb28df9afc1707530353093fa156bcc8b70d5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd3ccf196c9319a146500c01cb28df9afc1707530353093fa156bcc8b70d5ce->enter($__internal_4dd3ccf196c9319a146500c01cb28df9afc1707530353093fa156bcc8b70d5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ad57fb4933997146ab4542d5e029d0f9e70f2a89f74877b0c201404d67a459ad->leave($__internal_ad57fb4933997146ab4542d5e029d0f9e70f2a89f74877b0c201404d67a459ad_prof);

        
        $__internal_4dd3ccf196c9319a146500c01cb28df9afc1707530353093fa156bcc8b70d5ce->leave($__internal_4dd3ccf196c9319a146500c01cb28df9afc1707530353093fa156bcc8b70d5ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

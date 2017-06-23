<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d93d8fd393a4f0c2bc03935b6ce68e4ccab0ceed64b4f40658e6cf9343c9523d extends Twig_Template
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
        $__internal_dfe692a7253ca0feae388c84a32dc7c70521238cda8c07910210f3fbcc67e19c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe692a7253ca0feae388c84a32dc7c70521238cda8c07910210f3fbcc67e19c->enter($__internal_dfe692a7253ca0feae388c84a32dc7c70521238cda8c07910210f3fbcc67e19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9f8d96c4ac1580b76ec3a6ccdbb233237fbfa73111dc33654d4b7462cebc5b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8d96c4ac1580b76ec3a6ccdbb233237fbfa73111dc33654d4b7462cebc5b06->enter($__internal_9f8d96c4ac1580b76ec3a6ccdbb233237fbfa73111dc33654d4b7462cebc5b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_dfe692a7253ca0feae388c84a32dc7c70521238cda8c07910210f3fbcc67e19c->leave($__internal_dfe692a7253ca0feae388c84a32dc7c70521238cda8c07910210f3fbcc67e19c_prof);

        
        $__internal_9f8d96c4ac1580b76ec3a6ccdbb233237fbfa73111dc33654d4b7462cebc5b06->leave($__internal_9f8d96c4ac1580b76ec3a6ccdbb233237fbfa73111dc33654d4b7462cebc5b06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

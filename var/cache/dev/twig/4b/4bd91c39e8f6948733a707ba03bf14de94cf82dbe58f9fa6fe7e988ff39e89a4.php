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
        $__internal_a07a654e6a422a551b47c34220e954d95add75bfb6db770d32e5acce27555371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07a654e6a422a551b47c34220e954d95add75bfb6db770d32e5acce27555371->enter($__internal_a07a654e6a422a551b47c34220e954d95add75bfb6db770d32e5acce27555371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c37e0b5c9f988dcbb8ec8c50ca5bdaf1d109f94db62f5b0964f73f84249d5bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37e0b5c9f988dcbb8ec8c50ca5bdaf1d109f94db62f5b0964f73f84249d5bff->enter($__internal_c37e0b5c9f988dcbb8ec8c50ca5bdaf1d109f94db62f5b0964f73f84249d5bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a07a654e6a422a551b47c34220e954d95add75bfb6db770d32e5acce27555371->leave($__internal_a07a654e6a422a551b47c34220e954d95add75bfb6db770d32e5acce27555371_prof);

        
        $__internal_c37e0b5c9f988dcbb8ec8c50ca5bdaf1d109f94db62f5b0964f73f84249d5bff->leave($__internal_c37e0b5c9f988dcbb8ec8c50ca5bdaf1d109f94db62f5b0964f73f84249d5bff_prof);

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

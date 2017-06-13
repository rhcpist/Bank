<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c8e07ca3f11b5c78d674d9ab41ed72c46651034374f282d7a340b0701a6c0477 extends Twig_Template
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
        $__internal_20812b9fb25a0cfcd4bf03b2f341d1382c75b7eb468195d63408be70b691e28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20812b9fb25a0cfcd4bf03b2f341d1382c75b7eb468195d63408be70b691e28c->enter($__internal_20812b9fb25a0cfcd4bf03b2f341d1382c75b7eb468195d63408be70b691e28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0177050bf2877029d112d1bfbda32026ae5c3f126952fee619b5576822295386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0177050bf2877029d112d1bfbda32026ae5c3f126952fee619b5576822295386->enter($__internal_0177050bf2877029d112d1bfbda32026ae5c3f126952fee619b5576822295386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_20812b9fb25a0cfcd4bf03b2f341d1382c75b7eb468195d63408be70b691e28c->leave($__internal_20812b9fb25a0cfcd4bf03b2f341d1382c75b7eb468195d63408be70b691e28c_prof);

        
        $__internal_0177050bf2877029d112d1bfbda32026ae5c3f126952fee619b5576822295386->leave($__internal_0177050bf2877029d112d1bfbda32026ae5c3f126952fee619b5576822295386_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

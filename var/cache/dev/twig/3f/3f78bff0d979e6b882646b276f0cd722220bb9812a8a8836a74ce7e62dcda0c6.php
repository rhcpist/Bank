<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_53e3ec17deaf3e807ff6788d98b0f6a510c11af9f5c061221bf78e87e06bffc5 extends Twig_Template
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
        $__internal_9f65dcbd26a17cf42fd65fdcfa29922ce6445c950571c13d6ecee83a2bc43326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f65dcbd26a17cf42fd65fdcfa29922ce6445c950571c13d6ecee83a2bc43326->enter($__internal_9f65dcbd26a17cf42fd65fdcfa29922ce6445c950571c13d6ecee83a2bc43326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_763d4e5bbaabebc024a7226f169d340443dcece90f072699475083c176069258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763d4e5bbaabebc024a7226f169d340443dcece90f072699475083c176069258->enter($__internal_763d4e5bbaabebc024a7226f169d340443dcece90f072699475083c176069258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9f65dcbd26a17cf42fd65fdcfa29922ce6445c950571c13d6ecee83a2bc43326->leave($__internal_9f65dcbd26a17cf42fd65fdcfa29922ce6445c950571c13d6ecee83a2bc43326_prof);

        
        $__internal_763d4e5bbaabebc024a7226f169d340443dcece90f072699475083c176069258->leave($__internal_763d4e5bbaabebc024a7226f169d340443dcece90f072699475083c176069258_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

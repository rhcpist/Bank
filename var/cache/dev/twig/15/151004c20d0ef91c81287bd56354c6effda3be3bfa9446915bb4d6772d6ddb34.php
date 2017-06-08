<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_004fd4ab90607e5067e5262ea7ed5eff455bb4aec84daa70cfe25ec37267effc extends Twig_Template
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
        $__internal_07fca52831215a248f77647f5f269a0a0823defd7465d927c60fd53f742d56f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fca52831215a248f77647f5f269a0a0823defd7465d927c60fd53f742d56f8->enter($__internal_07fca52831215a248f77647f5f269a0a0823defd7465d927c60fd53f742d56f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_fc5e64af4219361fba8793482a2cae6fa4f1d934cfd08a4e0b2229af2dd77dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5e64af4219361fba8793482a2cae6fa4f1d934cfd08a4e0b2229af2dd77dbe->enter($__internal_fc5e64af4219361fba8793482a2cae6fa4f1d934cfd08a4e0b2229af2dd77dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_07fca52831215a248f77647f5f269a0a0823defd7465d927c60fd53f742d56f8->leave($__internal_07fca52831215a248f77647f5f269a0a0823defd7465d927c60fd53f742d56f8_prof);

        
        $__internal_fc5e64af4219361fba8793482a2cae6fa4f1d934cfd08a4e0b2229af2dd77dbe->leave($__internal_fc5e64af4219361fba8793482a2cae6fa4f1d934cfd08a4e0b2229af2dd77dbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

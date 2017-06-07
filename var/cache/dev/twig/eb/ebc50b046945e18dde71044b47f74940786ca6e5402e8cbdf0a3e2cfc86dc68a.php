<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_532a31de885aa8c21bbc2d92dce2d6bee583cc5530570ea153b00e0a09e28884 extends Twig_Template
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
        $__internal_d88fa48e344979641a0c676464e4b0f8af5a0785baadf69c007aa8633e3e620a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88fa48e344979641a0c676464e4b0f8af5a0785baadf69c007aa8633e3e620a->enter($__internal_d88fa48e344979641a0c676464e4b0f8af5a0785baadf69c007aa8633e3e620a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1ae96af3ed525773f3266d7f38f7bbd0949e0c0b51a9ae5f93f210c4ccdf3578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae96af3ed525773f3266d7f38f7bbd0949e0c0b51a9ae5f93f210c4ccdf3578->enter($__internal_1ae96af3ed525773f3266d7f38f7bbd0949e0c0b51a9ae5f93f210c4ccdf3578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d88fa48e344979641a0c676464e4b0f8af5a0785baadf69c007aa8633e3e620a->leave($__internal_d88fa48e344979641a0c676464e4b0f8af5a0785baadf69c007aa8633e3e620a_prof);

        
        $__internal_1ae96af3ed525773f3266d7f38f7bbd0949e0c0b51a9ae5f93f210c4ccdf3578->leave($__internal_1ae96af3ed525773f3266d7f38f7bbd0949e0c0b51a9ae5f93f210c4ccdf3578_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}

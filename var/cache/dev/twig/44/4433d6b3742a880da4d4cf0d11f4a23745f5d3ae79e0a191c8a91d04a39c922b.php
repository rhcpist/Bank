<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9c4c487d4f4a92a8a6e589283a66b34b1f67200ef5d660e02030aa42157bb4cd extends Twig_Template
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
        $__internal_1f4975e5546463913b415e8aea5094ea32bac75ce1d648cef8006bb2b1b1fd05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4975e5546463913b415e8aea5094ea32bac75ce1d648cef8006bb2b1b1fd05->enter($__internal_1f4975e5546463913b415e8aea5094ea32bac75ce1d648cef8006bb2b1b1fd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7cd901f304ba6d6e0d42c32a2d86609ff9119e55dcf0f34a431bb9a24014d0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd901f304ba6d6e0d42c32a2d86609ff9119e55dcf0f34a431bb9a24014d0e0->enter($__internal_7cd901f304ba6d6e0d42c32a2d86609ff9119e55dcf0f34a431bb9a24014d0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1f4975e5546463913b415e8aea5094ea32bac75ce1d648cef8006bb2b1b1fd05->leave($__internal_1f4975e5546463913b415e8aea5094ea32bac75ce1d648cef8006bb2b1b1fd05_prof);

        
        $__internal_7cd901f304ba6d6e0d42c32a2d86609ff9119e55dcf0f34a431bb9a24014d0e0->leave($__internal_7cd901f304ba6d6e0d42c32a2d86609ff9119e55dcf0f34a431bb9a24014d0e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

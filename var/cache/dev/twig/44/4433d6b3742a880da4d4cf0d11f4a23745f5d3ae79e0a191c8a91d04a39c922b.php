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
        $__internal_39d7a2c632f8536a7804f5ba7991e359339d2753c66238369e272823e5a5e055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d7a2c632f8536a7804f5ba7991e359339d2753c66238369e272823e5a5e055->enter($__internal_39d7a2c632f8536a7804f5ba7991e359339d2753c66238369e272823e5a5e055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6bec2b178bac3d98950e07ec251f2ac9cbe36f803b6f1e841adc3faeb6b43407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bec2b178bac3d98950e07ec251f2ac9cbe36f803b6f1e841adc3faeb6b43407->enter($__internal_6bec2b178bac3d98950e07ec251f2ac9cbe36f803b6f1e841adc3faeb6b43407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_39d7a2c632f8536a7804f5ba7991e359339d2753c66238369e272823e5a5e055->leave($__internal_39d7a2c632f8536a7804f5ba7991e359339d2753c66238369e272823e5a5e055_prof);

        
        $__internal_6bec2b178bac3d98950e07ec251f2ac9cbe36f803b6f1e841adc3faeb6b43407->leave($__internal_6bec2b178bac3d98950e07ec251f2ac9cbe36f803b6f1e841adc3faeb6b43407_prof);

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

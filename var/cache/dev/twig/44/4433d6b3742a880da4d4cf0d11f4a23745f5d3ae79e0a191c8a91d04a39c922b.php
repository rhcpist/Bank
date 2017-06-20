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
        $__internal_14292c638cf4aea236cc0902a8664775740fdf665915f0feec3ab21277baa27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14292c638cf4aea236cc0902a8664775740fdf665915f0feec3ab21277baa27e->enter($__internal_14292c638cf4aea236cc0902a8664775740fdf665915f0feec3ab21277baa27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_ceb8936dac0add699a9dc14dbfa6b1016724a62e123ba5947ccec2c35794c480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb8936dac0add699a9dc14dbfa6b1016724a62e123ba5947ccec2c35794c480->enter($__internal_ceb8936dac0add699a9dc14dbfa6b1016724a62e123ba5947ccec2c35794c480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_14292c638cf4aea236cc0902a8664775740fdf665915f0feec3ab21277baa27e->leave($__internal_14292c638cf4aea236cc0902a8664775740fdf665915f0feec3ab21277baa27e_prof);

        
        $__internal_ceb8936dac0add699a9dc14dbfa6b1016724a62e123ba5947ccec2c35794c480->leave($__internal_ceb8936dac0add699a9dc14dbfa6b1016724a62e123ba5947ccec2c35794c480_prof);

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

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
        $__internal_544ff058bd4f35f03cc24279cde6ccc28737bb030d7b2c640e40a3a5634da1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544ff058bd4f35f03cc24279cde6ccc28737bb030d7b2c640e40a3a5634da1ac->enter($__internal_544ff058bd4f35f03cc24279cde6ccc28737bb030d7b2c640e40a3a5634da1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c6571fb6ec14a9eb649648da8acd0283a0ce59b99446133fca156b6b0b9cd4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6571fb6ec14a9eb649648da8acd0283a0ce59b99446133fca156b6b0b9cd4e9->enter($__internal_c6571fb6ec14a9eb649648da8acd0283a0ce59b99446133fca156b6b0b9cd4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_544ff058bd4f35f03cc24279cde6ccc28737bb030d7b2c640e40a3a5634da1ac->leave($__internal_544ff058bd4f35f03cc24279cde6ccc28737bb030d7b2c640e40a3a5634da1ac_prof);

        
        $__internal_c6571fb6ec14a9eb649648da8acd0283a0ce59b99446133fca156b6b0b9cd4e9->leave($__internal_c6571fb6ec14a9eb649648da8acd0283a0ce59b99446133fca156b6b0b9cd4e9_prof);

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

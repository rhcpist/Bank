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
        $__internal_33d9152b49e660f862930f1291fd1d60a9f825b1c617fe95789ff8563056d8b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d9152b49e660f862930f1291fd1d60a9f825b1c617fe95789ff8563056d8b9->enter($__internal_33d9152b49e660f862930f1291fd1d60a9f825b1c617fe95789ff8563056d8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3e3ffbe70b1fedbb0b6b876ebc2159489663434d93bab0749677a481654981d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3ffbe70b1fedbb0b6b876ebc2159489663434d93bab0749677a481654981d1->enter($__internal_3e3ffbe70b1fedbb0b6b876ebc2159489663434d93bab0749677a481654981d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_33d9152b49e660f862930f1291fd1d60a9f825b1c617fe95789ff8563056d8b9->leave($__internal_33d9152b49e660f862930f1291fd1d60a9f825b1c617fe95789ff8563056d8b9_prof);

        
        $__internal_3e3ffbe70b1fedbb0b6b876ebc2159489663434d93bab0749677a481654981d1->leave($__internal_3e3ffbe70b1fedbb0b6b876ebc2159489663434d93bab0749677a481654981d1_prof);

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

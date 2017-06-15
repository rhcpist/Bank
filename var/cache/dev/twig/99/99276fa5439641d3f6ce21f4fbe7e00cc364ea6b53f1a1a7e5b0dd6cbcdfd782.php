<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_80650097a53f126aaeec75855e5362370decc42f07e12e41e8de700da42f904d extends Twig_Template
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
        $__internal_d70ffa89a404224f8f28618e995755bcbc6032c695e880f4b25e175738edc0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70ffa89a404224f8f28618e995755bcbc6032c695e880f4b25e175738edc0fe->enter($__internal_d70ffa89a404224f8f28618e995755bcbc6032c695e880f4b25e175738edc0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_de28853341b72714930ea673e68e1d436d194972602375b916519ad0f73895a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de28853341b72714930ea673e68e1d436d194972602375b916519ad0f73895a8->enter($__internal_de28853341b72714930ea673e68e1d436d194972602375b916519ad0f73895a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d70ffa89a404224f8f28618e995755bcbc6032c695e880f4b25e175738edc0fe->leave($__internal_d70ffa89a404224f8f28618e995755bcbc6032c695e880f4b25e175738edc0fe_prof);

        
        $__internal_de28853341b72714930ea673e68e1d436d194972602375b916519ad0f73895a8->leave($__internal_de28853341b72714930ea673e68e1d436d194972602375b916519ad0f73895a8_prof);

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

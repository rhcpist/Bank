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
        $__internal_145a19765b4e9b68afb097ea57f71241cf567eff4b65ac88aca788d4efdbb6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145a19765b4e9b68afb097ea57f71241cf567eff4b65ac88aca788d4efdbb6ee->enter($__internal_145a19765b4e9b68afb097ea57f71241cf567eff4b65ac88aca788d4efdbb6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b87320803a235ad412d14d6988f23fa44351151598621dddcdb96b1224716cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87320803a235ad412d14d6988f23fa44351151598621dddcdb96b1224716cd3->enter($__internal_b87320803a235ad412d14d6988f23fa44351151598621dddcdb96b1224716cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_145a19765b4e9b68afb097ea57f71241cf567eff4b65ac88aca788d4efdbb6ee->leave($__internal_145a19765b4e9b68afb097ea57f71241cf567eff4b65ac88aca788d4efdbb6ee_prof);

        
        $__internal_b87320803a235ad412d14d6988f23fa44351151598621dddcdb96b1224716cd3->leave($__internal_b87320803a235ad412d14d6988f23fa44351151598621dddcdb96b1224716cd3_prof);

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

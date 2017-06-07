<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c67cfab3c3ed4999efcf069fa488f764b27aabf5d9d5ce76f1b8b86f8cd6b540 extends Twig_Template
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
        $__internal_74555a40d35af8a25ee50c57e7d546e9ac6605fff5a413aa6889803ac470fba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74555a40d35af8a25ee50c57e7d546e9ac6605fff5a413aa6889803ac470fba1->enter($__internal_74555a40d35af8a25ee50c57e7d546e9ac6605fff5a413aa6889803ac470fba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b616b7348a0b47076e9bbfd821117c89dd5d0137fbf8c324d8a2ad0dab7d6aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b616b7348a0b47076e9bbfd821117c89dd5d0137fbf8c324d8a2ad0dab7d6aba->enter($__internal_b616b7348a0b47076e9bbfd821117c89dd5d0137fbf8c324d8a2ad0dab7d6aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_74555a40d35af8a25ee50c57e7d546e9ac6605fff5a413aa6889803ac470fba1->leave($__internal_74555a40d35af8a25ee50c57e7d546e9ac6605fff5a413aa6889803ac470fba1_prof);

        
        $__internal_b616b7348a0b47076e9bbfd821117c89dd5d0137fbf8c324d8a2ad0dab7d6aba->leave($__internal_b616b7348a0b47076e9bbfd821117c89dd5d0137fbf8c324d8a2ad0dab7d6aba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

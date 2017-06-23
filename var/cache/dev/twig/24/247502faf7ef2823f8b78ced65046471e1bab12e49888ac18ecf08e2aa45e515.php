<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_250582df510f84be4b7f35e4d72b8e5641dbd128591e60b522184c370cfdbc49 extends Twig_Template
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
        $__internal_8d76d9cae0c51dcdd37c5c9cd23ef0673a4930d75694244fc46d6b469854fe86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d76d9cae0c51dcdd37c5c9cd23ef0673a4930d75694244fc46d6b469854fe86->enter($__internal_8d76d9cae0c51dcdd37c5c9cd23ef0673a4930d75694244fc46d6b469854fe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_45179411b88a4c5c231907cc2181efbdd5a0e722ac82c7b1b8adb8613058e428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45179411b88a4c5c231907cc2181efbdd5a0e722ac82c7b1b8adb8613058e428->enter($__internal_45179411b88a4c5c231907cc2181efbdd5a0e722ac82c7b1b8adb8613058e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_8d76d9cae0c51dcdd37c5c9cd23ef0673a4930d75694244fc46d6b469854fe86->leave($__internal_8d76d9cae0c51dcdd37c5c9cd23ef0673a4930d75694244fc46d6b469854fe86_prof);

        
        $__internal_45179411b88a4c5c231907cc2181efbdd5a0e722ac82c7b1b8adb8613058e428->leave($__internal_45179411b88a4c5c231907cc2181efbdd5a0e722ac82c7b1b8adb8613058e428_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}

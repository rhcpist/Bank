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
        $__internal_88c8cc4b83404f343e2a398f35c2f4ce25deb7861e2b8007568bc08a42f654c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c8cc4b83404f343e2a398f35c2f4ce25deb7861e2b8007568bc08a42f654c0->enter($__internal_88c8cc4b83404f343e2a398f35c2f4ce25deb7861e2b8007568bc08a42f654c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_e4faf182b99f0f8d54b3c1f288acecfa6005fd2be06c64385d792fb0ea3c3e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4faf182b99f0f8d54b3c1f288acecfa6005fd2be06c64385d792fb0ea3c3e28->enter($__internal_e4faf182b99f0f8d54b3c1f288acecfa6005fd2be06c64385d792fb0ea3c3e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_88c8cc4b83404f343e2a398f35c2f4ce25deb7861e2b8007568bc08a42f654c0->leave($__internal_88c8cc4b83404f343e2a398f35c2f4ce25deb7861e2b8007568bc08a42f654c0_prof);

        
        $__internal_e4faf182b99f0f8d54b3c1f288acecfa6005fd2be06c64385d792fb0ea3c3e28->leave($__internal_e4faf182b99f0f8d54b3c1f288acecfa6005fd2be06c64385d792fb0ea3c3e28_prof);

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

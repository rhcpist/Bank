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
        $__internal_6f8af35f9fa0d00e60a1e65862486092aa376df3e5c59129d06c609ab2ba381a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8af35f9fa0d00e60a1e65862486092aa376df3e5c59129d06c609ab2ba381a->enter($__internal_6f8af35f9fa0d00e60a1e65862486092aa376df3e5c59129d06c609ab2ba381a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_f469670a91896b28b0141adef36b8fbc386e2d2b842ee0868d7dd84d348ab504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f469670a91896b28b0141adef36b8fbc386e2d2b842ee0868d7dd84d348ab504->enter($__internal_f469670a91896b28b0141adef36b8fbc386e2d2b842ee0868d7dd84d348ab504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_6f8af35f9fa0d00e60a1e65862486092aa376df3e5c59129d06c609ab2ba381a->leave($__internal_6f8af35f9fa0d00e60a1e65862486092aa376df3e5c59129d06c609ab2ba381a_prof);

        
        $__internal_f469670a91896b28b0141adef36b8fbc386e2d2b842ee0868d7dd84d348ab504->leave($__internal_f469670a91896b28b0141adef36b8fbc386e2d2b842ee0868d7dd84d348ab504_prof);

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

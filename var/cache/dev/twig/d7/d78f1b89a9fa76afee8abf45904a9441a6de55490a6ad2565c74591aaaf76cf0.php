<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c1c41f5729bf1bbab0e561e4d4d1733b3bd4ff4e260e20ecb6da9cfde79c0b66 extends Twig_Template
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
        $__internal_2190ca1e1ccd921c7c0b933a182271bbed6dee69abcd9a7238ba14a47d229162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2190ca1e1ccd921c7c0b933a182271bbed6dee69abcd9a7238ba14a47d229162->enter($__internal_2190ca1e1ccd921c7c0b933a182271bbed6dee69abcd9a7238ba14a47d229162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8a67d8c538b65bb72f5db4d43f96f3505704c42340143dbf2915d4b26a9963db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a67d8c538b65bb72f5db4d43f96f3505704c42340143dbf2915d4b26a9963db->enter($__internal_8a67d8c538b65bb72f5db4d43f96f3505704c42340143dbf2915d4b26a9963db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2190ca1e1ccd921c7c0b933a182271bbed6dee69abcd9a7238ba14a47d229162->leave($__internal_2190ca1e1ccd921c7c0b933a182271bbed6dee69abcd9a7238ba14a47d229162_prof);

        
        $__internal_8a67d8c538b65bb72f5db4d43f96f3505704c42340143dbf2915d4b26a9963db->leave($__internal_8a67d8c538b65bb72f5db4d43f96f3505704c42340143dbf2915d4b26a9963db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

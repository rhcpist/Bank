<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5d42a085bdf3a4c0220f51a48ab07044cd987414d8df350f0bceff8f8359ef7e extends Twig_Template
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
        $__internal_787cf3bd5e708ab932a72a38cc9223575f73a87a4c06a43ab9a4b9b2920973f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787cf3bd5e708ab932a72a38cc9223575f73a87a4c06a43ab9a4b9b2920973f7->enter($__internal_787cf3bd5e708ab932a72a38cc9223575f73a87a4c06a43ab9a4b9b2920973f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e3b8cf97f5fdd24bbee8f3184e7542c82c03b42fea38b4eb7459783184c93d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b8cf97f5fdd24bbee8f3184e7542c82c03b42fea38b4eb7459783184c93d30->enter($__internal_e3b8cf97f5fdd24bbee8f3184e7542c82c03b42fea38b4eb7459783184c93d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_787cf3bd5e708ab932a72a38cc9223575f73a87a4c06a43ab9a4b9b2920973f7->leave($__internal_787cf3bd5e708ab932a72a38cc9223575f73a87a4c06a43ab9a4b9b2920973f7_prof);

        
        $__internal_e3b8cf97f5fdd24bbee8f3184e7542c82c03b42fea38b4eb7459783184c93d30->leave($__internal_e3b8cf97f5fdd24bbee8f3184e7542c82c03b42fea38b4eb7459783184c93d30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

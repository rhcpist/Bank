<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e8911517946b7b5fc0c39a0484a2e12193e218bdbdcae3edc56769820da6b4e2 extends Twig_Template
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
        $__internal_781cc95c86222c87a913602cffbb79971010549ee6c6b4d55b3011d1bf61db45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781cc95c86222c87a913602cffbb79971010549ee6c6b4d55b3011d1bf61db45->enter($__internal_781cc95c86222c87a913602cffbb79971010549ee6c6b4d55b3011d1bf61db45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4a512d682842bb12ebcae6c8b5c0c813f7d5d18955e5f83b815edf5f114dece3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a512d682842bb12ebcae6c8b5c0c813f7d5d18955e5f83b815edf5f114dece3->enter($__internal_4a512d682842bb12ebcae6c8b5c0c813f7d5d18955e5f83b815edf5f114dece3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_781cc95c86222c87a913602cffbb79971010549ee6c6b4d55b3011d1bf61db45->leave($__internal_781cc95c86222c87a913602cffbb79971010549ee6c6b4d55b3011d1bf61db45_prof);

        
        $__internal_4a512d682842bb12ebcae6c8b5c0c813f7d5d18955e5f83b815edf5f114dece3->leave($__internal_4a512d682842bb12ebcae6c8b5c0c813f7d5d18955e5f83b815edf5f114dece3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

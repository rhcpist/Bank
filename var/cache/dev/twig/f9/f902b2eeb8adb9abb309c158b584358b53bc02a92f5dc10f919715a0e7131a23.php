<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_25041fdfb88ae87d47823f15f49dd96ec62a3d8e18ca5736e209f63c244ec4ad extends Twig_Template
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
        $__internal_0e9538dded4728745affc343fabe4bb32ef29247e646b7410f551b47dce07773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9538dded4728745affc343fabe4bb32ef29247e646b7410f551b47dce07773->enter($__internal_0e9538dded4728745affc343fabe4bb32ef29247e646b7410f551b47dce07773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_55d253caba29ac227db9a328c9c612c491e70ad940cc15a8236ba2d2438f1925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d253caba29ac227db9a328c9c612c491e70ad940cc15a8236ba2d2438f1925->enter($__internal_55d253caba29ac227db9a328c9c612c491e70ad940cc15a8236ba2d2438f1925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0e9538dded4728745affc343fabe4bb32ef29247e646b7410f551b47dce07773->leave($__internal_0e9538dded4728745affc343fabe4bb32ef29247e646b7410f551b47dce07773_prof);

        
        $__internal_55d253caba29ac227db9a328c9c612c491e70ad940cc15a8236ba2d2438f1925->leave($__internal_55d253caba29ac227db9a328c9c612c491e70ad940cc15a8236ba2d2438f1925_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

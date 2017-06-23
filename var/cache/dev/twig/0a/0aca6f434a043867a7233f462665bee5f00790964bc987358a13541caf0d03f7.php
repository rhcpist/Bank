<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3310f6802108e62a2d50c713b67dde27cbc137de197c921a077a560207b3404b extends Twig_Template
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
        $__internal_ab0c295a45205e293091076641766dacc210f1beb8c75f0a16e09c519df8426b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0c295a45205e293091076641766dacc210f1beb8c75f0a16e09c519df8426b->enter($__internal_ab0c295a45205e293091076641766dacc210f1beb8c75f0a16e09c519df8426b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bf7104faec651be297d9903a4b7c992efabe1273aea10c1d95715cf47b0187ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7104faec651be297d9903a4b7c992efabe1273aea10c1d95715cf47b0187ff->enter($__internal_bf7104faec651be297d9903a4b7c992efabe1273aea10c1d95715cf47b0187ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ab0c295a45205e293091076641766dacc210f1beb8c75f0a16e09c519df8426b->leave($__internal_ab0c295a45205e293091076641766dacc210f1beb8c75f0a16e09c519df8426b_prof);

        
        $__internal_bf7104faec651be297d9903a4b7c992efabe1273aea10c1d95715cf47b0187ff->leave($__internal_bf7104faec651be297d9903a4b7c992efabe1273aea10c1d95715cf47b0187ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

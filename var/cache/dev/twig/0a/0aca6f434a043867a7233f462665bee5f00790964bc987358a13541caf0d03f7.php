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
        $__internal_784de5f0e45db8c9e03a895e3eeb2ddce237810cff9a489e447ae5ce147f6ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_784de5f0e45db8c9e03a895e3eeb2ddce237810cff9a489e447ae5ce147f6ce0->enter($__internal_784de5f0e45db8c9e03a895e3eeb2ddce237810cff9a489e447ae5ce147f6ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f5859f9adfa06d620a0cd1654b1025c520b77f1f626d6b2c0e2e57f75e723a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5859f9adfa06d620a0cd1654b1025c520b77f1f626d6b2c0e2e57f75e723a2c->enter($__internal_f5859f9adfa06d620a0cd1654b1025c520b77f1f626d6b2c0e2e57f75e723a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_784de5f0e45db8c9e03a895e3eeb2ddce237810cff9a489e447ae5ce147f6ce0->leave($__internal_784de5f0e45db8c9e03a895e3eeb2ddce237810cff9a489e447ae5ce147f6ce0_prof);

        
        $__internal_f5859f9adfa06d620a0cd1654b1025c520b77f1f626d6b2c0e2e57f75e723a2c->leave($__internal_f5859f9adfa06d620a0cd1654b1025c520b77f1f626d6b2c0e2e57f75e723a2c_prof);

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

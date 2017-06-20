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
        $__internal_019ca7ac394eb2ae03adbcc3f49742a52b103ba57ce9486df16454a1f5e70918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019ca7ac394eb2ae03adbcc3f49742a52b103ba57ce9486df16454a1f5e70918->enter($__internal_019ca7ac394eb2ae03adbcc3f49742a52b103ba57ce9486df16454a1f5e70918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5db50a817fe5cecc7ad70d25f429f0c2ee883aa0935c6324cfa97a7f4a156437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db50a817fe5cecc7ad70d25f429f0c2ee883aa0935c6324cfa97a7f4a156437->enter($__internal_5db50a817fe5cecc7ad70d25f429f0c2ee883aa0935c6324cfa97a7f4a156437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_019ca7ac394eb2ae03adbcc3f49742a52b103ba57ce9486df16454a1f5e70918->leave($__internal_019ca7ac394eb2ae03adbcc3f49742a52b103ba57ce9486df16454a1f5e70918_prof);

        
        $__internal_5db50a817fe5cecc7ad70d25f429f0c2ee883aa0935c6324cfa97a7f4a156437->leave($__internal_5db50a817fe5cecc7ad70d25f429f0c2ee883aa0935c6324cfa97a7f4a156437_prof);

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

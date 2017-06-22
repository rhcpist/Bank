<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_194de0f2183519fe6803dfdaba666aec5f864c1d196126dc4b59ab3e761ce5b4 extends Twig_Template
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
        $__internal_8a44393887d8d0d1e5531b16df4b7e89b08822f7e7065720054b5a396e68ed95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a44393887d8d0d1e5531b16df4b7e89b08822f7e7065720054b5a396e68ed95->enter($__internal_8a44393887d8d0d1e5531b16df4b7e89b08822f7e7065720054b5a396e68ed95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ae04af07b522a7c022a0d7448134c21ccb15845f643a0ea39bbb4d3d2c776d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae04af07b522a7c022a0d7448134c21ccb15845f643a0ea39bbb4d3d2c776d55->enter($__internal_ae04af07b522a7c022a0d7448134c21ccb15845f643a0ea39bbb4d3d2c776d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8a44393887d8d0d1e5531b16df4b7e89b08822f7e7065720054b5a396e68ed95->leave($__internal_8a44393887d8d0d1e5531b16df4b7e89b08822f7e7065720054b5a396e68ed95_prof);

        
        $__internal_ae04af07b522a7c022a0d7448134c21ccb15845f643a0ea39bbb4d3d2c776d55->leave($__internal_ae04af07b522a7c022a0d7448134c21ccb15845f643a0ea39bbb4d3d2c776d55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

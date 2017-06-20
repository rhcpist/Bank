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
        $__internal_b415e4f17550300162dce0709676d6fd596becaf21eb8ff24d9545f17d72b523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b415e4f17550300162dce0709676d6fd596becaf21eb8ff24d9545f17d72b523->enter($__internal_b415e4f17550300162dce0709676d6fd596becaf21eb8ff24d9545f17d72b523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f25a60ef386d61167ea86c0b7e9a37c7ff10c0a3995305b4d4d0cd53ae6c9b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25a60ef386d61167ea86c0b7e9a37c7ff10c0a3995305b4d4d0cd53ae6c9b58->enter($__internal_f25a60ef386d61167ea86c0b7e9a37c7ff10c0a3995305b4d4d0cd53ae6c9b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b415e4f17550300162dce0709676d6fd596becaf21eb8ff24d9545f17d72b523->leave($__internal_b415e4f17550300162dce0709676d6fd596becaf21eb8ff24d9545f17d72b523_prof);

        
        $__internal_f25a60ef386d61167ea86c0b7e9a37c7ff10c0a3995305b4d4d0cd53ae6c9b58->leave($__internal_f25a60ef386d61167ea86c0b7e9a37c7ff10c0a3995305b4d4d0cd53ae6c9b58_prof);

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

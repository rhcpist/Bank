<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_625d3bdd8897e5cf9bfa792514256f71d21a1f91b52510046dc5a1a2143fb8a0 extends Twig_Template
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
        $__internal_dcc0e979600576528fa76fa24b490f8f2f0a43db6d1676f5b6d92b617663932d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc0e979600576528fa76fa24b490f8f2f0a43db6d1676f5b6d92b617663932d->enter($__internal_dcc0e979600576528fa76fa24b490f8f2f0a43db6d1676f5b6d92b617663932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_3119fdbd2d7a0cb9fd7c2937494902d7bba8055563410fd8f0853d54ccecf7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3119fdbd2d7a0cb9fd7c2937494902d7bba8055563410fd8f0853d54ccecf7a7->enter($__internal_3119fdbd2d7a0cb9fd7c2937494902d7bba8055563410fd8f0853d54ccecf7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_dcc0e979600576528fa76fa24b490f8f2f0a43db6d1676f5b6d92b617663932d->leave($__internal_dcc0e979600576528fa76fa24b490f8f2f0a43db6d1676f5b6d92b617663932d_prof);

        
        $__internal_3119fdbd2d7a0cb9fd7c2937494902d7bba8055563410fd8f0853d54ccecf7a7->leave($__internal_3119fdbd2d7a0cb9fd7c2937494902d7bba8055563410fd8f0853d54ccecf7a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

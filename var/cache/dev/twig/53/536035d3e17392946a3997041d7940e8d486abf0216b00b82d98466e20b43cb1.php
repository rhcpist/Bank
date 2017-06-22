<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d93d8fd393a4f0c2bc03935b6ce68e4ccab0ceed64b4f40658e6cf9343c9523d extends Twig_Template
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
        $__internal_f79266eceee88dc725beef3922079b0903ea4ebe0daa83ef65fd3a65f7c1baa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79266eceee88dc725beef3922079b0903ea4ebe0daa83ef65fd3a65f7c1baa0->enter($__internal_f79266eceee88dc725beef3922079b0903ea4ebe0daa83ef65fd3a65f7c1baa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_96a2f313bf9f4592e9b157a6da25f0b1ee35b830ffcab764a5112c3f0fe0476e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a2f313bf9f4592e9b157a6da25f0b1ee35b830ffcab764a5112c3f0fe0476e->enter($__internal_96a2f313bf9f4592e9b157a6da25f0b1ee35b830ffcab764a5112c3f0fe0476e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f79266eceee88dc725beef3922079b0903ea4ebe0daa83ef65fd3a65f7c1baa0->leave($__internal_f79266eceee88dc725beef3922079b0903ea4ebe0daa83ef65fd3a65f7c1baa0_prof);

        
        $__internal_96a2f313bf9f4592e9b157a6da25f0b1ee35b830ffcab764a5112c3f0fe0476e->leave($__internal_96a2f313bf9f4592e9b157a6da25f0b1ee35b830ffcab764a5112c3f0fe0476e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

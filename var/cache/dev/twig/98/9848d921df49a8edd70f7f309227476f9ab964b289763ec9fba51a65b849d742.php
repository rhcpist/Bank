<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_f3698afe01afe5cb5252ec6ee9e4fa058bd1b2301dcb95d6e90df3fd4a9f00ab extends Twig_Template
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
        $__internal_7185d7a4f97bebedb44caa0295e30a726c9de8b4b961a752c5be3a61d46b4f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7185d7a4f97bebedb44caa0295e30a726c9de8b4b961a752c5be3a61d46b4f98->enter($__internal_7185d7a4f97bebedb44caa0295e30a726c9de8b4b961a752c5be3a61d46b4f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_32db34d5df0e6dcd45dbcdcaaf5a0920ecbd26c493e5b1d978e60ec82f4cd9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32db34d5df0e6dcd45dbcdcaaf5a0920ecbd26c493e5b1d978e60ec82f4cd9e5->enter($__internal_32db34d5df0e6dcd45dbcdcaaf5a0920ecbd26c493e5b1d978e60ec82f4cd9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7185d7a4f97bebedb44caa0295e30a726c9de8b4b961a752c5be3a61d46b4f98->leave($__internal_7185d7a4f97bebedb44caa0295e30a726c9de8b4b961a752c5be3a61d46b4f98_prof);

        
        $__internal_32db34d5df0e6dcd45dbcdcaaf5a0920ecbd26c493e5b1d978e60ec82f4cd9e5->leave($__internal_32db34d5df0e6dcd45dbcdcaaf5a0920ecbd26c493e5b1d978e60ec82f4cd9e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

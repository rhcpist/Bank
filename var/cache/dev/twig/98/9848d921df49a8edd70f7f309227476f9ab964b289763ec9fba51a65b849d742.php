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
        $__internal_9293ff2a0a6b45fce979036930fd42154e14ed8e3c8d27135648f915de862e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9293ff2a0a6b45fce979036930fd42154e14ed8e3c8d27135648f915de862e1e->enter($__internal_9293ff2a0a6b45fce979036930fd42154e14ed8e3c8d27135648f915de862e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_326a2c3b90fa67286c8c3cfa326b1133428d7a468aa6362f4929d6a55acc8f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326a2c3b90fa67286c8c3cfa326b1133428d7a468aa6362f4929d6a55acc8f98->enter($__internal_326a2c3b90fa67286c8c3cfa326b1133428d7a468aa6362f4929d6a55acc8f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9293ff2a0a6b45fce979036930fd42154e14ed8e3c8d27135648f915de862e1e->leave($__internal_9293ff2a0a6b45fce979036930fd42154e14ed8e3c8d27135648f915de862e1e_prof);

        
        $__internal_326a2c3b90fa67286c8c3cfa326b1133428d7a468aa6362f4929d6a55acc8f98->leave($__internal_326a2c3b90fa67286c8c3cfa326b1133428d7a468aa6362f4929d6a55acc8f98_prof);

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

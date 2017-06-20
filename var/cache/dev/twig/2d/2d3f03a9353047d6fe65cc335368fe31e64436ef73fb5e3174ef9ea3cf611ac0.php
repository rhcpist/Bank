<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d529913c9c13e818e6ca281e0170ed902156c999d1a7f4d42f87f76426e45045 extends Twig_Template
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
        $__internal_728555d015e5a238b147f266c2329b6e673a4db5ed780e0f84df3fad44d23bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728555d015e5a238b147f266c2329b6e673a4db5ed780e0f84df3fad44d23bbd->enter($__internal_728555d015e5a238b147f266c2329b6e673a4db5ed780e0f84df3fad44d23bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b592a380b007f1a175db7e2715b270f0845fa42437165f9d9445bffe6d8a6b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b592a380b007f1a175db7e2715b270f0845fa42437165f9d9445bffe6d8a6b42->enter($__internal_b592a380b007f1a175db7e2715b270f0845fa42437165f9d9445bffe6d8a6b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_728555d015e5a238b147f266c2329b6e673a4db5ed780e0f84df3fad44d23bbd->leave($__internal_728555d015e5a238b147f266c2329b6e673a4db5ed780e0f84df3fad44d23bbd_prof);

        
        $__internal_b592a380b007f1a175db7e2715b270f0845fa42437165f9d9445bffe6d8a6b42->leave($__internal_b592a380b007f1a175db7e2715b270f0845fa42437165f9d9445bffe6d8a6b42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

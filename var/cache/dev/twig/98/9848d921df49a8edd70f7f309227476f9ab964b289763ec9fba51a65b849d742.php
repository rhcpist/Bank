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
        $__internal_d61f3dc7f9fae392cf831f128b5e3eb1b8c514cd01204d3db324afcdfd551db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61f3dc7f9fae392cf831f128b5e3eb1b8c514cd01204d3db324afcdfd551db0->enter($__internal_d61f3dc7f9fae392cf831f128b5e3eb1b8c514cd01204d3db324afcdfd551db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_568ae26c39fc25c71e4300081a805d6ed355f898258d6aa84eafd8d67c0adbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568ae26c39fc25c71e4300081a805d6ed355f898258d6aa84eafd8d67c0adbf6->enter($__internal_568ae26c39fc25c71e4300081a805d6ed355f898258d6aa84eafd8d67c0adbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d61f3dc7f9fae392cf831f128b5e3eb1b8c514cd01204d3db324afcdfd551db0->leave($__internal_d61f3dc7f9fae392cf831f128b5e3eb1b8c514cd01204d3db324afcdfd551db0_prof);

        
        $__internal_568ae26c39fc25c71e4300081a805d6ed355f898258d6aa84eafd8d67c0adbf6->leave($__internal_568ae26c39fc25c71e4300081a805d6ed355f898258d6aa84eafd8d67c0adbf6_prof);

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

<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b04551a39dae58e67eafa561918bff12c05a9b290a89b5c1f4c9d0a03dccd80f extends Twig_Template
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
        $__internal_e81aee8f4d705495ef0094151598e6aa496aa35595cfc2807e169fe73bf1965a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81aee8f4d705495ef0094151598e6aa496aa35595cfc2807e169fe73bf1965a->enter($__internal_e81aee8f4d705495ef0094151598e6aa496aa35595cfc2807e169fe73bf1965a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_bfe11f463d13bc463d992efbaac45ed18426f3edea65082ac5dcac4b2b3bac7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe11f463d13bc463d992efbaac45ed18426f3edea65082ac5dcac4b2b3bac7c->enter($__internal_bfe11f463d13bc463d992efbaac45ed18426f3edea65082ac5dcac4b2b3bac7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e81aee8f4d705495ef0094151598e6aa496aa35595cfc2807e169fe73bf1965a->leave($__internal_e81aee8f4d705495ef0094151598e6aa496aa35595cfc2807e169fe73bf1965a_prof);

        
        $__internal_bfe11f463d13bc463d992efbaac45ed18426f3edea65082ac5dcac4b2b3bac7c->leave($__internal_bfe11f463d13bc463d992efbaac45ed18426f3edea65082ac5dcac4b2b3bac7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

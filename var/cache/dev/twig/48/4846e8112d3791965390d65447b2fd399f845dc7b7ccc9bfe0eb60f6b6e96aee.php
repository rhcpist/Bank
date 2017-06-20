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
        $__internal_cfc2d0119ab1e39f954791ca5b77e1211cd5d6f8c2ab600ae804a7e506d6e7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc2d0119ab1e39f954791ca5b77e1211cd5d6f8c2ab600ae804a7e506d6e7a0->enter($__internal_cfc2d0119ab1e39f954791ca5b77e1211cd5d6f8c2ab600ae804a7e506d6e7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_45df214c53bcd694f73bbb10498a0c3aa5505672a93379b32c77283e96d703c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45df214c53bcd694f73bbb10498a0c3aa5505672a93379b32c77283e96d703c7->enter($__internal_45df214c53bcd694f73bbb10498a0c3aa5505672a93379b32c77283e96d703c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cfc2d0119ab1e39f954791ca5b77e1211cd5d6f8c2ab600ae804a7e506d6e7a0->leave($__internal_cfc2d0119ab1e39f954791ca5b77e1211cd5d6f8c2ab600ae804a7e506d6e7a0_prof);

        
        $__internal_45df214c53bcd694f73bbb10498a0c3aa5505672a93379b32c77283e96d703c7->leave($__internal_45df214c53bcd694f73bbb10498a0c3aa5505672a93379b32c77283e96d703c7_prof);

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

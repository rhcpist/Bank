<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ffbf3fd33d4cbc31202a85f4ab54e5102931078b2d7cf8a9243a943d6931ee27 extends Twig_Template
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
        $__internal_52c15667e7e14578d9ea2b66e3ae824cc149a6cf0f8066bce85dd96e6ffccbfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c15667e7e14578d9ea2b66e3ae824cc149a6cf0f8066bce85dd96e6ffccbfa->enter($__internal_52c15667e7e14578d9ea2b66e3ae824cc149a6cf0f8066bce85dd96e6ffccbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e2c397f5dd4a04262b80cc56fa4a883cc2f12ade415a1db3e760355aa205325f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c397f5dd4a04262b80cc56fa4a883cc2f12ade415a1db3e760355aa205325f->enter($__internal_e2c397f5dd4a04262b80cc56fa4a883cc2f12ade415a1db3e760355aa205325f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_52c15667e7e14578d9ea2b66e3ae824cc149a6cf0f8066bce85dd96e6ffccbfa->leave($__internal_52c15667e7e14578d9ea2b66e3ae824cc149a6cf0f8066bce85dd96e6ffccbfa_prof);

        
        $__internal_e2c397f5dd4a04262b80cc56fa4a883cc2f12ade415a1db3e760355aa205325f->leave($__internal_e2c397f5dd4a04262b80cc56fa4a883cc2f12ade415a1db3e760355aa205325f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

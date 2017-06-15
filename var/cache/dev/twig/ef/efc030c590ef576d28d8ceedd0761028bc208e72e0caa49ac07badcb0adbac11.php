<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a28eba55955847ef49e3a72632ab5597b95aea55dda30c2f5bc6d1c1074f9285 extends Twig_Template
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
        $__internal_6af8150169f17bb0380be9993eb4c2bd2b35d119bae7f064bda4e211a5e632f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af8150169f17bb0380be9993eb4c2bd2b35d119bae7f064bda4e211a5e632f8->enter($__internal_6af8150169f17bb0380be9993eb4c2bd2b35d119bae7f064bda4e211a5e632f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_512fbfbbd98866fbbfd5a887622969192f39ecd00e86bda82ef8f06bd3396d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512fbfbbd98866fbbfd5a887622969192f39ecd00e86bda82ef8f06bd3396d58->enter($__internal_512fbfbbd98866fbbfd5a887622969192f39ecd00e86bda82ef8f06bd3396d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6af8150169f17bb0380be9993eb4c2bd2b35d119bae7f064bda4e211a5e632f8->leave($__internal_6af8150169f17bb0380be9993eb4c2bd2b35d119bae7f064bda4e211a5e632f8_prof);

        
        $__internal_512fbfbbd98866fbbfd5a887622969192f39ecd00e86bda82ef8f06bd3396d58->leave($__internal_512fbfbbd98866fbbfd5a887622969192f39ecd00e86bda82ef8f06bd3396d58_prof);

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

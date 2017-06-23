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
        $__internal_d30a198f73f96e1f36f920c38a9ce6c54159af26337d98e9a80da9b7028c878f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30a198f73f96e1f36f920c38a9ce6c54159af26337d98e9a80da9b7028c878f->enter($__internal_d30a198f73f96e1f36f920c38a9ce6c54159af26337d98e9a80da9b7028c878f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_667c8ff37a369e546d8a1e7c8351112659120ec6783eb345e0d5b6a14e38e772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667c8ff37a369e546d8a1e7c8351112659120ec6783eb345e0d5b6a14e38e772->enter($__internal_667c8ff37a369e546d8a1e7c8351112659120ec6783eb345e0d5b6a14e38e772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d30a198f73f96e1f36f920c38a9ce6c54159af26337d98e9a80da9b7028c878f->leave($__internal_d30a198f73f96e1f36f920c38a9ce6c54159af26337d98e9a80da9b7028c878f_prof);

        
        $__internal_667c8ff37a369e546d8a1e7c8351112659120ec6783eb345e0d5b6a14e38e772->leave($__internal_667c8ff37a369e546d8a1e7c8351112659120ec6783eb345e0d5b6a14e38e772_prof);

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

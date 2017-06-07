<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2ee17aa92fa2497144999715d588700af97b4d9b9182c3ebcf6f453a216fd9f5 extends Twig_Template
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
        $__internal_712dbaf3f99a9c7bf91cae33b6cc4c0a6403e93f704100bcb5fa922551fc9a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712dbaf3f99a9c7bf91cae33b6cc4c0a6403e93f704100bcb5fa922551fc9a09->enter($__internal_712dbaf3f99a9c7bf91cae33b6cc4c0a6403e93f704100bcb5fa922551fc9a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_87bd1cc3b5cbe8791e967f6de55a9d41f6a9d691c40b04676a75796303e09a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87bd1cc3b5cbe8791e967f6de55a9d41f6a9d691c40b04676a75796303e09a93->enter($__internal_87bd1cc3b5cbe8791e967f6de55a9d41f6a9d691c40b04676a75796303e09a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_712dbaf3f99a9c7bf91cae33b6cc4c0a6403e93f704100bcb5fa922551fc9a09->leave($__internal_712dbaf3f99a9c7bf91cae33b6cc4c0a6403e93f704100bcb5fa922551fc9a09_prof);

        
        $__internal_87bd1cc3b5cbe8791e967f6de55a9d41f6a9d691c40b04676a75796303e09a93->leave($__internal_87bd1cc3b5cbe8791e967f6de55a9d41f6a9d691c40b04676a75796303e09a93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

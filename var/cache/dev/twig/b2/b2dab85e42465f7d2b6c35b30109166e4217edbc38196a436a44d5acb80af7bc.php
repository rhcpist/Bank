<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_998420e706f82e43c6479d081dc60fdc1ee483a1106c832e715f1622ada94883 extends Twig_Template
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
        $__internal_454b95a582d6c33d260ab0cc6dbbfa159c84cfed9e7ca69a20a60eb37fbe618f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454b95a582d6c33d260ab0cc6dbbfa159c84cfed9e7ca69a20a60eb37fbe618f->enter($__internal_454b95a582d6c33d260ab0cc6dbbfa159c84cfed9e7ca69a20a60eb37fbe618f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f68e885d94e4b99e6efebd9fb897a43a018b94760ff7cc08a36e383d113dca4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68e885d94e4b99e6efebd9fb897a43a018b94760ff7cc08a36e383d113dca4d->enter($__internal_f68e885d94e4b99e6efebd9fb897a43a018b94760ff7cc08a36e383d113dca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_454b95a582d6c33d260ab0cc6dbbfa159c84cfed9e7ca69a20a60eb37fbe618f->leave($__internal_454b95a582d6c33d260ab0cc6dbbfa159c84cfed9e7ca69a20a60eb37fbe618f_prof);

        
        $__internal_f68e885d94e4b99e6efebd9fb897a43a018b94760ff7cc08a36e383d113dca4d->leave($__internal_f68e885d94e4b99e6efebd9fb897a43a018b94760ff7cc08a36e383d113dca4d_prof);

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

<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8ad01a504af0986d5b158b25b2dde7d33708abcc5a495e701389579c1bf29be1 extends Twig_Template
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
        $__internal_8feab6a2f1b31f482e123e6200e9f19d6369e18415b054533ad105fef23a9040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8feab6a2f1b31f482e123e6200e9f19d6369e18415b054533ad105fef23a9040->enter($__internal_8feab6a2f1b31f482e123e6200e9f19d6369e18415b054533ad105fef23a9040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d7b956768211424c9792454f779f3fcdc0cd3c0878016a2efc06dc251c72e7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b956768211424c9792454f779f3fcdc0cd3c0878016a2efc06dc251c72e7ed->enter($__internal_d7b956768211424c9792454f779f3fcdc0cd3c0878016a2efc06dc251c72e7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8feab6a2f1b31f482e123e6200e9f19d6369e18415b054533ad105fef23a9040->leave($__internal_8feab6a2f1b31f482e123e6200e9f19d6369e18415b054533ad105fef23a9040_prof);

        
        $__internal_d7b956768211424c9792454f779f3fcdc0cd3c0878016a2efc06dc251c72e7ed->leave($__internal_d7b956768211424c9792454f779f3fcdc0cd3c0878016a2efc06dc251c72e7ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

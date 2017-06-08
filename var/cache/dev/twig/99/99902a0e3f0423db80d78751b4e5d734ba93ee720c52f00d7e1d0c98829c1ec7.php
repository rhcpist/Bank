<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a244ba1a0e6444791a41522ff51576a32e3f731afce6c729af7f3b39707e452c extends Twig_Template
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
        $__internal_1f2b33cddd143e9799f9413ef1eb08142c2ac429a45cab9052eb7e16fc276b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2b33cddd143e9799f9413ef1eb08142c2ac429a45cab9052eb7e16fc276b98->enter($__internal_1f2b33cddd143e9799f9413ef1eb08142c2ac429a45cab9052eb7e16fc276b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_82b1f61283ac62ff7bc0996a31c24e09b12379510313dbdc3cfe21f0ba73d59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b1f61283ac62ff7bc0996a31c24e09b12379510313dbdc3cfe21f0ba73d59e->enter($__internal_82b1f61283ac62ff7bc0996a31c24e09b12379510313dbdc3cfe21f0ba73d59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1f2b33cddd143e9799f9413ef1eb08142c2ac429a45cab9052eb7e16fc276b98->leave($__internal_1f2b33cddd143e9799f9413ef1eb08142c2ac429a45cab9052eb7e16fc276b98_prof);

        
        $__internal_82b1f61283ac62ff7bc0996a31c24e09b12379510313dbdc3cfe21f0ba73d59e->leave($__internal_82b1f61283ac62ff7bc0996a31c24e09b12379510313dbdc3cfe21f0ba73d59e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

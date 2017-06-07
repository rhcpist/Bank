<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ebf76baf786a67399850fa0c1dec0896cbd27e22c5888a97ec8ebbe3f7fd7f39 extends Twig_Template
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
        $__internal_7a1df1be505859492cf67ae7f7e2ed2980dc3e93635b0f2c9d15317657996dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1df1be505859492cf67ae7f7e2ed2980dc3e93635b0f2c9d15317657996dcf->enter($__internal_7a1df1be505859492cf67ae7f7e2ed2980dc3e93635b0f2c9d15317657996dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_512ccfc5ce3a5853972bcb20d2a27c1cd658455d12aaa5150eb1f918501ef152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512ccfc5ce3a5853972bcb20d2a27c1cd658455d12aaa5150eb1f918501ef152->enter($__internal_512ccfc5ce3a5853972bcb20d2a27c1cd658455d12aaa5150eb1f918501ef152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7a1df1be505859492cf67ae7f7e2ed2980dc3e93635b0f2c9d15317657996dcf->leave($__internal_7a1df1be505859492cf67ae7f7e2ed2980dc3e93635b0f2c9d15317657996dcf_prof);

        
        $__internal_512ccfc5ce3a5853972bcb20d2a27c1cd658455d12aaa5150eb1f918501ef152->leave($__internal_512ccfc5ce3a5853972bcb20d2a27c1cd658455d12aaa5150eb1f918501ef152_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}

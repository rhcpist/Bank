<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_dba76606bbdec3668f543d842d794b707cc35676af10a9a24362d86a0176eae9 extends Twig_Template
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
        $__internal_54d591df92900c1bfbc5deaf4460c8bdba8466e120e6f2407b4ff54bf6a2e854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d591df92900c1bfbc5deaf4460c8bdba8466e120e6f2407b4ff54bf6a2e854->enter($__internal_54d591df92900c1bfbc5deaf4460c8bdba8466e120e6f2407b4ff54bf6a2e854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_d36b9c2c2052d3b0e080b700230ce9bff6174c707cccab0b443693a69e9a02d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36b9c2c2052d3b0e080b700230ce9bff6174c707cccab0b443693a69e9a02d1->enter($__internal_d36b9c2c2052d3b0e080b700230ce9bff6174c707cccab0b443693a69e9a02d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_54d591df92900c1bfbc5deaf4460c8bdba8466e120e6f2407b4ff54bf6a2e854->leave($__internal_54d591df92900c1bfbc5deaf4460c8bdba8466e120e6f2407b4ff54bf6a2e854_prof);

        
        $__internal_d36b9c2c2052d3b0e080b700230ce9bff6174c707cccab0b443693a69e9a02d1->leave($__internal_d36b9c2c2052d3b0e080b700230ce9bff6174c707cccab0b443693a69e9a02d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a8d8f8d002c10d3e4088f6a6b6ad8e137694ae0d358b9a8a857e1f118f8bcd2c extends Twig_Template
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
        $__internal_121b1e8eaf3e8a865d6b1408b4ba47a430363715d7304ff3c2f99ce70d521224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121b1e8eaf3e8a865d6b1408b4ba47a430363715d7304ff3c2f99ce70d521224->enter($__internal_121b1e8eaf3e8a865d6b1408b4ba47a430363715d7304ff3c2f99ce70d521224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0d3e79a38b429bcc0d9a423436d735da38ea64623924929bf039096ccb19ac92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3e79a38b429bcc0d9a423436d735da38ea64623924929bf039096ccb19ac92->enter($__internal_0d3e79a38b429bcc0d9a423436d735da38ea64623924929bf039096ccb19ac92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_121b1e8eaf3e8a865d6b1408b4ba47a430363715d7304ff3c2f99ce70d521224->leave($__internal_121b1e8eaf3e8a865d6b1408b4ba47a430363715d7304ff3c2f99ce70d521224_prof);

        
        $__internal_0d3e79a38b429bcc0d9a423436d735da38ea64623924929bf039096ccb19ac92->leave($__internal_0d3e79a38b429bcc0d9a423436d735da38ea64623924929bf039096ccb19ac92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

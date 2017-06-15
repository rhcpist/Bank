<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4d182c8f9010b4d7209adb06b54d837931278a49b6c4d79e26f2e84fb418e559 extends Twig_Template
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
        $__internal_dc676a4b0f97805cda523d7f52dc6c3b485b932bea38592501870f68cdba0475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc676a4b0f97805cda523d7f52dc6c3b485b932bea38592501870f68cdba0475->enter($__internal_dc676a4b0f97805cda523d7f52dc6c3b485b932bea38592501870f68cdba0475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b9f559f4a21f7efbfd4ddf5bcd2f75bbee37de9751f148738579b603326c5ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f559f4a21f7efbfd4ddf5bcd2f75bbee37de9751f148738579b603326c5ea4->enter($__internal_b9f559f4a21f7efbfd4ddf5bcd2f75bbee37de9751f148738579b603326c5ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_dc676a4b0f97805cda523d7f52dc6c3b485b932bea38592501870f68cdba0475->leave($__internal_dc676a4b0f97805cda523d7f52dc6c3b485b932bea38592501870f68cdba0475_prof);

        
        $__internal_b9f559f4a21f7efbfd4ddf5bcd2f75bbee37de9751f148738579b603326c5ea4->leave($__internal_b9f559f4a21f7efbfd4ddf5bcd2f75bbee37de9751f148738579b603326c5ea4_prof);

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

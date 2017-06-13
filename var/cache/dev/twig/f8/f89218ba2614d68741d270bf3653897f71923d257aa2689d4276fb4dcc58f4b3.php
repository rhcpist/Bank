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
        $__internal_c1b4724a0a8701f9f558990f72989582401e3524e9caecec835ebe3698655766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b4724a0a8701f9f558990f72989582401e3524e9caecec835ebe3698655766->enter($__internal_c1b4724a0a8701f9f558990f72989582401e3524e9caecec835ebe3698655766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8b69a0d1846ed836cf9727ddb9a8e371c7ea6ed51a2ec45f9d8a6a3a92ef3275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b69a0d1846ed836cf9727ddb9a8e371c7ea6ed51a2ec45f9d8a6a3a92ef3275->enter($__internal_8b69a0d1846ed836cf9727ddb9a8e371c7ea6ed51a2ec45f9d8a6a3a92ef3275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c1b4724a0a8701f9f558990f72989582401e3524e9caecec835ebe3698655766->leave($__internal_c1b4724a0a8701f9f558990f72989582401e3524e9caecec835ebe3698655766_prof);

        
        $__internal_8b69a0d1846ed836cf9727ddb9a8e371c7ea6ed51a2ec45f9d8a6a3a92ef3275->leave($__internal_8b69a0d1846ed836cf9727ddb9a8e371c7ea6ed51a2ec45f9d8a6a3a92ef3275_prof);

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

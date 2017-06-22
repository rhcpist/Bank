<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_44cc86f352a69cd32bf4878fd379279a6e2630b3ef2a85d4e0cd0b0b3cdb3237 extends Twig_Template
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
        $__internal_25f8e90a4d7b0f1384226246f756236bb668f47dd246d22d860dcc40a2f8763f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f8e90a4d7b0f1384226246f756236bb668f47dd246d22d860dcc40a2f8763f->enter($__internal_25f8e90a4d7b0f1384226246f756236bb668f47dd246d22d860dcc40a2f8763f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_df3583e1b352ca1cdd1e135e3842556a1f911d166929bf8814d855b7e6e9175a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3583e1b352ca1cdd1e135e3842556a1f911d166929bf8814d855b7e6e9175a->enter($__internal_df3583e1b352ca1cdd1e135e3842556a1f911d166929bf8814d855b7e6e9175a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_25f8e90a4d7b0f1384226246f756236bb668f47dd246d22d860dcc40a2f8763f->leave($__internal_25f8e90a4d7b0f1384226246f756236bb668f47dd246d22d860dcc40a2f8763f_prof);

        
        $__internal_df3583e1b352ca1cdd1e135e3842556a1f911d166929bf8814d855b7e6e9175a->leave($__internal_df3583e1b352ca1cdd1e135e3842556a1f911d166929bf8814d855b7e6e9175a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

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
        $__internal_801be64fab1efa3d1206b6212a2f2fc3784eed734b058c3ea0bcad12b2feabe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801be64fab1efa3d1206b6212a2f2fc3784eed734b058c3ea0bcad12b2feabe2->enter($__internal_801be64fab1efa3d1206b6212a2f2fc3784eed734b058c3ea0bcad12b2feabe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f9969b98a67a0fead9b5d03f5240564136dba8927a02aec3f876c6d04d41e7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9969b98a67a0fead9b5d03f5240564136dba8927a02aec3f876c6d04d41e7db->enter($__internal_f9969b98a67a0fead9b5d03f5240564136dba8927a02aec3f876c6d04d41e7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_801be64fab1efa3d1206b6212a2f2fc3784eed734b058c3ea0bcad12b2feabe2->leave($__internal_801be64fab1efa3d1206b6212a2f2fc3784eed734b058c3ea0bcad12b2feabe2_prof);

        
        $__internal_f9969b98a67a0fead9b5d03f5240564136dba8927a02aec3f876c6d04d41e7db->leave($__internal_f9969b98a67a0fead9b5d03f5240564136dba8927a02aec3f876c6d04d41e7db_prof);

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

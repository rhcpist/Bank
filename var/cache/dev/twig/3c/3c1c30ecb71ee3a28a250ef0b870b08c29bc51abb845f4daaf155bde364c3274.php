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
        $__internal_4e1ae78d1b9e8eebffd2224a41cabcf136275f10db1862eadf98972b10e4005e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1ae78d1b9e8eebffd2224a41cabcf136275f10db1862eadf98972b10e4005e->enter($__internal_4e1ae78d1b9e8eebffd2224a41cabcf136275f10db1862eadf98972b10e4005e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_11bd3e1f30c1f0ef656ec60a5af48ce15231ce5f42e2e2127a35f18aa92e4efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bd3e1f30c1f0ef656ec60a5af48ce15231ce5f42e2e2127a35f18aa92e4efe->enter($__internal_11bd3e1f30c1f0ef656ec60a5af48ce15231ce5f42e2e2127a35f18aa92e4efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4e1ae78d1b9e8eebffd2224a41cabcf136275f10db1862eadf98972b10e4005e->leave($__internal_4e1ae78d1b9e8eebffd2224a41cabcf136275f10db1862eadf98972b10e4005e_prof);

        
        $__internal_11bd3e1f30c1f0ef656ec60a5af48ce15231ce5f42e2e2127a35f18aa92e4efe->leave($__internal_11bd3e1f30c1f0ef656ec60a5af48ce15231ce5f42e2e2127a35f18aa92e4efe_prof);

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

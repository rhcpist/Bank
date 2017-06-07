<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f24cf3ea311f4bfb7032917d683308d20b3346219f5e9950c0d1b1c0932c0ef6 extends Twig_Template
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
        $__internal_c1e44e75a13dec11ff1f4a85cd4cc73ec5fe427276227f180c567656ec00c78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e44e75a13dec11ff1f4a85cd4cc73ec5fe427276227f180c567656ec00c78f->enter($__internal_c1e44e75a13dec11ff1f4a85cd4cc73ec5fe427276227f180c567656ec00c78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_66381136157f609bc4bf8191b596057d67ec0abe8e4ac6cd519dba5d90e9f490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66381136157f609bc4bf8191b596057d67ec0abe8e4ac6cd519dba5d90e9f490->enter($__internal_66381136157f609bc4bf8191b596057d67ec0abe8e4ac6cd519dba5d90e9f490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c1e44e75a13dec11ff1f4a85cd4cc73ec5fe427276227f180c567656ec00c78f->leave($__internal_c1e44e75a13dec11ff1f4a85cd4cc73ec5fe427276227f180c567656ec00c78f_prof);

        
        $__internal_66381136157f609bc4bf8191b596057d67ec0abe8e4ac6cd519dba5d90e9f490->leave($__internal_66381136157f609bc4bf8191b596057d67ec0abe8e4ac6cd519dba5d90e9f490_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}

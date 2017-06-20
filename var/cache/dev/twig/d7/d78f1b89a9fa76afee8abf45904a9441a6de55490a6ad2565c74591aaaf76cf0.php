<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c1c41f5729bf1bbab0e561e4d4d1733b3bd4ff4e260e20ecb6da9cfde79c0b66 extends Twig_Template
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
        $__internal_811df0d1249202a86ddcc0678eb918a633719dec4fad99b1ec4d1ae535eaa3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811df0d1249202a86ddcc0678eb918a633719dec4fad99b1ec4d1ae535eaa3cd->enter($__internal_811df0d1249202a86ddcc0678eb918a633719dec4fad99b1ec4d1ae535eaa3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b9e1773eebbd214158f2b2391379b8f413f70371acdd36ef0aa0830f1ffe2b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e1773eebbd214158f2b2391379b8f413f70371acdd36ef0aa0830f1ffe2b55->enter($__internal_b9e1773eebbd214158f2b2391379b8f413f70371acdd36ef0aa0830f1ffe2b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_811df0d1249202a86ddcc0678eb918a633719dec4fad99b1ec4d1ae535eaa3cd->leave($__internal_811df0d1249202a86ddcc0678eb918a633719dec4fad99b1ec4d1ae535eaa3cd_prof);

        
        $__internal_b9e1773eebbd214158f2b2391379b8f413f70371acdd36ef0aa0830f1ffe2b55->leave($__internal_b9e1773eebbd214158f2b2391379b8f413f70371acdd36ef0aa0830f1ffe2b55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

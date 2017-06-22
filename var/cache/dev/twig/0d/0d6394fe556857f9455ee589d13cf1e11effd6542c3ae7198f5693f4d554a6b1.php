<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8926cc1dfb20233e4a8dc11d92721f561f59dc5532f13378f2a1dff2a6a93fcd extends Twig_Template
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
        $__internal_92be1c4106f82e19f1b154619a761aa9c6b3b8268c20d00b704238ee4075360f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92be1c4106f82e19f1b154619a761aa9c6b3b8268c20d00b704238ee4075360f->enter($__internal_92be1c4106f82e19f1b154619a761aa9c6b3b8268c20d00b704238ee4075360f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1d5c574e39b5c179bc28f7e076bd50c49417559e442f2c0d2c77d518d4fe514c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5c574e39b5c179bc28f7e076bd50c49417559e442f2c0d2c77d518d4fe514c->enter($__internal_1d5c574e39b5c179bc28f7e076bd50c49417559e442f2c0d2c77d518d4fe514c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_92be1c4106f82e19f1b154619a761aa9c6b3b8268c20d00b704238ee4075360f->leave($__internal_92be1c4106f82e19f1b154619a761aa9c6b3b8268c20d00b704238ee4075360f_prof);

        
        $__internal_1d5c574e39b5c179bc28f7e076bd50c49417559e442f2c0d2c77d518d4fe514c->leave($__internal_1d5c574e39b5c179bc28f7e076bd50c49417559e442f2c0d2c77d518d4fe514c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

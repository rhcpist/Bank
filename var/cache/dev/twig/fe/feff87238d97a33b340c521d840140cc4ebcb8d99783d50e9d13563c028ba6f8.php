<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3b14a186faec829b90601654405c6f935f9e5c0cedea8c80d61f032d250a75ee extends Twig_Template
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
        $__internal_5f62fe0a658733d36788676d7937e9ebb76feb2fac9eeb59d63503c5aaefd37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f62fe0a658733d36788676d7937e9ebb76feb2fac9eeb59d63503c5aaefd37c->enter($__internal_5f62fe0a658733d36788676d7937e9ebb76feb2fac9eeb59d63503c5aaefd37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_724f9761ca16faa39385ecf37e7c72b3260ead45af7409d5d8af3a442ff550dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724f9761ca16faa39385ecf37e7c72b3260ead45af7409d5d8af3a442ff550dd->enter($__internal_724f9761ca16faa39385ecf37e7c72b3260ead45af7409d5d8af3a442ff550dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5f62fe0a658733d36788676d7937e9ebb76feb2fac9eeb59d63503c5aaefd37c->leave($__internal_5f62fe0a658733d36788676d7937e9ebb76feb2fac9eeb59d63503c5aaefd37c_prof);

        
        $__internal_724f9761ca16faa39385ecf37e7c72b3260ead45af7409d5d8af3a442ff550dd->leave($__internal_724f9761ca16faa39385ecf37e7c72b3260ead45af7409d5d8af3a442ff550dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

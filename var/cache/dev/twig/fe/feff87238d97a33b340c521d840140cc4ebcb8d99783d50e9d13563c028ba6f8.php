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
        $__internal_d71076163b1d2251f80498b678a7f9fc393ecbbdd695fde31fe5446ae6dbbfd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71076163b1d2251f80498b678a7f9fc393ecbbdd695fde31fe5446ae6dbbfd8->enter($__internal_d71076163b1d2251f80498b678a7f9fc393ecbbdd695fde31fe5446ae6dbbfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_670bec248fc59086b3fa1ea94eaa434b8835cb08274e12f10e43034cb026cc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670bec248fc59086b3fa1ea94eaa434b8835cb08274e12f10e43034cb026cc3d->enter($__internal_670bec248fc59086b3fa1ea94eaa434b8835cb08274e12f10e43034cb026cc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d71076163b1d2251f80498b678a7f9fc393ecbbdd695fde31fe5446ae6dbbfd8->leave($__internal_d71076163b1d2251f80498b678a7f9fc393ecbbdd695fde31fe5446ae6dbbfd8_prof);

        
        $__internal_670bec248fc59086b3fa1ea94eaa434b8835cb08274e12f10e43034cb026cc3d->leave($__internal_670bec248fc59086b3fa1ea94eaa434b8835cb08274e12f10e43034cb026cc3d_prof);

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

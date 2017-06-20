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
        $__internal_e0f39c0593119693d445b8a8590511ebb60111e9efdb8cfd374a559835ef3a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f39c0593119693d445b8a8590511ebb60111e9efdb8cfd374a559835ef3a65->enter($__internal_e0f39c0593119693d445b8a8590511ebb60111e9efdb8cfd374a559835ef3a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3b57af3caa6076739b72b2a0e0284cd13025ccb084c1edd76468b8942780b536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b57af3caa6076739b72b2a0e0284cd13025ccb084c1edd76468b8942780b536->enter($__internal_3b57af3caa6076739b72b2a0e0284cd13025ccb084c1edd76468b8942780b536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e0f39c0593119693d445b8a8590511ebb60111e9efdb8cfd374a559835ef3a65->leave($__internal_e0f39c0593119693d445b8a8590511ebb60111e9efdb8cfd374a559835ef3a65_prof);

        
        $__internal_3b57af3caa6076739b72b2a0e0284cd13025ccb084c1edd76468b8942780b536->leave($__internal_3b57af3caa6076739b72b2a0e0284cd13025ccb084c1edd76468b8942780b536_prof);

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

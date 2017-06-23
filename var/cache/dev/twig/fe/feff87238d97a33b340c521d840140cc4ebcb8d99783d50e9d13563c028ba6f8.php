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
        $__internal_bf2892bb8c58b2b1e65c8f438ddd51003fc04e53467b9d0189f5bcf9a1e4e7f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2892bb8c58b2b1e65c8f438ddd51003fc04e53467b9d0189f5bcf9a1e4e7f1->enter($__internal_bf2892bb8c58b2b1e65c8f438ddd51003fc04e53467b9d0189f5bcf9a1e4e7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5672cc75674bcb159a107238b0b8a8fb3e7add04bd69cc45c790a9797b49313f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5672cc75674bcb159a107238b0b8a8fb3e7add04bd69cc45c790a9797b49313f->enter($__internal_5672cc75674bcb159a107238b0b8a8fb3e7add04bd69cc45c790a9797b49313f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_bf2892bb8c58b2b1e65c8f438ddd51003fc04e53467b9d0189f5bcf9a1e4e7f1->leave($__internal_bf2892bb8c58b2b1e65c8f438ddd51003fc04e53467b9d0189f5bcf9a1e4e7f1_prof);

        
        $__internal_5672cc75674bcb159a107238b0b8a8fb3e7add04bd69cc45c790a9797b49313f->leave($__internal_5672cc75674bcb159a107238b0b8a8fb3e7add04bd69cc45c790a9797b49313f_prof);

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

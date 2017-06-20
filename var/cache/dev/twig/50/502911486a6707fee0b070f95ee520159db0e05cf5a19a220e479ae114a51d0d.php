<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e8911517946b7b5fc0c39a0484a2e12193e218bdbdcae3edc56769820da6b4e2 extends Twig_Template
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
        $__internal_dc7db5cb16957780e03f64afac222babd3afcea192da99dd8413881d4e122e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7db5cb16957780e03f64afac222babd3afcea192da99dd8413881d4e122e6e->enter($__internal_dc7db5cb16957780e03f64afac222babd3afcea192da99dd8413881d4e122e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6acb7572776166c215e5fba30fc770f20659d70532c8e02dc1b4632b6fab1600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acb7572776166c215e5fba30fc770f20659d70532c8e02dc1b4632b6fab1600->enter($__internal_6acb7572776166c215e5fba30fc770f20659d70532c8e02dc1b4632b6fab1600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_dc7db5cb16957780e03f64afac222babd3afcea192da99dd8413881d4e122e6e->leave($__internal_dc7db5cb16957780e03f64afac222babd3afcea192da99dd8413881d4e122e6e_prof);

        
        $__internal_6acb7572776166c215e5fba30fc770f20659d70532c8e02dc1b4632b6fab1600->leave($__internal_6acb7572776166c215e5fba30fc770f20659d70532c8e02dc1b4632b6fab1600_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

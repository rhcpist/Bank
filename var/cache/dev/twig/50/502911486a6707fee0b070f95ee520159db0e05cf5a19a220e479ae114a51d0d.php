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
        $__internal_ba4b69c9b40457ab53ec43fca149a9d30174929328f16d23bc031c45cbf29020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4b69c9b40457ab53ec43fca149a9d30174929328f16d23bc031c45cbf29020->enter($__internal_ba4b69c9b40457ab53ec43fca149a9d30174929328f16d23bc031c45cbf29020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a66a279ef10cdabccda46e96082574e6f33a12f83467ac063ffde861de38d206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66a279ef10cdabccda46e96082574e6f33a12f83467ac063ffde861de38d206->enter($__internal_a66a279ef10cdabccda46e96082574e6f33a12f83467ac063ffde861de38d206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ba4b69c9b40457ab53ec43fca149a9d30174929328f16d23bc031c45cbf29020->leave($__internal_ba4b69c9b40457ab53ec43fca149a9d30174929328f16d23bc031c45cbf29020_prof);

        
        $__internal_a66a279ef10cdabccda46e96082574e6f33a12f83467ac063ffde861de38d206->leave($__internal_a66a279ef10cdabccda46e96082574e6f33a12f83467ac063ffde861de38d206_prof);

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

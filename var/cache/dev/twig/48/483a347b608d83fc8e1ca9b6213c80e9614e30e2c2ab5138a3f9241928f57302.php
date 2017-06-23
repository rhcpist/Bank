<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_2b096f7623424383d331962715034115972cd14d4e2a6b01e2116864b106d43f extends Twig_Template
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
        $__internal_b29136284dc1e3d9bd02dbe23017922857160f99685ed55025e770ab9d5da2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29136284dc1e3d9bd02dbe23017922857160f99685ed55025e770ab9d5da2d2->enter($__internal_b29136284dc1e3d9bd02dbe23017922857160f99685ed55025e770ab9d5da2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_cfaf40f796b7d66cfe114e1ad892e59c6f8b7b87f0ea29f2b0a0e5678ee15bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfaf40f796b7d66cfe114e1ad892e59c6f8b7b87f0ea29f2b0a0e5678ee15bbc->enter($__internal_cfaf40f796b7d66cfe114e1ad892e59c6f8b7b87f0ea29f2b0a0e5678ee15bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b29136284dc1e3d9bd02dbe23017922857160f99685ed55025e770ab9d5da2d2->leave($__internal_b29136284dc1e3d9bd02dbe23017922857160f99685ed55025e770ab9d5da2d2_prof);

        
        $__internal_cfaf40f796b7d66cfe114e1ad892e59c6f8b7b87f0ea29f2b0a0e5678ee15bbc->leave($__internal_cfaf40f796b7d66cfe114e1ad892e59c6f8b7b87f0ea29f2b0a0e5678ee15bbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

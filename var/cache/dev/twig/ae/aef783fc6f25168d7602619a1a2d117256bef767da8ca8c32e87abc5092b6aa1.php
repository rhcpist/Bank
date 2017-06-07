<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ad7398072bf002b96222de84de6895c9714a3acf69c91b4daccb343c6ab0f5f9 extends Twig_Template
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
        $__internal_f0f908fdecaf1afb7fb8fd84030d82305093fd69d738389293a76307f86fda3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f908fdecaf1afb7fb8fd84030d82305093fd69d738389293a76307f86fda3d->enter($__internal_f0f908fdecaf1afb7fb8fd84030d82305093fd69d738389293a76307f86fda3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_bc7d04870686277fda442442325903b76b6273b97ccbc64e6009555215bdc473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7d04870686277fda442442325903b76b6273b97ccbc64e6009555215bdc473->enter($__internal_bc7d04870686277fda442442325903b76b6273b97ccbc64e6009555215bdc473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f0f908fdecaf1afb7fb8fd84030d82305093fd69d738389293a76307f86fda3d->leave($__internal_f0f908fdecaf1afb7fb8fd84030d82305093fd69d738389293a76307f86fda3d_prof);

        
        $__internal_bc7d04870686277fda442442325903b76b6273b97ccbc64e6009555215bdc473->leave($__internal_bc7d04870686277fda442442325903b76b6273b97ccbc64e6009555215bdc473_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

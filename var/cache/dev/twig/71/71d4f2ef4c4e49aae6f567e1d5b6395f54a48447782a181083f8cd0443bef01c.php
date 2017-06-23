<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_194de0f2183519fe6803dfdaba666aec5f864c1d196126dc4b59ab3e761ce5b4 extends Twig_Template
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
        $__internal_8ead81cc3c853d4e289b9c39907307f338ba03f56bc55a51bfdba36607b6344d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ead81cc3c853d4e289b9c39907307f338ba03f56bc55a51bfdba36607b6344d->enter($__internal_8ead81cc3c853d4e289b9c39907307f338ba03f56bc55a51bfdba36607b6344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2bd91086aacb00597700bc315c57bb108d27d4bf56387022b93ca42eabe6ad86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd91086aacb00597700bc315c57bb108d27d4bf56387022b93ca42eabe6ad86->enter($__internal_2bd91086aacb00597700bc315c57bb108d27d4bf56387022b93ca42eabe6ad86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8ead81cc3c853d4e289b9c39907307f338ba03f56bc55a51bfdba36607b6344d->leave($__internal_8ead81cc3c853d4e289b9c39907307f338ba03f56bc55a51bfdba36607b6344d_prof);

        
        $__internal_2bd91086aacb00597700bc315c57bb108d27d4bf56387022b93ca42eabe6ad86->leave($__internal_2bd91086aacb00597700bc315c57bb108d27d4bf56387022b93ca42eabe6ad86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a28eba55955847ef49e3a72632ab5597b95aea55dda30c2f5bc6d1c1074f9285 extends Twig_Template
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
        $__internal_6e3fe556256ef07e2eaebae89463df449d48023d2fe1d186765c2db1567fba41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3fe556256ef07e2eaebae89463df449d48023d2fe1d186765c2db1567fba41->enter($__internal_6e3fe556256ef07e2eaebae89463df449d48023d2fe1d186765c2db1567fba41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_820641dda8b42a0119c735e75163a0662ec77862f2c28a66d4fc42bbf4156200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820641dda8b42a0119c735e75163a0662ec77862f2c28a66d4fc42bbf4156200->enter($__internal_820641dda8b42a0119c735e75163a0662ec77862f2c28a66d4fc42bbf4156200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6e3fe556256ef07e2eaebae89463df449d48023d2fe1d186765c2db1567fba41->leave($__internal_6e3fe556256ef07e2eaebae89463df449d48023d2fe1d186765c2db1567fba41_prof);

        
        $__internal_820641dda8b42a0119c735e75163a0662ec77862f2c28a66d4fc42bbf4156200->leave($__internal_820641dda8b42a0119c735e75163a0662ec77862f2c28a66d4fc42bbf4156200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

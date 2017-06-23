<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_f3698afe01afe5cb5252ec6ee9e4fa058bd1b2301dcb95d6e90df3fd4a9f00ab extends Twig_Template
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
        $__internal_30a5f6dbc5c5171bc1e081bd4a258f1b7e73c889f641322d367a33ff0eeeafe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a5f6dbc5c5171bc1e081bd4a258f1b7e73c889f641322d367a33ff0eeeafe4->enter($__internal_30a5f6dbc5c5171bc1e081bd4a258f1b7e73c889f641322d367a33ff0eeeafe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_05f63c943a58135b25085a6ddbdac31d193354bded2282279dc035a72b933de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f63c943a58135b25085a6ddbdac31d193354bded2282279dc035a72b933de8->enter($__internal_05f63c943a58135b25085a6ddbdac31d193354bded2282279dc035a72b933de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_30a5f6dbc5c5171bc1e081bd4a258f1b7e73c889f641322d367a33ff0eeeafe4->leave($__internal_30a5f6dbc5c5171bc1e081bd4a258f1b7e73c889f641322d367a33ff0eeeafe4_prof);

        
        $__internal_05f63c943a58135b25085a6ddbdac31d193354bded2282279dc035a72b933de8->leave($__internal_05f63c943a58135b25085a6ddbdac31d193354bded2282279dc035a72b933de8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c21086d3d48b307d484ee3f7fe8fa3d1a17322121e9dbb88101f09b2ba24a4f0 extends Twig_Template
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
        $__internal_a708716bf370882a876fb107570d63c963308b56494830949ceee9773662136f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a708716bf370882a876fb107570d63c963308b56494830949ceee9773662136f->enter($__internal_a708716bf370882a876fb107570d63c963308b56494830949ceee9773662136f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d2c8a98165cacc30dc56afb817d443012c3a08b31ec0fdc8c0ce028a9dace739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c8a98165cacc30dc56afb817d443012c3a08b31ec0fdc8c0ce028a9dace739->enter($__internal_d2c8a98165cacc30dc56afb817d443012c3a08b31ec0fdc8c0ce028a9dace739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a708716bf370882a876fb107570d63c963308b56494830949ceee9773662136f->leave($__internal_a708716bf370882a876fb107570d63c963308b56494830949ceee9773662136f_prof);

        
        $__internal_d2c8a98165cacc30dc56afb817d443012c3a08b31ec0fdc8c0ce028a9dace739->leave($__internal_d2c8a98165cacc30dc56afb817d443012c3a08b31ec0fdc8c0ce028a9dace739_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

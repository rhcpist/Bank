<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_25041fdfb88ae87d47823f15f49dd96ec62a3d8e18ca5736e209f63c244ec4ad extends Twig_Template
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
        $__internal_849690c7905b0491bbffb922b509be98160b34a31a8196dd9606be4d76b74cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849690c7905b0491bbffb922b509be98160b34a31a8196dd9606be4d76b74cec->enter($__internal_849690c7905b0491bbffb922b509be98160b34a31a8196dd9606be4d76b74cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3f56815820c354c16ca723221170de98b9a9ff55caf4261ffb3f2014e9b53f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f56815820c354c16ca723221170de98b9a9ff55caf4261ffb3f2014e9b53f75->enter($__internal_3f56815820c354c16ca723221170de98b9a9ff55caf4261ffb3f2014e9b53f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_849690c7905b0491bbffb922b509be98160b34a31a8196dd9606be4d76b74cec->leave($__internal_849690c7905b0491bbffb922b509be98160b34a31a8196dd9606be4d76b74cec_prof);

        
        $__internal_3f56815820c354c16ca723221170de98b9a9ff55caf4261ffb3f2014e9b53f75->leave($__internal_3f56815820c354c16ca723221170de98b9a9ff55caf4261ffb3f2014e9b53f75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

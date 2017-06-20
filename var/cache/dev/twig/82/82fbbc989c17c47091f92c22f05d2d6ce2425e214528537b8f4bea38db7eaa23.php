<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_14d24404f56e2a714849c86432ea735c4006bb3d5a9d5b2323f15551c40c5159 extends Twig_Template
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
        $__internal_c1cc7323454d2971ebbeaac9900457d346a6c737296a2f28f5f942593e5703de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1cc7323454d2971ebbeaac9900457d346a6c737296a2f28f5f942593e5703de->enter($__internal_c1cc7323454d2971ebbeaac9900457d346a6c737296a2f28f5f942593e5703de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_5fc6ae22ecabd6e36829176990e750bc978679044e59da96e54ae2148cfab973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc6ae22ecabd6e36829176990e750bc978679044e59da96e54ae2148cfab973->enter($__internal_5fc6ae22ecabd6e36829176990e750bc978679044e59da96e54ae2148cfab973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c1cc7323454d2971ebbeaac9900457d346a6c737296a2f28f5f942593e5703de->leave($__internal_c1cc7323454d2971ebbeaac9900457d346a6c737296a2f28f5f942593e5703de_prof);

        
        $__internal_5fc6ae22ecabd6e36829176990e750bc978679044e59da96e54ae2148cfab973->leave($__internal_5fc6ae22ecabd6e36829176990e750bc978679044e59da96e54ae2148cfab973_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

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
        $__internal_2a8a50360211456291a87cefd998098188f22b1fb8bd0e8c1eb12332b73c58f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a8a50360211456291a87cefd998098188f22b1fb8bd0e8c1eb12332b73c58f6->enter($__internal_2a8a50360211456291a87cefd998098188f22b1fb8bd0e8c1eb12332b73c58f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_deb9788e282306856b54f5d242fd8234c19a18a6a5c276df31454412b9d87cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb9788e282306856b54f5d242fd8234c19a18a6a5c276df31454412b9d87cac->enter($__internal_deb9788e282306856b54f5d242fd8234c19a18a6a5c276df31454412b9d87cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2a8a50360211456291a87cefd998098188f22b1fb8bd0e8c1eb12332b73c58f6->leave($__internal_2a8a50360211456291a87cefd998098188f22b1fb8bd0e8c1eb12332b73c58f6_prof);

        
        $__internal_deb9788e282306856b54f5d242fd8234c19a18a6a5c276df31454412b9d87cac->leave($__internal_deb9788e282306856b54f5d242fd8234c19a18a6a5c276df31454412b9d87cac_prof);

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

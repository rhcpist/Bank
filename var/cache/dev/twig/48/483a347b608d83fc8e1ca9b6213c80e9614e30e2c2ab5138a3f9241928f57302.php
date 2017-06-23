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
        $__internal_b1dd0b36959c7544ef345d82b76721e606b7854189e685592bf2883f3e0ca3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1dd0b36959c7544ef345d82b76721e606b7854189e685592bf2883f3e0ca3d0->enter($__internal_b1dd0b36959c7544ef345d82b76721e606b7854189e685592bf2883f3e0ca3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c70f7e6cf2efe35318c32d737f7b805043a84fcd2f02cb181a8788f9ad8a536f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70f7e6cf2efe35318c32d737f7b805043a84fcd2f02cb181a8788f9ad8a536f->enter($__internal_c70f7e6cf2efe35318c32d737f7b805043a84fcd2f02cb181a8788f9ad8a536f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b1dd0b36959c7544ef345d82b76721e606b7854189e685592bf2883f3e0ca3d0->leave($__internal_b1dd0b36959c7544ef345d82b76721e606b7854189e685592bf2883f3e0ca3d0_prof);

        
        $__internal_c70f7e6cf2efe35318c32d737f7b805043a84fcd2f02cb181a8788f9ad8a536f->leave($__internal_c70f7e6cf2efe35318c32d737f7b805043a84fcd2f02cb181a8788f9ad8a536f_prof);

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

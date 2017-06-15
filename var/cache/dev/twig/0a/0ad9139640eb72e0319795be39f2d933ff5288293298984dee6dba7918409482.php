<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c11d49803ab542dd1dd269eeb233880a5418b985434d195136e7e320b30faf3f extends Twig_Template
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
        $__internal_648ecfb44e528ba3e8744aead1d3c5edf31d2e464e83344d56f647fb1d7f36f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648ecfb44e528ba3e8744aead1d3c5edf31d2e464e83344d56f647fb1d7f36f5->enter($__internal_648ecfb44e528ba3e8744aead1d3c5edf31d2e464e83344d56f647fb1d7f36f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_35a114c1e15469804cc5fbd23bf3565f2ec4927e059008491561258a7eebbfec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a114c1e15469804cc5fbd23bf3565f2ec4927e059008491561258a7eebbfec->enter($__internal_35a114c1e15469804cc5fbd23bf3565f2ec4927e059008491561258a7eebbfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_648ecfb44e528ba3e8744aead1d3c5edf31d2e464e83344d56f647fb1d7f36f5->leave($__internal_648ecfb44e528ba3e8744aead1d3c5edf31d2e464e83344d56f647fb1d7f36f5_prof);

        
        $__internal_35a114c1e15469804cc5fbd23bf3565f2ec4927e059008491561258a7eebbfec->leave($__internal_35a114c1e15469804cc5fbd23bf3565f2ec4927e059008491561258a7eebbfec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

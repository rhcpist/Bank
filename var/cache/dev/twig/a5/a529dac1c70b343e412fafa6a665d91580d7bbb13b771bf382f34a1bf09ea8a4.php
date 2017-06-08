<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d76401b60b33bf668a0f9e063aaad75e1e7d90659e5678ddced31694edc5b24a extends Twig_Template
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
        $__internal_fc5ce51ff87dc240e12e5bbe08e8b3ff2acf86b9772bf048e4b191ded4f00de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5ce51ff87dc240e12e5bbe08e8b3ff2acf86b9772bf048e4b191ded4f00de6->enter($__internal_fc5ce51ff87dc240e12e5bbe08e8b3ff2acf86b9772bf048e4b191ded4f00de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c54c0e1706b596d00af16d6db3897b9500d4be43826e4911cffebd93592e8085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54c0e1706b596d00af16d6db3897b9500d4be43826e4911cffebd93592e8085->enter($__internal_c54c0e1706b596d00af16d6db3897b9500d4be43826e4911cffebd93592e8085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_fc5ce51ff87dc240e12e5bbe08e8b3ff2acf86b9772bf048e4b191ded4f00de6->leave($__internal_fc5ce51ff87dc240e12e5bbe08e8b3ff2acf86b9772bf048e4b191ded4f00de6_prof);

        
        $__internal_c54c0e1706b596d00af16d6db3897b9500d4be43826e4911cffebd93592e8085->leave($__internal_c54c0e1706b596d00af16d6db3897b9500d4be43826e4911cffebd93592e8085_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

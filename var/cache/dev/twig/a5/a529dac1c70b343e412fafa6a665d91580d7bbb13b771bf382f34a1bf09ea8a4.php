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
        $__internal_2dc5e25ab294a7201707d8b05523c2467240e077a14b897d161aba644e3d9a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc5e25ab294a7201707d8b05523c2467240e077a14b897d161aba644e3d9a99->enter($__internal_2dc5e25ab294a7201707d8b05523c2467240e077a14b897d161aba644e3d9a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5379e644ddc5d25a408b8cf98da426657d750577e69b98b51f0d4b4c9451abf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5379e644ddc5d25a408b8cf98da426657d750577e69b98b51f0d4b4c9451abf1->enter($__internal_5379e644ddc5d25a408b8cf98da426657d750577e69b98b51f0d4b4c9451abf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2dc5e25ab294a7201707d8b05523c2467240e077a14b897d161aba644e3d9a99->leave($__internal_2dc5e25ab294a7201707d8b05523c2467240e077a14b897d161aba644e3d9a99_prof);

        
        $__internal_5379e644ddc5d25a408b8cf98da426657d750577e69b98b51f0d4b4c9451abf1->leave($__internal_5379e644ddc5d25a408b8cf98da426657d750577e69b98b51f0d4b4c9451abf1_prof);

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

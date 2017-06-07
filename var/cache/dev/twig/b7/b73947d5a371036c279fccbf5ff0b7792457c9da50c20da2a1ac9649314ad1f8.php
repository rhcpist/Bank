<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a25df4e4179ce6ccec3bd97587dcc4bafcd10ce3696a1453c04e82a4084ebbaf extends Twig_Template
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
        $__internal_51f3db749f1d65a31168090e8c97138c149a888f3936988b6295fd2e277f3276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f3db749f1d65a31168090e8c97138c149a888f3936988b6295fd2e277f3276->enter($__internal_51f3db749f1d65a31168090e8c97138c149a888f3936988b6295fd2e277f3276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_28b5d411da216afca081808663aa3a43fbd2351f68ad6c98b1f2a88068453219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b5d411da216afca081808663aa3a43fbd2351f68ad6c98b1f2a88068453219->enter($__internal_28b5d411da216afca081808663aa3a43fbd2351f68ad6c98b1f2a88068453219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_51f3db749f1d65a31168090e8c97138c149a888f3936988b6295fd2e277f3276->leave($__internal_51f3db749f1d65a31168090e8c97138c149a888f3936988b6295fd2e277f3276_prof);

        
        $__internal_28b5d411da216afca081808663aa3a43fbd2351f68ad6c98b1f2a88068453219->leave($__internal_28b5d411da216afca081808663aa3a43fbd2351f68ad6c98b1f2a88068453219_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

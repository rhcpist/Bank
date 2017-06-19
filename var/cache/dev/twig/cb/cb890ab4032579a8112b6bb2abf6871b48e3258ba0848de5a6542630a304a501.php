<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9e6fcbfa20dd3ba6a360ca8b1ff3cf1d24faeaaf344c9424ca245b8c62ce0924 extends Twig_Template
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
        $__internal_b37206abcc6e595191afdf88928c06da065ca541292af30c15018271f8611a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37206abcc6e595191afdf88928c06da065ca541292af30c15018271f8611a34->enter($__internal_b37206abcc6e595191afdf88928c06da065ca541292af30c15018271f8611a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_bdc336abac4b2f4dfa30f97baa64f70a28fbdebac28ece90a91a3d4078e309d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc336abac4b2f4dfa30f97baa64f70a28fbdebac28ece90a91a3d4078e309d7->enter($__internal_bdc336abac4b2f4dfa30f97baa64f70a28fbdebac28ece90a91a3d4078e309d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b37206abcc6e595191afdf88928c06da065ca541292af30c15018271f8611a34->leave($__internal_b37206abcc6e595191afdf88928c06da065ca541292af30c15018271f8611a34_prof);

        
        $__internal_bdc336abac4b2f4dfa30f97baa64f70a28fbdebac28ece90a91a3d4078e309d7->leave($__internal_bdc336abac4b2f4dfa30f97baa64f70a28fbdebac28ece90a91a3d4078e309d7_prof);

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

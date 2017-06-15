<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_858b06542bdc7031a028eb06ae337d41456d6838b252d74aff6d7da65a8a5c48 extends Twig_Template
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
        $__internal_da70b5d954b83178d3de550aea29ecacaee29f950672730d12aea76f75295abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da70b5d954b83178d3de550aea29ecacaee29f950672730d12aea76f75295abd->enter($__internal_da70b5d954b83178d3de550aea29ecacaee29f950672730d12aea76f75295abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9df258c2e993cb510273d6790a5805eb58fe7be279c861cfe53c396443e34296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df258c2e993cb510273d6790a5805eb58fe7be279c861cfe53c396443e34296->enter($__internal_9df258c2e993cb510273d6790a5805eb58fe7be279c861cfe53c396443e34296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_da70b5d954b83178d3de550aea29ecacaee29f950672730d12aea76f75295abd->leave($__internal_da70b5d954b83178d3de550aea29ecacaee29f950672730d12aea76f75295abd_prof);

        
        $__internal_9df258c2e993cb510273d6790a5805eb58fe7be279c861cfe53c396443e34296->leave($__internal_9df258c2e993cb510273d6790a5805eb58fe7be279c861cfe53c396443e34296_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

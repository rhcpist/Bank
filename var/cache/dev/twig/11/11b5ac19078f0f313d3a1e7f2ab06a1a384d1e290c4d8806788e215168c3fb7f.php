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
        $__internal_9420516b88cb37881ae2e3efc16e5011d9ecc4cc5d03558b30e58a3322445c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9420516b88cb37881ae2e3efc16e5011d9ecc4cc5d03558b30e58a3322445c70->enter($__internal_9420516b88cb37881ae2e3efc16e5011d9ecc4cc5d03558b30e58a3322445c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_af7e3efd90963fa065b990cb6a252e227d369bff0c0a7d5aed7b9e9b43a27a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7e3efd90963fa065b990cb6a252e227d369bff0c0a7d5aed7b9e9b43a27a4c->enter($__internal_af7e3efd90963fa065b990cb6a252e227d369bff0c0a7d5aed7b9e9b43a27a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9420516b88cb37881ae2e3efc16e5011d9ecc4cc5d03558b30e58a3322445c70->leave($__internal_9420516b88cb37881ae2e3efc16e5011d9ecc4cc5d03558b30e58a3322445c70_prof);

        
        $__internal_af7e3efd90963fa065b990cb6a252e227d369bff0c0a7d5aed7b9e9b43a27a4c->leave($__internal_af7e3efd90963fa065b990cb6a252e227d369bff0c0a7d5aed7b9e9b43a27a4c_prof);

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

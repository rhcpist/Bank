<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4521e57988663f942f825baef3aaaee0dc1135af0e29d27fbaef4e1f67898356 extends Twig_Template
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
        $__internal_8e659ef5ebe1516dd219739fe8bd726b5a09b7be7742d16044bc1e625776256b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e659ef5ebe1516dd219739fe8bd726b5a09b7be7742d16044bc1e625776256b->enter($__internal_8e659ef5ebe1516dd219739fe8bd726b5a09b7be7742d16044bc1e625776256b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_abf71b643128df9f0d7e9fb3f43bc0c790a776db607730dc52e98c0432097618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf71b643128df9f0d7e9fb3f43bc0c790a776db607730dc52e98c0432097618->enter($__internal_abf71b643128df9f0d7e9fb3f43bc0c790a776db607730dc52e98c0432097618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8e659ef5ebe1516dd219739fe8bd726b5a09b7be7742d16044bc1e625776256b->leave($__internal_8e659ef5ebe1516dd219739fe8bd726b5a09b7be7742d16044bc1e625776256b_prof);

        
        $__internal_abf71b643128df9f0d7e9fb3f43bc0c790a776db607730dc52e98c0432097618->leave($__internal_abf71b643128df9f0d7e9fb3f43bc0c790a776db607730dc52e98c0432097618_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_53e3ec17deaf3e807ff6788d98b0f6a510c11af9f5c061221bf78e87e06bffc5 extends Twig_Template
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
        $__internal_d5a28d1b46a78176c80e207268c0bb99dbf51a1ebdd76b01a30423a07391b46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a28d1b46a78176c80e207268c0bb99dbf51a1ebdd76b01a30423a07391b46b->enter($__internal_d5a28d1b46a78176c80e207268c0bb99dbf51a1ebdd76b01a30423a07391b46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b6412c662150faa38b20c0fffff75683612c13f142597628518fa9880957e766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6412c662150faa38b20c0fffff75683612c13f142597628518fa9880957e766->enter($__internal_b6412c662150faa38b20c0fffff75683612c13f142597628518fa9880957e766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d5a28d1b46a78176c80e207268c0bb99dbf51a1ebdd76b01a30423a07391b46b->leave($__internal_d5a28d1b46a78176c80e207268c0bb99dbf51a1ebdd76b01a30423a07391b46b_prof);

        
        $__internal_b6412c662150faa38b20c0fffff75683612c13f142597628518fa9880957e766->leave($__internal_b6412c662150faa38b20c0fffff75683612c13f142597628518fa9880957e766_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

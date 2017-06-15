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
        $__internal_6b469b64624b717eddddf9869d4a825a418dfd0b9d15d76f4e00629257d56a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b469b64624b717eddddf9869d4a825a418dfd0b9d15d76f4e00629257d56a87->enter($__internal_6b469b64624b717eddddf9869d4a825a418dfd0b9d15d76f4e00629257d56a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_dae522efd333ec3692dcc3d0d832d0e7a5b4b847f91986d09e6ae7c511c1f902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae522efd333ec3692dcc3d0d832d0e7a5b4b847f91986d09e6ae7c511c1f902->enter($__internal_dae522efd333ec3692dcc3d0d832d0e7a5b4b847f91986d09e6ae7c511c1f902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6b469b64624b717eddddf9869d4a825a418dfd0b9d15d76f4e00629257d56a87->leave($__internal_6b469b64624b717eddddf9869d4a825a418dfd0b9d15d76f4e00629257d56a87_prof);

        
        $__internal_dae522efd333ec3692dcc3d0d832d0e7a5b4b847f91986d09e6ae7c511c1f902->leave($__internal_dae522efd333ec3692dcc3d0d832d0e7a5b4b847f91986d09e6ae7c511c1f902_prof);

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

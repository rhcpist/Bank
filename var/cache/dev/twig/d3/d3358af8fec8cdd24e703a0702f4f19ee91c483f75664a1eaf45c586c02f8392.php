<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_baf9636fa2070d1c1066968c7e7c42060988712dac978a86927756e110c3f700 extends Twig_Template
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
        $__internal_3674a3c237549ff198fbfdececa52fea2b99590c565d076cd11c2cbacc49fb24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3674a3c237549ff198fbfdececa52fea2b99590c565d076cd11c2cbacc49fb24->enter($__internal_3674a3c237549ff198fbfdececa52fea2b99590c565d076cd11c2cbacc49fb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_f3ee582aa8687f1fbaba5fd928a85d18b6cdd266bc8feadf13b3759f76cba40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ee582aa8687f1fbaba5fd928a85d18b6cdd266bc8feadf13b3759f76cba40f->enter($__internal_f3ee582aa8687f1fbaba5fd928a85d18b6cdd266bc8feadf13b3759f76cba40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3674a3c237549ff198fbfdececa52fea2b99590c565d076cd11c2cbacc49fb24->leave($__internal_3674a3c237549ff198fbfdececa52fea2b99590c565d076cd11c2cbacc49fb24_prof);

        
        $__internal_f3ee582aa8687f1fbaba5fd928a85d18b6cdd266bc8feadf13b3759f76cba40f->leave($__internal_f3ee582aa8687f1fbaba5fd928a85d18b6cdd266bc8feadf13b3759f76cba40f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}

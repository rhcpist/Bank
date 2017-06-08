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
        $__internal_dafac30950b47382128feafee397b0fe691e0536454b3ce07b505b1a1ca55c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafac30950b47382128feafee397b0fe691e0536454b3ce07b505b1a1ca55c29->enter($__internal_dafac30950b47382128feafee397b0fe691e0536454b3ce07b505b1a1ca55c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_bd4635a008a06a13a42c24fba85f32c7b50c58119eabba49e29bdb27abc66e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4635a008a06a13a42c24fba85f32c7b50c58119eabba49e29bdb27abc66e34->enter($__internal_bd4635a008a06a13a42c24fba85f32c7b50c58119eabba49e29bdb27abc66e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_dafac30950b47382128feafee397b0fe691e0536454b3ce07b505b1a1ca55c29->leave($__internal_dafac30950b47382128feafee397b0fe691e0536454b3ce07b505b1a1ca55c29_prof);

        
        $__internal_bd4635a008a06a13a42c24fba85f32c7b50c58119eabba49e29bdb27abc66e34->leave($__internal_bd4635a008a06a13a42c24fba85f32c7b50c58119eabba49e29bdb27abc66e34_prof);

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

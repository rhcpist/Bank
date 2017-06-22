<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b04551a39dae58e67eafa561918bff12c05a9b290a89b5c1f4c9d0a03dccd80f extends Twig_Template
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
        $__internal_78e757a935f97dfacd27ee84beb2dba95cbc32484ede0c8193a3f780f7acddac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e757a935f97dfacd27ee84beb2dba95cbc32484ede0c8193a3f780f7acddac->enter($__internal_78e757a935f97dfacd27ee84beb2dba95cbc32484ede0c8193a3f780f7acddac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9af7368d13975a3a5ca4a747e54a6f19655d822fa7fe17c5fd58686f5fef1d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af7368d13975a3a5ca4a747e54a6f19655d822fa7fe17c5fd58686f5fef1d11->enter($__internal_9af7368d13975a3a5ca4a747e54a6f19655d822fa7fe17c5fd58686f5fef1d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_78e757a935f97dfacd27ee84beb2dba95cbc32484ede0c8193a3f780f7acddac->leave($__internal_78e757a935f97dfacd27ee84beb2dba95cbc32484ede0c8193a3f780f7acddac_prof);

        
        $__internal_9af7368d13975a3a5ca4a747e54a6f19655d822fa7fe17c5fd58686f5fef1d11->leave($__internal_9af7368d13975a3a5ca4a747e54a6f19655d822fa7fe17c5fd58686f5fef1d11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

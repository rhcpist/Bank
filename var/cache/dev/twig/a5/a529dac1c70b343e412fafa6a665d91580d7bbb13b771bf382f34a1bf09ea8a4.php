<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d76401b60b33bf668a0f9e063aaad75e1e7d90659e5678ddced31694edc5b24a extends Twig_Template
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
        $__internal_46490b82d065df7bc63bbcb93ac1cf49484d7f7b3e1cc6b5b1724fcd581fc0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46490b82d065df7bc63bbcb93ac1cf49484d7f7b3e1cc6b5b1724fcd581fc0cb->enter($__internal_46490b82d065df7bc63bbcb93ac1cf49484d7f7b3e1cc6b5b1724fcd581fc0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5353a780617729c180e61191ba740f5a06324fa5e1116eba1b9a8711df09d90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5353a780617729c180e61191ba740f5a06324fa5e1116eba1b9a8711df09d90b->enter($__internal_5353a780617729c180e61191ba740f5a06324fa5e1116eba1b9a8711df09d90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_46490b82d065df7bc63bbcb93ac1cf49484d7f7b3e1cc6b5b1724fcd581fc0cb->leave($__internal_46490b82d065df7bc63bbcb93ac1cf49484d7f7b3e1cc6b5b1724fcd581fc0cb_prof);

        
        $__internal_5353a780617729c180e61191ba740f5a06324fa5e1116eba1b9a8711df09d90b->leave($__internal_5353a780617729c180e61191ba740f5a06324fa5e1116eba1b9a8711df09d90b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_433d8d8d8d6d032b1c23430d720061342c7da858be2f01405c192a43039443db extends Twig_Template
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
        $__internal_9783cc6a5a47fe1d68cd5b9593d2c1d29f89e0fce3d367dfa36fd6a166c10a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9783cc6a5a47fe1d68cd5b9593d2c1d29f89e0fce3d367dfa36fd6a166c10a67->enter($__internal_9783cc6a5a47fe1d68cd5b9593d2c1d29f89e0fce3d367dfa36fd6a166c10a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9f89f3f30511e7d3808547b7b2dc4093d273a091609bbe835d71eb5e324030d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f89f3f30511e7d3808547b7b2dc4093d273a091609bbe835d71eb5e324030d4->enter($__internal_9f89f3f30511e7d3808547b7b2dc4093d273a091609bbe835d71eb5e324030d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9783cc6a5a47fe1d68cd5b9593d2c1d29f89e0fce3d367dfa36fd6a166c10a67->leave($__internal_9783cc6a5a47fe1d68cd5b9593d2c1d29f89e0fce3d367dfa36fd6a166c10a67_prof);

        
        $__internal_9f89f3f30511e7d3808547b7b2dc4093d273a091609bbe835d71eb5e324030d4->leave($__internal_9f89f3f30511e7d3808547b7b2dc4093d273a091609bbe835d71eb5e324030d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

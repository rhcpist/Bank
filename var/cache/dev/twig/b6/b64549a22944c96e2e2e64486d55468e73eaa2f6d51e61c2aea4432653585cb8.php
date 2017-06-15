<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b125537520881b25f4e88375af82196f40b0ca54c123dea3caa6be44fbf2e804 extends Twig_Template
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
        $__internal_6756a185a48c9e08153714688d0c53454972884c1c55c172b9aa84fa298da8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6756a185a48c9e08153714688d0c53454972884c1c55c172b9aa84fa298da8b5->enter($__internal_6756a185a48c9e08153714688d0c53454972884c1c55c172b9aa84fa298da8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a597e7c1c5c98e550ac35be742a13d25e735a1c62ea9580e6090b6675ac8785c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a597e7c1c5c98e550ac35be742a13d25e735a1c62ea9580e6090b6675ac8785c->enter($__internal_a597e7c1c5c98e550ac35be742a13d25e735a1c62ea9580e6090b6675ac8785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6756a185a48c9e08153714688d0c53454972884c1c55c172b9aa84fa298da8b5->leave($__internal_6756a185a48c9e08153714688d0c53454972884c1c55c172b9aa84fa298da8b5_prof);

        
        $__internal_a597e7c1c5c98e550ac35be742a13d25e735a1c62ea9580e6090b6675ac8785c->leave($__internal_a597e7c1c5c98e550ac35be742a13d25e735a1c62ea9580e6090b6675ac8785c_prof);

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

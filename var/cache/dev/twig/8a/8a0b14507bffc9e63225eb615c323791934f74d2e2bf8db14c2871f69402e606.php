<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_dc15120a8cf4bdd369fed72e48b100507e9a7cb82457949727f47a89b29e8f5f extends Twig_Template
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
        $__internal_b90dda96c2fea618f8ede91863f963477e6d6295d6e0119ec62dfe5255d6552b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90dda96c2fea618f8ede91863f963477e6d6295d6e0119ec62dfe5255d6552b->enter($__internal_b90dda96c2fea618f8ede91863f963477e6d6295d6e0119ec62dfe5255d6552b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_949c65aaef0d7da6c01ebb18fdd8f51d6b6bbfbd059e49936ad2805c4b22740b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949c65aaef0d7da6c01ebb18fdd8f51d6b6bbfbd059e49936ad2805c4b22740b->enter($__internal_949c65aaef0d7da6c01ebb18fdd8f51d6b6bbfbd059e49936ad2805c4b22740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b90dda96c2fea618f8ede91863f963477e6d6295d6e0119ec62dfe5255d6552b->leave($__internal_b90dda96c2fea618f8ede91863f963477e6d6295d6e0119ec62dfe5255d6552b_prof);

        
        $__internal_949c65aaef0d7da6c01ebb18fdd8f51d6b6bbfbd059e49936ad2805c4b22740b->leave($__internal_949c65aaef0d7da6c01ebb18fdd8f51d6b6bbfbd059e49936ad2805c4b22740b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}

<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2a0a6935aa6074436ff35cb419d068dc2fc13c9a106970dc2fcc535d4c251d5d extends Twig_Template
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
        $__internal_8f460b37ec832dc96bd14498ac31daa5938ae2593d36194d9251116f78c1b09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f460b37ec832dc96bd14498ac31daa5938ae2593d36194d9251116f78c1b09b->enter($__internal_8f460b37ec832dc96bd14498ac31daa5938ae2593d36194d9251116f78c1b09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f1dff0a85dd1f88b2ead850924bfcf73a404871b6e1ecbf7fd48ffe62254f262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1dff0a85dd1f88b2ead850924bfcf73a404871b6e1ecbf7fd48ffe62254f262->enter($__internal_f1dff0a85dd1f88b2ead850924bfcf73a404871b6e1ecbf7fd48ffe62254f262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8f460b37ec832dc96bd14498ac31daa5938ae2593d36194d9251116f78c1b09b->leave($__internal_8f460b37ec832dc96bd14498ac31daa5938ae2593d36194d9251116f78c1b09b_prof);

        
        $__internal_f1dff0a85dd1f88b2ead850924bfcf73a404871b6e1ecbf7fd48ffe62254f262->leave($__internal_f1dff0a85dd1f88b2ead850924bfcf73a404871b6e1ecbf7fd48ffe62254f262_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

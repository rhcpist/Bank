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
        $__internal_2083b17576a44565062222998aed59cf14f158407ed936a4c8731127f5711a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2083b17576a44565062222998aed59cf14f158407ed936a4c8731127f5711a73->enter($__internal_2083b17576a44565062222998aed59cf14f158407ed936a4c8731127f5711a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c8394502400da82cc07784ed3c8077e4c1b5336f44921466301cf43949833d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8394502400da82cc07784ed3c8077e4c1b5336f44921466301cf43949833d6e->enter($__internal_c8394502400da82cc07784ed3c8077e4c1b5336f44921466301cf43949833d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2083b17576a44565062222998aed59cf14f158407ed936a4c8731127f5711a73->leave($__internal_2083b17576a44565062222998aed59cf14f158407ed936a4c8731127f5711a73_prof);

        
        $__internal_c8394502400da82cc07784ed3c8077e4c1b5336f44921466301cf43949833d6e->leave($__internal_c8394502400da82cc07784ed3c8077e4c1b5336f44921466301cf43949833d6e_prof);

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

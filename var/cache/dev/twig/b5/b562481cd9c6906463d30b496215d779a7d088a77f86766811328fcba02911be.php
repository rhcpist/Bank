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
        $__internal_7f4f136015b4ce92c30d9664c39a68a5bba80bfbc461f2f0f8f69163f737b18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4f136015b4ce92c30d9664c39a68a5bba80bfbc461f2f0f8f69163f737b18c->enter($__internal_7f4f136015b4ce92c30d9664c39a68a5bba80bfbc461f2f0f8f69163f737b18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_69353cce0d5f1b6490e11823e49b7694185cd6c7a8bfc27191f7410abf77a4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69353cce0d5f1b6490e11823e49b7694185cd6c7a8bfc27191f7410abf77a4c6->enter($__internal_69353cce0d5f1b6490e11823e49b7694185cd6c7a8bfc27191f7410abf77a4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7f4f136015b4ce92c30d9664c39a68a5bba80bfbc461f2f0f8f69163f737b18c->leave($__internal_7f4f136015b4ce92c30d9664c39a68a5bba80bfbc461f2f0f8f69163f737b18c_prof);

        
        $__internal_69353cce0d5f1b6490e11823e49b7694185cd6c7a8bfc27191f7410abf77a4c6->leave($__internal_69353cce0d5f1b6490e11823e49b7694185cd6c7a8bfc27191f7410abf77a4c6_prof);

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

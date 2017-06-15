<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_394bc6669649c668d9d9cb2165d9a5968dffc7cb05116ed68fe42c9437b2a39b extends Twig_Template
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
        $__internal_b6255aeeb8f983604b464407f8716ebef3f5b19fa590d81456b1fa360a3f708b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6255aeeb8f983604b464407f8716ebef3f5b19fa590d81456b1fa360a3f708b->enter($__internal_b6255aeeb8f983604b464407f8716ebef3f5b19fa590d81456b1fa360a3f708b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6a162b9ab794ce062e83970c3be4801f49e366fa52cb04cb5e1fa4c879f56c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a162b9ab794ce062e83970c3be4801f49e366fa52cb04cb5e1fa4c879f56c89->enter($__internal_6a162b9ab794ce062e83970c3be4801f49e366fa52cb04cb5e1fa4c879f56c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b6255aeeb8f983604b464407f8716ebef3f5b19fa590d81456b1fa360a3f708b->leave($__internal_b6255aeeb8f983604b464407f8716ebef3f5b19fa590d81456b1fa360a3f708b_prof);

        
        $__internal_6a162b9ab794ce062e83970c3be4801f49e366fa52cb04cb5e1fa4c879f56c89->leave($__internal_6a162b9ab794ce062e83970c3be4801f49e366fa52cb04cb5e1fa4c879f56c89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

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
        $__internal_ab8e37947c0b43d6c432995ddf3b82010a027bf82a8bf123d9d6f863e24adf50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab8e37947c0b43d6c432995ddf3b82010a027bf82a8bf123d9d6f863e24adf50->enter($__internal_ab8e37947c0b43d6c432995ddf3b82010a027bf82a8bf123d9d6f863e24adf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e93aa083f0b77ce32206314ff89b55f08902b04ecd005359b234aad4cc664b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93aa083f0b77ce32206314ff89b55f08902b04ecd005359b234aad4cc664b06->enter($__internal_e93aa083f0b77ce32206314ff89b55f08902b04ecd005359b234aad4cc664b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ab8e37947c0b43d6c432995ddf3b82010a027bf82a8bf123d9d6f863e24adf50->leave($__internal_ab8e37947c0b43d6c432995ddf3b82010a027bf82a8bf123d9d6f863e24adf50_prof);

        
        $__internal_e93aa083f0b77ce32206314ff89b55f08902b04ecd005359b234aad4cc664b06->leave($__internal_e93aa083f0b77ce32206314ff89b55f08902b04ecd005359b234aad4cc664b06_prof);

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

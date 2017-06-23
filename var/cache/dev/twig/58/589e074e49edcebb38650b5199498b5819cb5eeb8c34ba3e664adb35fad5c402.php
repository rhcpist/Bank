<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7a40c4d176e85ef0512a9755b5b57ff19dee90f470901ad21f1d1a7aae431709 extends Twig_Template
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
        $__internal_749eb2d20361cc2a246323453a39815413d76e9fc7e7c72ff5492ccf7515571c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749eb2d20361cc2a246323453a39815413d76e9fc7e7c72ff5492ccf7515571c->enter($__internal_749eb2d20361cc2a246323453a39815413d76e9fc7e7c72ff5492ccf7515571c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c905e9c409f41ab484a09438d81f04090705fedac0eb99ca83b2bc45bce5e275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c905e9c409f41ab484a09438d81f04090705fedac0eb99ca83b2bc45bce5e275->enter($__internal_c905e9c409f41ab484a09438d81f04090705fedac0eb99ca83b2bc45bce5e275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_749eb2d20361cc2a246323453a39815413d76e9fc7e7c72ff5492ccf7515571c->leave($__internal_749eb2d20361cc2a246323453a39815413d76e9fc7e7c72ff5492ccf7515571c_prof);

        
        $__internal_c905e9c409f41ab484a09438d81f04090705fedac0eb99ca83b2bc45bce5e275->leave($__internal_c905e9c409f41ab484a09438d81f04090705fedac0eb99ca83b2bc45bce5e275_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

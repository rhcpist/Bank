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
        $__internal_25bb94826bab8d4f36de4574c33e8d127a9f5bf30ba1bd47f1ff19597408bab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bb94826bab8d4f36de4574c33e8d127a9f5bf30ba1bd47f1ff19597408bab0->enter($__internal_25bb94826bab8d4f36de4574c33e8d127a9f5bf30ba1bd47f1ff19597408bab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c70727699b50e6b0757556433f05d9b102e6e907ab8106a8d1729cc3ae325fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70727699b50e6b0757556433f05d9b102e6e907ab8106a8d1729cc3ae325fae->enter($__internal_c70727699b50e6b0757556433f05d9b102e6e907ab8106a8d1729cc3ae325fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_25bb94826bab8d4f36de4574c33e8d127a9f5bf30ba1bd47f1ff19597408bab0->leave($__internal_25bb94826bab8d4f36de4574c33e8d127a9f5bf30ba1bd47f1ff19597408bab0_prof);

        
        $__internal_c70727699b50e6b0757556433f05d9b102e6e907ab8106a8d1729cc3ae325fae->leave($__internal_c70727699b50e6b0757556433f05d9b102e6e907ab8106a8d1729cc3ae325fae_prof);

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

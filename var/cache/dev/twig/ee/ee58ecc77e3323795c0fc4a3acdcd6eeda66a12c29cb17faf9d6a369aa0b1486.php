<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9743eddbce4dfd9160d0002f692056342d8c9f8595cc4d1526a4f331da33629f extends Twig_Template
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
        $__internal_3a9dbe9bafcc317a564a2754d77078ff52cdc73b4ec36b406ab06b6b8bf9186e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9dbe9bafcc317a564a2754d77078ff52cdc73b4ec36b406ab06b6b8bf9186e->enter($__internal_3a9dbe9bafcc317a564a2754d77078ff52cdc73b4ec36b406ab06b6b8bf9186e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7e745fef72804f78e4859aa860373dc7f36bb6d0ec9404da30fba50b703bbd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e745fef72804f78e4859aa860373dc7f36bb6d0ec9404da30fba50b703bbd3d->enter($__internal_7e745fef72804f78e4859aa860373dc7f36bb6d0ec9404da30fba50b703bbd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3a9dbe9bafcc317a564a2754d77078ff52cdc73b4ec36b406ab06b6b8bf9186e->leave($__internal_3a9dbe9bafcc317a564a2754d77078ff52cdc73b4ec36b406ab06b6b8bf9186e_prof);

        
        $__internal_7e745fef72804f78e4859aa860373dc7f36bb6d0ec9404da30fba50b703bbd3d->leave($__internal_7e745fef72804f78e4859aa860373dc7f36bb6d0ec9404da30fba50b703bbd3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

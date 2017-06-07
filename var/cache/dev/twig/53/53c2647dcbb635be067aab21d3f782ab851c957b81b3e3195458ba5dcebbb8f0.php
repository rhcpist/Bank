<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_33e36c3e0a4df6ed0b4cc5b4c9ad7718d8e7ad16234f8ca87c1c116210713291 extends Twig_Template
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
        $__internal_41fb46defda44f329f444abb111b895a42638e14d52068542ef16eaee4d5ed54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41fb46defda44f329f444abb111b895a42638e14d52068542ef16eaee4d5ed54->enter($__internal_41fb46defda44f329f444abb111b895a42638e14d52068542ef16eaee4d5ed54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_68b69a85c12b167ec72d454d19b7e4653fe84df4851dcaa73ac5e690a18081ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b69a85c12b167ec72d454d19b7e4653fe84df4851dcaa73ac5e690a18081ac->enter($__internal_68b69a85c12b167ec72d454d19b7e4653fe84df4851dcaa73ac5e690a18081ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_41fb46defda44f329f444abb111b895a42638e14d52068542ef16eaee4d5ed54->leave($__internal_41fb46defda44f329f444abb111b895a42638e14d52068542ef16eaee4d5ed54_prof);

        
        $__internal_68b69a85c12b167ec72d454d19b7e4653fe84df4851dcaa73ac5e690a18081ac->leave($__internal_68b69a85c12b167ec72d454d19b7e4653fe84df4851dcaa73ac5e690a18081ac_prof);

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

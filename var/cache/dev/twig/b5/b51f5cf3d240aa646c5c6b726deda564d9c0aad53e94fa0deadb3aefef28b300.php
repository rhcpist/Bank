<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0369cc1779a867bdc102e7466f48756e7d1adf5ccc84b6cbb8f02b992229f8bd extends Twig_Template
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
        $__internal_f5d71cec2681ae9697a5077bb2317ad29ccc72547d265fa89ef890161700dc3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d71cec2681ae9697a5077bb2317ad29ccc72547d265fa89ef890161700dc3a->enter($__internal_f5d71cec2681ae9697a5077bb2317ad29ccc72547d265fa89ef890161700dc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3a7c59b311670427cb9abf1f76e672756dcb4d49c3158e1820b4d02cef6c7185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7c59b311670427cb9abf1f76e672756dcb4d49c3158e1820b4d02cef6c7185->enter($__internal_3a7c59b311670427cb9abf1f76e672756dcb4d49c3158e1820b4d02cef6c7185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f5d71cec2681ae9697a5077bb2317ad29ccc72547d265fa89ef890161700dc3a->leave($__internal_f5d71cec2681ae9697a5077bb2317ad29ccc72547d265fa89ef890161700dc3a_prof);

        
        $__internal_3a7c59b311670427cb9abf1f76e672756dcb4d49c3158e1820b4d02cef6c7185->leave($__internal_3a7c59b311670427cb9abf1f76e672756dcb4d49c3158e1820b4d02cef6c7185_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

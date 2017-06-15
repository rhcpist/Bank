<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_30e1e12268fea5f67a8937bde498e2f181626634087e6acda63468be6412fc8a extends Twig_Template
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
        $__internal_a77f77728a150aa44b945973941a8dc7e41b375d360b11c2cbc00a1fd4161b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77f77728a150aa44b945973941a8dc7e41b375d360b11c2cbc00a1fd4161b66->enter($__internal_a77f77728a150aa44b945973941a8dc7e41b375d360b11c2cbc00a1fd4161b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e6b2833cdef18992b80f036a895c65b723bde17709ac879861f4baeaee6514da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b2833cdef18992b80f036a895c65b723bde17709ac879861f4baeaee6514da->enter($__internal_e6b2833cdef18992b80f036a895c65b723bde17709ac879861f4baeaee6514da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a77f77728a150aa44b945973941a8dc7e41b375d360b11c2cbc00a1fd4161b66->leave($__internal_a77f77728a150aa44b945973941a8dc7e41b375d360b11c2cbc00a1fd4161b66_prof);

        
        $__internal_e6b2833cdef18992b80f036a895c65b723bde17709ac879861f4baeaee6514da->leave($__internal_e6b2833cdef18992b80f036a895c65b723bde17709ac879861f4baeaee6514da_prof);

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

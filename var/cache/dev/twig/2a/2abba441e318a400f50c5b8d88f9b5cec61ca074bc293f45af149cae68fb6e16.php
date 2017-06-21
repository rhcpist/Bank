<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a6e51224e61870718d6512b4b0fe3ece1c61774027e5a2aad7d8b1ca13d11712 extends Twig_Template
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
        $__internal_fdbfb24a249486215f25f7770a588668a4592e8ca5e22f934e5dc7e17af66160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbfb24a249486215f25f7770a588668a4592e8ca5e22f934e5dc7e17af66160->enter($__internal_fdbfb24a249486215f25f7770a588668a4592e8ca5e22f934e5dc7e17af66160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7b997c8917d48870a6311641c157c8652bba911bfc3f8027b3e09bbb0af172b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b997c8917d48870a6311641c157c8652bba911bfc3f8027b3e09bbb0af172b9->enter($__internal_7b997c8917d48870a6311641c157c8652bba911bfc3f8027b3e09bbb0af172b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fdbfb24a249486215f25f7770a588668a4592e8ca5e22f934e5dc7e17af66160->leave($__internal_fdbfb24a249486215f25f7770a588668a4592e8ca5e22f934e5dc7e17af66160_prof);

        
        $__internal_7b997c8917d48870a6311641c157c8652bba911bfc3f8027b3e09bbb0af172b9->leave($__internal_7b997c8917d48870a6311641c157c8652bba911bfc3f8027b3e09bbb0af172b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

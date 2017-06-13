<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e8f9f9ff741c907d3ec871e16853ec90dcc0976efdec26288143c0dcf0055018 extends Twig_Template
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
        $__internal_099505e2f2048dfa155e3dff7518209c00a86350ced83789e029f2647051d31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099505e2f2048dfa155e3dff7518209c00a86350ced83789e029f2647051d31e->enter($__internal_099505e2f2048dfa155e3dff7518209c00a86350ced83789e029f2647051d31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e2a0a98673dc47d22813cbe5a19b7328e99e813519c494a56b6894eb42978a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a0a98673dc47d22813cbe5a19b7328e99e813519c494a56b6894eb42978a1f->enter($__internal_e2a0a98673dc47d22813cbe5a19b7328e99e813519c494a56b6894eb42978a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_099505e2f2048dfa155e3dff7518209c00a86350ced83789e029f2647051d31e->leave($__internal_099505e2f2048dfa155e3dff7518209c00a86350ced83789e029f2647051d31e_prof);

        
        $__internal_e2a0a98673dc47d22813cbe5a19b7328e99e813519c494a56b6894eb42978a1f->leave($__internal_e2a0a98673dc47d22813cbe5a19b7328e99e813519c494a56b6894eb42978a1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

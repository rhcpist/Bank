<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8dcbddb8cf7147907bbf2a373acdfab5c3c18ce44a5337134dfbeb9f5818ffdb extends Twig_Template
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
        $__internal_9933d8841b5e6133c88eff91734ead93f9e625bf3ed834a46bd577cfbf1567dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9933d8841b5e6133c88eff91734ead93f9e625bf3ed834a46bd577cfbf1567dd->enter($__internal_9933d8841b5e6133c88eff91734ead93f9e625bf3ed834a46bd577cfbf1567dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_eb05be78a6696eb5cfc8d511a4e5b0969da51976d0eec0002824c0abd136bf9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb05be78a6696eb5cfc8d511a4e5b0969da51976d0eec0002824c0abd136bf9f->enter($__internal_eb05be78a6696eb5cfc8d511a4e5b0969da51976d0eec0002824c0abd136bf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9933d8841b5e6133c88eff91734ead93f9e625bf3ed834a46bd577cfbf1567dd->leave($__internal_9933d8841b5e6133c88eff91734ead93f9e625bf3ed834a46bd577cfbf1567dd_prof);

        
        $__internal_eb05be78a6696eb5cfc8d511a4e5b0969da51976d0eec0002824c0abd136bf9f->leave($__internal_eb05be78a6696eb5cfc8d511a4e5b0969da51976d0eec0002824c0abd136bf9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

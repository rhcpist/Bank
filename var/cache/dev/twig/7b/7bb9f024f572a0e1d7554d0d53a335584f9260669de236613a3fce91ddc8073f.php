<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e1a4cde92d962c72bc02a6bf7356365e52d0454c12abc425280dbad9c85b75c1 extends Twig_Template
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
        $__internal_1a89c506296455605a61ef704cfafb1c032c55ddf288f615b20fbdf050445eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a89c506296455605a61ef704cfafb1c032c55ddf288f615b20fbdf050445eed->enter($__internal_1a89c506296455605a61ef704cfafb1c032c55ddf288f615b20fbdf050445eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a2a6fb63165bfbd27374afd234bc7b8696da4723d27783e061dc0203ffd2a354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a6fb63165bfbd27374afd234bc7b8696da4723d27783e061dc0203ffd2a354->enter($__internal_a2a6fb63165bfbd27374afd234bc7b8696da4723d27783e061dc0203ffd2a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1a89c506296455605a61ef704cfafb1c032c55ddf288f615b20fbdf050445eed->leave($__internal_1a89c506296455605a61ef704cfafb1c032c55ddf288f615b20fbdf050445eed_prof);

        
        $__internal_a2a6fb63165bfbd27374afd234bc7b8696da4723d27783e061dc0203ffd2a354->leave($__internal_a2a6fb63165bfbd27374afd234bc7b8696da4723d27783e061dc0203ffd2a354_prof);

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

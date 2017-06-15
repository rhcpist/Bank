<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f223a60a1a0c49be0d8aaf1ab4822ea5bfc6d7e750ca0937584a25792a50d191 extends Twig_Template
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
        $__internal_0c4a57d1879f72f813250540416c317fc1e4a85184d081e8f5b44c004ef3a64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4a57d1879f72f813250540416c317fc1e4a85184d081e8f5b44c004ef3a64f->enter($__internal_0c4a57d1879f72f813250540416c317fc1e4a85184d081e8f5b44c004ef3a64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a621db91d37860d0717d7aadf25e494dc05f3bb99825cf5c5d53cd117f6dae17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a621db91d37860d0717d7aadf25e494dc05f3bb99825cf5c5d53cd117f6dae17->enter($__internal_a621db91d37860d0717d7aadf25e494dc05f3bb99825cf5c5d53cd117f6dae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0c4a57d1879f72f813250540416c317fc1e4a85184d081e8f5b44c004ef3a64f->leave($__internal_0c4a57d1879f72f813250540416c317fc1e4a85184d081e8f5b44c004ef3a64f_prof);

        
        $__internal_a621db91d37860d0717d7aadf25e494dc05f3bb99825cf5c5d53cd117f6dae17->leave($__internal_a621db91d37860d0717d7aadf25e494dc05f3bb99825cf5c5d53cd117f6dae17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

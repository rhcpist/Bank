<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a244ba1a0e6444791a41522ff51576a32e3f731afce6c729af7f3b39707e452c extends Twig_Template
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
        $__internal_3c4f25431713d510be78b720d6cfd825dff7027361a9232ef73fc2f28a7701ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4f25431713d510be78b720d6cfd825dff7027361a9232ef73fc2f28a7701ef->enter($__internal_3c4f25431713d510be78b720d6cfd825dff7027361a9232ef73fc2f28a7701ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_809e35e9cd1391abbabadf019fdd59d10e7be0dc5f5d5685b4b2d2986578392c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809e35e9cd1391abbabadf019fdd59d10e7be0dc5f5d5685b4b2d2986578392c->enter($__internal_809e35e9cd1391abbabadf019fdd59d10e7be0dc5f5d5685b4b2d2986578392c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3c4f25431713d510be78b720d6cfd825dff7027361a9232ef73fc2f28a7701ef->leave($__internal_3c4f25431713d510be78b720d6cfd825dff7027361a9232ef73fc2f28a7701ef_prof);

        
        $__internal_809e35e9cd1391abbabadf019fdd59d10e7be0dc5f5d5685b4b2d2986578392c->leave($__internal_809e35e9cd1391abbabadf019fdd59d10e7be0dc5f5d5685b4b2d2986578392c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

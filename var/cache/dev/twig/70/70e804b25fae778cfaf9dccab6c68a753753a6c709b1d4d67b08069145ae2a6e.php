<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ea1c4f1cc86955978fa70e213c9105f0831f4e1764a33f6951e952aca5fe5872 extends Twig_Template
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
        $__internal_dc7171448f0960bf032cadf9451ec703fce134dedbd700fd222f67767798188b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7171448f0960bf032cadf9451ec703fce134dedbd700fd222f67767798188b->enter($__internal_dc7171448f0960bf032cadf9451ec703fce134dedbd700fd222f67767798188b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5a93a974b0560ed1e05d033b7037a38d820a844f843e76b52950b753ce5a360d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a93a974b0560ed1e05d033b7037a38d820a844f843e76b52950b753ce5a360d->enter($__internal_5a93a974b0560ed1e05d033b7037a38d820a844f843e76b52950b753ce5a360d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_dc7171448f0960bf032cadf9451ec703fce134dedbd700fd222f67767798188b->leave($__internal_dc7171448f0960bf032cadf9451ec703fce134dedbd700fd222f67767798188b_prof);

        
        $__internal_5a93a974b0560ed1e05d033b7037a38d820a844f843e76b52950b753ce5a360d->leave($__internal_5a93a974b0560ed1e05d033b7037a38d820a844f843e76b52950b753ce5a360d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

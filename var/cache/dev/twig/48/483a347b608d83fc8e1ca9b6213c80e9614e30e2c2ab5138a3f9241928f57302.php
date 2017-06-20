<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_2b096f7623424383d331962715034115972cd14d4e2a6b01e2116864b106d43f extends Twig_Template
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
        $__internal_0cb21ebe8730720fa7940ac21403ae112b54a7952103b9cdef2ecc9472664d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb21ebe8730720fa7940ac21403ae112b54a7952103b9cdef2ecc9472664d0d->enter($__internal_0cb21ebe8730720fa7940ac21403ae112b54a7952103b9cdef2ecc9472664d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_056425c0605f796e19eeabe96095db8c7c5022d3dc59337afc4be1ce5a475c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056425c0605f796e19eeabe96095db8c7c5022d3dc59337afc4be1ce5a475c3e->enter($__internal_056425c0605f796e19eeabe96095db8c7c5022d3dc59337afc4be1ce5a475c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0cb21ebe8730720fa7940ac21403ae112b54a7952103b9cdef2ecc9472664d0d->leave($__internal_0cb21ebe8730720fa7940ac21403ae112b54a7952103b9cdef2ecc9472664d0d_prof);

        
        $__internal_056425c0605f796e19eeabe96095db8c7c5022d3dc59337afc4be1ce5a475c3e->leave($__internal_056425c0605f796e19eeabe96095db8c7c5022d3dc59337afc4be1ce5a475c3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

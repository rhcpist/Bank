<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_74fee0888ce7d1cc46124886a2df05d9aa7dc8d244bc4aac3723ff5435d16856 extends Twig_Template
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
        $__internal_b865b589829b792c00461eb40bbfa628eef8a1752c55bd968a1590dabd78e9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b865b589829b792c00461eb40bbfa628eef8a1752c55bd968a1590dabd78e9d1->enter($__internal_b865b589829b792c00461eb40bbfa628eef8a1752c55bd968a1590dabd78e9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_00141d3ca411d76d6da994f8eb6ba6dd3355fda1dfe84191c2873fa532c74e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00141d3ca411d76d6da994f8eb6ba6dd3355fda1dfe84191c2873fa532c74e79->enter($__internal_00141d3ca411d76d6da994f8eb6ba6dd3355fda1dfe84191c2873fa532c74e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b865b589829b792c00461eb40bbfa628eef8a1752c55bd968a1590dabd78e9d1->leave($__internal_b865b589829b792c00461eb40bbfa628eef8a1752c55bd968a1590dabd78e9d1_prof);

        
        $__internal_00141d3ca411d76d6da994f8eb6ba6dd3355fda1dfe84191c2873fa532c74e79->leave($__internal_00141d3ca411d76d6da994f8eb6ba6dd3355fda1dfe84191c2873fa532c74e79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}

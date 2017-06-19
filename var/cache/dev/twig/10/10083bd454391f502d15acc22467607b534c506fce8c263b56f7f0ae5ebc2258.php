<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_32329112475ea34c1ae173b6ec6b88107f407d84673104eb8f2cdecb1ffe92c2 extends Twig_Template
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
        $__internal_5ef8848d1f41701c5dcbf2f92fb7ab6819a294feee911f81cd602a579a7521a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef8848d1f41701c5dcbf2f92fb7ab6819a294feee911f81cd602a579a7521a0->enter($__internal_5ef8848d1f41701c5dcbf2f92fb7ab6819a294feee911f81cd602a579a7521a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_b296a30e6f90f9d01bbdeb717da286f8b0f1a6157fb8d763e054f217a3ef481e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b296a30e6f90f9d01bbdeb717da286f8b0f1a6157fb8d763e054f217a3ef481e->enter($__internal_b296a30e6f90f9d01bbdeb717da286f8b0f1a6157fb8d763e054f217a3ef481e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5ef8848d1f41701c5dcbf2f92fb7ab6819a294feee911f81cd602a579a7521a0->leave($__internal_5ef8848d1f41701c5dcbf2f92fb7ab6819a294feee911f81cd602a579a7521a0_prof);

        
        $__internal_b296a30e6f90f9d01bbdeb717da286f8b0f1a6157fb8d763e054f217a3ef481e->leave($__internal_b296a30e6f90f9d01bbdeb717da286f8b0f1a6157fb8d763e054f217a3ef481e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}

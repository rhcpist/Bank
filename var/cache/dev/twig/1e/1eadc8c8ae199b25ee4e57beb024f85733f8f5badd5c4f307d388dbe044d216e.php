<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bb33d0f4ef810b450eb36d3759f87b4e0d7199f40fa4a1563e47ea5b99fc1f3f extends Twig_Template
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
        $__internal_12b348cced8508372f9206582ac0afcb5e72edc18e0acf1a505a56ca9b66eaf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b348cced8508372f9206582ac0afcb5e72edc18e0acf1a505a56ca9b66eaf5->enter($__internal_12b348cced8508372f9206582ac0afcb5e72edc18e0acf1a505a56ca9b66eaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_dd8576d798e7317a4aeb9f608e04fb8c5b59836745977a4c1d0095cb693db200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8576d798e7317a4aeb9f608e04fb8c5b59836745977a4c1d0095cb693db200->enter($__internal_dd8576d798e7317a4aeb9f608e04fb8c5b59836745977a4c1d0095cb693db200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_12b348cced8508372f9206582ac0afcb5e72edc18e0acf1a505a56ca9b66eaf5->leave($__internal_12b348cced8508372f9206582ac0afcb5e72edc18e0acf1a505a56ca9b66eaf5_prof);

        
        $__internal_dd8576d798e7317a4aeb9f608e04fb8c5b59836745977a4c1d0095cb693db200->leave($__internal_dd8576d798e7317a4aeb9f608e04fb8c5b59836745977a4c1d0095cb693db200_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

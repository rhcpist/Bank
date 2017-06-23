<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1f73de28c8555c314b4cd2cbb6a15068e3824302ce7c3d9f4cd8ddf86d2b7340 extends Twig_Template
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
        $__internal_f1ee1bca103a56deff8c02a9ed5ac2ea5a0e0e24f048e5f6d8ae089121b06444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ee1bca103a56deff8c02a9ed5ac2ea5a0e0e24f048e5f6d8ae089121b06444->enter($__internal_f1ee1bca103a56deff8c02a9ed5ac2ea5a0e0e24f048e5f6d8ae089121b06444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_3848733a49a59d55d188715e910faa34f7f746ca04d5f2696817b7bad16c505e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3848733a49a59d55d188715e910faa34f7f746ca04d5f2696817b7bad16c505e->enter($__internal_3848733a49a59d55d188715e910faa34f7f746ca04d5f2696817b7bad16c505e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f1ee1bca103a56deff8c02a9ed5ac2ea5a0e0e24f048e5f6d8ae089121b06444->leave($__internal_f1ee1bca103a56deff8c02a9ed5ac2ea5a0e0e24f048e5f6d8ae089121b06444_prof);

        
        $__internal_3848733a49a59d55d188715e910faa34f7f746ca04d5f2696817b7bad16c505e->leave($__internal_3848733a49a59d55d188715e910faa34f7f746ca04d5f2696817b7bad16c505e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

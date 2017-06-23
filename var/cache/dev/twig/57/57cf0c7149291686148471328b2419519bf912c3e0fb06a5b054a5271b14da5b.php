<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_bb29291f9baeb8b1516216926fa651b9de51c8449dda861550431cbee1893f3c extends Twig_Template
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
        $__internal_678f39a05db4cd6978481b12e3f783b552a22763eea6e5fb75d22b3bdd5f43bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678f39a05db4cd6978481b12e3f783b552a22763eea6e5fb75d22b3bdd5f43bd->enter($__internal_678f39a05db4cd6978481b12e3f783b552a22763eea6e5fb75d22b3bdd5f43bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2207ab06434a40fc7e1a581634caeba87d522c82eb232f031dbd2746e5b61549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2207ab06434a40fc7e1a581634caeba87d522c82eb232f031dbd2746e5b61549->enter($__internal_2207ab06434a40fc7e1a581634caeba87d522c82eb232f031dbd2746e5b61549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_678f39a05db4cd6978481b12e3f783b552a22763eea6e5fb75d22b3bdd5f43bd->leave($__internal_678f39a05db4cd6978481b12e3f783b552a22763eea6e5fb75d22b3bdd5f43bd_prof);

        
        $__internal_2207ab06434a40fc7e1a581634caeba87d522c82eb232f031dbd2746e5b61549->leave($__internal_2207ab06434a40fc7e1a581634caeba87d522c82eb232f031dbd2746e5b61549_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

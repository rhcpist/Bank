<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_947ee5742f996992969c26e198a1fef3cba67edf0c816c9e759e90af77e52808 extends Twig_Template
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
        $__internal_6267a6e13fb7359ada499aa547b70f94392a2915d0773b0ce246bb1fe204731a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6267a6e13fb7359ada499aa547b70f94392a2915d0773b0ce246bb1fe204731a->enter($__internal_6267a6e13fb7359ada499aa547b70f94392a2915d0773b0ce246bb1fe204731a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_206bb995f5a6ac647a280703e5911914b5ec2ac0d1db57d945e01abe15c88442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206bb995f5a6ac647a280703e5911914b5ec2ac0d1db57d945e01abe15c88442->enter($__internal_206bb995f5a6ac647a280703e5911914b5ec2ac0d1db57d945e01abe15c88442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_6267a6e13fb7359ada499aa547b70f94392a2915d0773b0ce246bb1fe204731a->leave($__internal_6267a6e13fb7359ada499aa547b70f94392a2915d0773b0ce246bb1fe204731a_prof);

        
        $__internal_206bb995f5a6ac647a280703e5911914b5ec2ac0d1db57d945e01abe15c88442->leave($__internal_206bb995f5a6ac647a280703e5911914b5ec2ac0d1db57d945e01abe15c88442_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_99cc1db5e1038fa183aec6320123cbeea00dc81ce80fa610b5c421da3c9f0545 extends Twig_Template
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
        $__internal_1ca919113ee8ddb95e7893212e29c81070f16891cab3a7b30b95683a556087c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca919113ee8ddb95e7893212e29c81070f16891cab3a7b30b95683a556087c3->enter($__internal_1ca919113ee8ddb95e7893212e29c81070f16891cab3a7b30b95683a556087c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_fcf395bdbdec2128b029259979353fddca49106840e2ec2eb14f32966e8f5015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf395bdbdec2128b029259979353fddca49106840e2ec2eb14f32966e8f5015->enter($__internal_fcf395bdbdec2128b029259979353fddca49106840e2ec2eb14f32966e8f5015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_1ca919113ee8ddb95e7893212e29c81070f16891cab3a7b30b95683a556087c3->leave($__internal_1ca919113ee8ddb95e7893212e29c81070f16891cab3a7b30b95683a556087c3_prof);

        
        $__internal_fcf395bdbdec2128b029259979353fddca49106840e2ec2eb14f32966e8f5015->leave($__internal_fcf395bdbdec2128b029259979353fddca49106840e2ec2eb14f32966e8f5015_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

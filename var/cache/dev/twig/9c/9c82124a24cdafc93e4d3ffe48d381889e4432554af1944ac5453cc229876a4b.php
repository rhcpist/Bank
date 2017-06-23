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
        $__internal_596aefc1b309174c402ef80498504cd140570ec4c772c1156c846352feca2242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596aefc1b309174c402ef80498504cd140570ec4c772c1156c846352feca2242->enter($__internal_596aefc1b309174c402ef80498504cd140570ec4c772c1156c846352feca2242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5a720b2122d20d1e67722d5b28123c8542852dcf3098d1ec908d13842bafd467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a720b2122d20d1e67722d5b28123c8542852dcf3098d1ec908d13842bafd467->enter($__internal_5a720b2122d20d1e67722d5b28123c8542852dcf3098d1ec908d13842bafd467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_596aefc1b309174c402ef80498504cd140570ec4c772c1156c846352feca2242->leave($__internal_596aefc1b309174c402ef80498504cd140570ec4c772c1156c846352feca2242_prof);

        
        $__internal_5a720b2122d20d1e67722d5b28123c8542852dcf3098d1ec908d13842bafd467->leave($__internal_5a720b2122d20d1e67722d5b28123c8542852dcf3098d1ec908d13842bafd467_prof);

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

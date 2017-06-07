<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_87548fa4a99f36e0c0eacd4ede24a98912a4e6ad1111da6d7ec51112a527a260 extends Twig_Template
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
        $__internal_f181bc8ecd72353d982ce3cf191fea5ddac5bdfb205eaa4697c39107369e66dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f181bc8ecd72353d982ce3cf191fea5ddac5bdfb205eaa4697c39107369e66dd->enter($__internal_f181bc8ecd72353d982ce3cf191fea5ddac5bdfb205eaa4697c39107369e66dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_693ddc3d2e86d18dba40efd4ecac7586f92a5a28e9da554261f0f531eed83c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693ddc3d2e86d18dba40efd4ecac7586f92a5a28e9da554261f0f531eed83c20->enter($__internal_693ddc3d2e86d18dba40efd4ecac7586f92a5a28e9da554261f0f531eed83c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f181bc8ecd72353d982ce3cf191fea5ddac5bdfb205eaa4697c39107369e66dd->leave($__internal_f181bc8ecd72353d982ce3cf191fea5ddac5bdfb205eaa4697c39107369e66dd_prof);

        
        $__internal_693ddc3d2e86d18dba40efd4ecac7586f92a5a28e9da554261f0f531eed83c20->leave($__internal_693ddc3d2e86d18dba40efd4ecac7586f92a5a28e9da554261f0f531eed83c20_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

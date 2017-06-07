<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4fe7c0dbf58c9bea96ffddc2faef3f47c3035f94595037283c68bcf73fd5d9e5 extends Twig_Template
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
        $__internal_749540e54b85420aa5379340ede6c5b01fbf876adf6d16de3cc6036be8465860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749540e54b85420aa5379340ede6c5b01fbf876adf6d16de3cc6036be8465860->enter($__internal_749540e54b85420aa5379340ede6c5b01fbf876adf6d16de3cc6036be8465860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_ed7568d0c0811040358d12342464853e183f7c87689bfefb5bf61f3723f126d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7568d0c0811040358d12342464853e183f7c87689bfefb5bf61f3723f126d6->enter($__internal_ed7568d0c0811040358d12342464853e183f7c87689bfefb5bf61f3723f126d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_749540e54b85420aa5379340ede6c5b01fbf876adf6d16de3cc6036be8465860->leave($__internal_749540e54b85420aa5379340ede6c5b01fbf876adf6d16de3cc6036be8465860_prof);

        
        $__internal_ed7568d0c0811040358d12342464853e183f7c87689bfefb5bf61f3723f126d6->leave($__internal_ed7568d0c0811040358d12342464853e183f7c87689bfefb5bf61f3723f126d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

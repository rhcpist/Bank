<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_71641aa399033baac5c2dbbbe1b43789bfd0f4054ac802a633ac158984b37676 extends Twig_Template
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
        $__internal_0bb6322df97440c9c850324455d093537d744c4a3d0d4a739cc6e1882642d2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb6322df97440c9c850324455d093537d744c4a3d0d4a739cc6e1882642d2e0->enter($__internal_0bb6322df97440c9c850324455d093537d744c4a3d0d4a739cc6e1882642d2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_de1c1b3fd85189555160d17b2fbb333ec2cf77c6daff7cda86ee603348204875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1c1b3fd85189555160d17b2fbb333ec2cf77c6daff7cda86ee603348204875->enter($__internal_de1c1b3fd85189555160d17b2fbb333ec2cf77c6daff7cda86ee603348204875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_0bb6322df97440c9c850324455d093537d744c4a3d0d4a739cc6e1882642d2e0->leave($__internal_0bb6322df97440c9c850324455d093537d744c4a3d0d4a739cc6e1882642d2e0_prof);

        
        $__internal_de1c1b3fd85189555160d17b2fbb333ec2cf77c6daff7cda86ee603348204875->leave($__internal_de1c1b3fd85189555160d17b2fbb333ec2cf77c6daff7cda86ee603348204875_prof);

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

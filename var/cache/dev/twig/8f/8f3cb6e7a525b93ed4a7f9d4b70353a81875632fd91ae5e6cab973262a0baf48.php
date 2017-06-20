<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_72297e949f9c28d0f240464553fc9bf9b9ad9e729144d86e0698839b3f78a304 extends Twig_Template
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
        $__internal_9dbff09046f743b44671324f60fcff05f18f6a88fbf75f087df78efa75d62376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dbff09046f743b44671324f60fcff05f18f6a88fbf75f087df78efa75d62376->enter($__internal_9dbff09046f743b44671324f60fcff05f18f6a88fbf75f087df78efa75d62376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_f4acb0e7ca9a2e69792a63098cd6bed362c25b9881123fb3b3aa7e6da5efe66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4acb0e7ca9a2e69792a63098cd6bed362c25b9881123fb3b3aa7e6da5efe66a->enter($__internal_f4acb0e7ca9a2e69792a63098cd6bed362c25b9881123fb3b3aa7e6da5efe66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_9dbff09046f743b44671324f60fcff05f18f6a88fbf75f087df78efa75d62376->leave($__internal_9dbff09046f743b44671324f60fcff05f18f6a88fbf75f087df78efa75d62376_prof);

        
        $__internal_f4acb0e7ca9a2e69792a63098cd6bed362c25b9881123fb3b3aa7e6da5efe66a->leave($__internal_f4acb0e7ca9a2e69792a63098cd6bed362c25b9881123fb3b3aa7e6da5efe66a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}

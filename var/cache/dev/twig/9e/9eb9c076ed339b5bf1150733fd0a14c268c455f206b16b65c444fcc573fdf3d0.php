<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_70b123c84326f292a8171208fd5f85da041f68b455cd086ca38f92abe331e509 extends Twig_Template
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
        $__internal_4b180c25c35acdebf838649f508be19c7c36df35466027010a0a30aa10ea6f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b180c25c35acdebf838649f508be19c7c36df35466027010a0a30aa10ea6f4c->enter($__internal_4b180c25c35acdebf838649f508be19c7c36df35466027010a0a30aa10ea6f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_2f8aa7fd387fde2cc8d896a4efab95406a7220580f923c0afa74f5461dfd506b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8aa7fd387fde2cc8d896a4efab95406a7220580f923c0afa74f5461dfd506b->enter($__internal_2f8aa7fd387fde2cc8d896a4efab95406a7220580f923c0afa74f5461dfd506b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_4b180c25c35acdebf838649f508be19c7c36df35466027010a0a30aa10ea6f4c->leave($__internal_4b180c25c35acdebf838649f508be19c7c36df35466027010a0a30aa10ea6f4c_prof);

        
        $__internal_2f8aa7fd387fde2cc8d896a4efab95406a7220580f923c0afa74f5461dfd506b->leave($__internal_2f8aa7fd387fde2cc8d896a4efab95406a7220580f923c0afa74f5461dfd506b_prof);

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
", "FOSUserBundle:Group:list_content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}

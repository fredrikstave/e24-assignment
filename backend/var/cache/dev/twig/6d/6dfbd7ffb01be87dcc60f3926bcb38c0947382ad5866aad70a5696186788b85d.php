<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_5475fe7bec01ec544d75285cd5508ea6a45b529129fd7f6db7b0b9582f095efb extends Twig_Template
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
        $__internal_ba2004ef54d9b2770fc0c792e3cf1bb818038653f20bb39c5a194e55267ee3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2004ef54d9b2770fc0c792e3cf1bb818038653f20bb39c5a194e55267ee3a8->enter($__internal_ba2004ef54d9b2770fc0c792e3cf1bb818038653f20bb39c5a194e55267ee3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_eba29f597c411b4f274712a6e7733d064179b099f0279eb028f1041cd78bfde2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba29f597c411b4f274712a6e7733d064179b099f0279eb028f1041cd78bfde2->enter($__internal_eba29f597c411b4f274712a6e7733d064179b099f0279eb028f1041cd78bfde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ba2004ef54d9b2770fc0c792e3cf1bb818038653f20bb39c5a194e55267ee3a8->leave($__internal_ba2004ef54d9b2770fc0c792e3cf1bb818038653f20bb39c5a194e55267ee3a8_prof);

        
        $__internal_eba29f597c411b4f274712a6e7733d064179b099f0279eb028f1041cd78bfde2->leave($__internal_eba29f597c411b4f274712a6e7733d064179b099f0279eb028f1041cd78bfde2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/Fredrik/Documents/Jobb/E24/assignment/backend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}

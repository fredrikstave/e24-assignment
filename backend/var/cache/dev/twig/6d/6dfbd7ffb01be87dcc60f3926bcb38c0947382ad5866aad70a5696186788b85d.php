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
        $__internal_36a7205d846616e4abf082430240aa887f39f8d097f05e5b92fe86b51456de1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a7205d846616e4abf082430240aa887f39f8d097f05e5b92fe86b51456de1c->enter($__internal_36a7205d846616e4abf082430240aa887f39f8d097f05e5b92fe86b51456de1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_0830aa5a6580e63d823f07fcfc5148d49ad9b1cd050518b0eec9d498c89d94a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0830aa5a6580e63d823f07fcfc5148d49ad9b1cd050518b0eec9d498c89d94a1->enter($__internal_0830aa5a6580e63d823f07fcfc5148d49ad9b1cd050518b0eec9d498c89d94a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_36a7205d846616e4abf082430240aa887f39f8d097f05e5b92fe86b51456de1c->leave($__internal_36a7205d846616e4abf082430240aa887f39f8d097f05e5b92fe86b51456de1c_prof);

        
        $__internal_0830aa5a6580e63d823f07fcfc5148d49ad9b1cd050518b0eec9d498c89d94a1->leave($__internal_0830aa5a6580e63d823f07fcfc5148d49ad9b1cd050518b0eec9d498c89d94a1_prof);

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

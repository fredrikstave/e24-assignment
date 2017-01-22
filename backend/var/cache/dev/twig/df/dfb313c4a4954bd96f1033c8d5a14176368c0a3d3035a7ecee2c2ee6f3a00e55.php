<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_38e609401824bcaf7ae8ae7b282eeac0e433550cc538c4d2ae8e25c149efbe04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8804e31fe82bd71afa8f3eed4dd57653e5393d1eafbbf7638efa9449e7ad6964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8804e31fe82bd71afa8f3eed4dd57653e5393d1eafbbf7638efa9449e7ad6964->enter($__internal_8804e31fe82bd71afa8f3eed4dd57653e5393d1eafbbf7638efa9449e7ad6964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9262ead2658c0db4204eb0a92788cdb40595f958432f21c58819050806d8a587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9262ead2658c0db4204eb0a92788cdb40595f958432f21c58819050806d8a587->enter($__internal_9262ead2658c0db4204eb0a92788cdb40595f958432f21c58819050806d8a587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8804e31fe82bd71afa8f3eed4dd57653e5393d1eafbbf7638efa9449e7ad6964->leave($__internal_8804e31fe82bd71afa8f3eed4dd57653e5393d1eafbbf7638efa9449e7ad6964_prof);

        
        $__internal_9262ead2658c0db4204eb0a92788cdb40595f958432f21c58819050806d8a587->leave($__internal_9262ead2658c0db4204eb0a92788cdb40595f958432f21c58819050806d8a587_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d38af47d84b945594764e75b03b4d4d4f667645f2cce9c2b49b4c47737dca4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38af47d84b945594764e75b03b4d4d4f667645f2cce9c2b49b4c47737dca4bf->enter($__internal_d38af47d84b945594764e75b03b4d4d4f667645f2cce9c2b49b4c47737dca4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5e4b6cf45225c4c4ed925f64914355663bf4ec49ae9134dc7acce437e85fc8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4b6cf45225c4c4ed925f64914355663bf4ec49ae9134dc7acce437e85fc8b0->enter($__internal_5e4b6cf45225c4c4ed925f64914355663bf4ec49ae9134dc7acce437e85fc8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5e4b6cf45225c4c4ed925f64914355663bf4ec49ae9134dc7acce437e85fc8b0->leave($__internal_5e4b6cf45225c4c4ed925f64914355663bf4ec49ae9134dc7acce437e85fc8b0_prof);

        
        $__internal_d38af47d84b945594764e75b03b4d4d4f667645f2cce9c2b49b4c47737dca4bf->leave($__internal_d38af47d84b945594764e75b03b4d4d4f667645f2cce9c2b49b4c47737dca4bf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_750baf72bd13c4bf942f6245e31ede650e889a25a9955c7be0431793460d7c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750baf72bd13c4bf942f6245e31ede650e889a25a9955c7be0431793460d7c88->enter($__internal_750baf72bd13c4bf942f6245e31ede650e889a25a9955c7be0431793460d7c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e3ece7b01d56950471467c8291cff135c98eead844bf6f45466222d1aa616e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ece7b01d56950471467c8291cff135c98eead844bf6f45466222d1aa616e3b->enter($__internal_e3ece7b01d56950471467c8291cff135c98eead844bf6f45466222d1aa616e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e3ece7b01d56950471467c8291cff135c98eead844bf6f45466222d1aa616e3b->leave($__internal_e3ece7b01d56950471467c8291cff135c98eead844bf6f45466222d1aa616e3b_prof);

        
        $__internal_750baf72bd13c4bf942f6245e31ede650e889a25a9955c7be0431793460d7c88->leave($__internal_750baf72bd13c4bf942f6245e31ede650e889a25a9955c7be0431793460d7c88_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e17bdb2b6604fb6e82f2f0777b3f7651e1ed604b36ae85de4a1de208a12cfb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17bdb2b6604fb6e82f2f0777b3f7651e1ed604b36ae85de4a1de208a12cfb9d->enter($__internal_e17bdb2b6604fb6e82f2f0777b3f7651e1ed604b36ae85de4a1de208a12cfb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c80491c92ab3a5e5825afd547a15c88e92e23f2bda14f51fa2b39844001ed208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80491c92ab3a5e5825afd547a15c88e92e23f2bda14f51fa2b39844001ed208->enter($__internal_c80491c92ab3a5e5825afd547a15c88e92e23f2bda14f51fa2b39844001ed208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c80491c92ab3a5e5825afd547a15c88e92e23f2bda14f51fa2b39844001ed208->leave($__internal_c80491c92ab3a5e5825afd547a15c88e92e23f2bda14f51fa2b39844001ed208_prof);

        
        $__internal_e17bdb2b6604fb6e82f2f0777b3f7651e1ed604b36ae85de4a1de208a12cfb9d->leave($__internal_e17bdb2b6604fb6e82f2f0777b3f7651e1ed604b36ae85de4a1de208a12cfb9d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Fredrik/Documents/Jobb/E24/assignment/backend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

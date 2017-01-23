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
        $__internal_2e92a4780e2e38dc16e9fd11c0cefc9da891777ee459e7c051156c89d0a818d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e92a4780e2e38dc16e9fd11c0cefc9da891777ee459e7c051156c89d0a818d4->enter($__internal_2e92a4780e2e38dc16e9fd11c0cefc9da891777ee459e7c051156c89d0a818d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_43f5b95e5d9b7f44be28896d8056c8eedf76ec2026c718ee80adab5a32ec58d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f5b95e5d9b7f44be28896d8056c8eedf76ec2026c718ee80adab5a32ec58d8->enter($__internal_43f5b95e5d9b7f44be28896d8056c8eedf76ec2026c718ee80adab5a32ec58d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e92a4780e2e38dc16e9fd11c0cefc9da891777ee459e7c051156c89d0a818d4->leave($__internal_2e92a4780e2e38dc16e9fd11c0cefc9da891777ee459e7c051156c89d0a818d4_prof);

        
        $__internal_43f5b95e5d9b7f44be28896d8056c8eedf76ec2026c718ee80adab5a32ec58d8->leave($__internal_43f5b95e5d9b7f44be28896d8056c8eedf76ec2026c718ee80adab5a32ec58d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d2d8e14a7423660599689f05b3783f1ff34eea6c8deb126803c1701d20c2158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2d8e14a7423660599689f05b3783f1ff34eea6c8deb126803c1701d20c2158->enter($__internal_3d2d8e14a7423660599689f05b3783f1ff34eea6c8deb126803c1701d20c2158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1969d7b64e722187a26abc287bd9893c14c91a4143206a86d3c1406ee5ce6357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1969d7b64e722187a26abc287bd9893c14c91a4143206a86d3c1406ee5ce6357->enter($__internal_1969d7b64e722187a26abc287bd9893c14c91a4143206a86d3c1406ee5ce6357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1969d7b64e722187a26abc287bd9893c14c91a4143206a86d3c1406ee5ce6357->leave($__internal_1969d7b64e722187a26abc287bd9893c14c91a4143206a86d3c1406ee5ce6357_prof);

        
        $__internal_3d2d8e14a7423660599689f05b3783f1ff34eea6c8deb126803c1701d20c2158->leave($__internal_3d2d8e14a7423660599689f05b3783f1ff34eea6c8deb126803c1701d20c2158_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_292a35dff2c70a1dc1057840f820e760d030bb7aa05efdab13f47fd4c898c944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292a35dff2c70a1dc1057840f820e760d030bb7aa05efdab13f47fd4c898c944->enter($__internal_292a35dff2c70a1dc1057840f820e760d030bb7aa05efdab13f47fd4c898c944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ebe777e2b2d7f26f994eebbb6c5fe9650b5b6a5257785b1d55f54dd08d92a40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe777e2b2d7f26f994eebbb6c5fe9650b5b6a5257785b1d55f54dd08d92a40c->enter($__internal_ebe777e2b2d7f26f994eebbb6c5fe9650b5b6a5257785b1d55f54dd08d92a40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ebe777e2b2d7f26f994eebbb6c5fe9650b5b6a5257785b1d55f54dd08d92a40c->leave($__internal_ebe777e2b2d7f26f994eebbb6c5fe9650b5b6a5257785b1d55f54dd08d92a40c_prof);

        
        $__internal_292a35dff2c70a1dc1057840f820e760d030bb7aa05efdab13f47fd4c898c944->leave($__internal_292a35dff2c70a1dc1057840f820e760d030bb7aa05efdab13f47fd4c898c944_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cdf4689fe84aefb68495345930441aff13352ae1431b7a4588fc6eadfb45199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdf4689fe84aefb68495345930441aff13352ae1431b7a4588fc6eadfb45199->enter($__internal_1cdf4689fe84aefb68495345930441aff13352ae1431b7a4588fc6eadfb45199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_50d50f6f584c5bfe4eb08726fe2bfce3faf080d1cb30a3ec86ba575442001a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d50f6f584c5bfe4eb08726fe2bfce3faf080d1cb30a3ec86ba575442001a2b->enter($__internal_50d50f6f584c5bfe4eb08726fe2bfce3faf080d1cb30a3ec86ba575442001a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_50d50f6f584c5bfe4eb08726fe2bfce3faf080d1cb30a3ec86ba575442001a2b->leave($__internal_50d50f6f584c5bfe4eb08726fe2bfce3faf080d1cb30a3ec86ba575442001a2b_prof);

        
        $__internal_1cdf4689fe84aefb68495345930441aff13352ae1431b7a4588fc6eadfb45199->leave($__internal_1cdf4689fe84aefb68495345930441aff13352ae1431b7a4588fc6eadfb45199_prof);

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

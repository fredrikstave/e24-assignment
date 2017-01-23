<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3023badc437443884a2df1c8ab9b7423951bb9cef5f54778b74aaa444b5dec76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a52b7b87978a759a20f36b12e1b3b45e62df9a8fb1e52f67cacf70876845305b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52b7b87978a759a20f36b12e1b3b45e62df9a8fb1e52f67cacf70876845305b->enter($__internal_a52b7b87978a759a20f36b12e1b3b45e62df9a8fb1e52f67cacf70876845305b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2f88da413f7512868e26ab20894f904db21f2e2fae82d4eec66d6b88360fc035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f88da413f7512868e26ab20894f904db21f2e2fae82d4eec66d6b88360fc035->enter($__internal_2f88da413f7512868e26ab20894f904db21f2e2fae82d4eec66d6b88360fc035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a52b7b87978a759a20f36b12e1b3b45e62df9a8fb1e52f67cacf70876845305b->leave($__internal_a52b7b87978a759a20f36b12e1b3b45e62df9a8fb1e52f67cacf70876845305b_prof);

        
        $__internal_2f88da413f7512868e26ab20894f904db21f2e2fae82d4eec66d6b88360fc035->leave($__internal_2f88da413f7512868e26ab20894f904db21f2e2fae82d4eec66d6b88360fc035_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83d62376205803e28a7fa47ef8aa7a4596316a00ee60d7985855888717ef1f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d62376205803e28a7fa47ef8aa7a4596316a00ee60d7985855888717ef1f2a->enter($__internal_83d62376205803e28a7fa47ef8aa7a4596316a00ee60d7985855888717ef1f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd28a7b8d0fa647367da23ce4cc40605488721751981888b16cfa3bb244cbbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd28a7b8d0fa647367da23ce4cc40605488721751981888b16cfa3bb244cbbed->enter($__internal_bd28a7b8d0fa647367da23ce4cc40605488721751981888b16cfa3bb244cbbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_bd28a7b8d0fa647367da23ce4cc40605488721751981888b16cfa3bb244cbbed->leave($__internal_bd28a7b8d0fa647367da23ce4cc40605488721751981888b16cfa3bb244cbbed_prof);

        
        $__internal_83d62376205803e28a7fa47ef8aa7a4596316a00ee60d7985855888717ef1f2a->leave($__internal_83d62376205803e28a7fa47ef8aa7a4596316a00ee60d7985855888717ef1f2a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_32ba1e6849fd2815c93fe868eacbce9d16bdc20cff59994147c99d24f031f6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ba1e6849fd2815c93fe868eacbce9d16bdc20cff59994147c99d24f031f6ec->enter($__internal_32ba1e6849fd2815c93fe868eacbce9d16bdc20cff59994147c99d24f031f6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e36bebef8a1c83f92cd73458468930d200135df53c1c3c0ccf4574439c88d3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36bebef8a1c83f92cd73458468930d200135df53c1c3c0ccf4574439c88d3d3->enter($__internal_e36bebef8a1c83f92cd73458468930d200135df53c1c3c0ccf4574439c88d3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e36bebef8a1c83f92cd73458468930d200135df53c1c3c0ccf4574439c88d3d3->leave($__internal_e36bebef8a1c83f92cd73458468930d200135df53c1c3c0ccf4574439c88d3d3_prof);

        
        $__internal_32ba1e6849fd2815c93fe868eacbce9d16bdc20cff59994147c99d24f031f6ec->leave($__internal_32ba1e6849fd2815c93fe868eacbce9d16bdc20cff59994147c99d24f031f6ec_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_dac724b179b20fbf99c962ef63d0ce1551efc3109df1bcc8d946a5198359cbf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac724b179b20fbf99c962ef63d0ce1551efc3109df1bcc8d946a5198359cbf6->enter($__internal_dac724b179b20fbf99c962ef63d0ce1551efc3109df1bcc8d946a5198359cbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4350f03e7ca3277730a21cda4747c7b25db0da6bf97636c78427952e7c82a8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4350f03e7ca3277730a21cda4747c7b25db0da6bf97636c78427952e7c82a8df->enter($__internal_4350f03e7ca3277730a21cda4747c7b25db0da6bf97636c78427952e7c82a8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4350f03e7ca3277730a21cda4747c7b25db0da6bf97636c78427952e7c82a8df->leave($__internal_4350f03e7ca3277730a21cda4747c7b25db0da6bf97636c78427952e7c82a8df_prof);

        
        $__internal_dac724b179b20fbf99c962ef63d0ce1551efc3109df1bcc8d946a5198359cbf6->leave($__internal_dac724b179b20fbf99c962ef63d0ce1551efc3109df1bcc8d946a5198359cbf6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Fredrik/Documents/Jobb/E24/assignment/backend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

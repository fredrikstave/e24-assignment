<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a20fb111e3d38bcd4caac7d7cb1c6f6e1a1ad6adb37219baf1b628fff21054aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bdbaa135f3c953e54d14a7b25c5d26795539e68c137c6373ef5fba14c04d5d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bdbaa135f3c953e54d14a7b25c5d26795539e68c137c6373ef5fba14c04d5d7->enter($__internal_8bdbaa135f3c953e54d14a7b25c5d26795539e68c137c6373ef5fba14c04d5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a6b2905a9f8935b30d681ca95fcee2242e35c35b122958b9e127564f9dbb35eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b2905a9f8935b30d681ca95fcee2242e35c35b122958b9e127564f9dbb35eb->enter($__internal_a6b2905a9f8935b30d681ca95fcee2242e35c35b122958b9e127564f9dbb35eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bdbaa135f3c953e54d14a7b25c5d26795539e68c137c6373ef5fba14c04d5d7->leave($__internal_8bdbaa135f3c953e54d14a7b25c5d26795539e68c137c6373ef5fba14c04d5d7_prof);

        
        $__internal_a6b2905a9f8935b30d681ca95fcee2242e35c35b122958b9e127564f9dbb35eb->leave($__internal_a6b2905a9f8935b30d681ca95fcee2242e35c35b122958b9e127564f9dbb35eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46a45db54f8a671ed34eac69bc9917e59e99cc84e6971ea9390afe76e5720d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a45db54f8a671ed34eac69bc9917e59e99cc84e6971ea9390afe76e5720d73->enter($__internal_46a45db54f8a671ed34eac69bc9917e59e99cc84e6971ea9390afe76e5720d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ad922068f836119183d73bb276f12eb2050ee3816a0475b896f973c0aceaf4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad922068f836119183d73bb276f12eb2050ee3816a0475b896f973c0aceaf4df->enter($__internal_ad922068f836119183d73bb276f12eb2050ee3816a0475b896f973c0aceaf4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ad922068f836119183d73bb276f12eb2050ee3816a0475b896f973c0aceaf4df->leave($__internal_ad922068f836119183d73bb276f12eb2050ee3816a0475b896f973c0aceaf4df_prof);

        
        $__internal_46a45db54f8a671ed34eac69bc9917e59e99cc84e6971ea9390afe76e5720d73->leave($__internal_46a45db54f8a671ed34eac69bc9917e59e99cc84e6971ea9390afe76e5720d73_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/Fredrik/Documents/Jobb/E24/assignment/backend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0b869cc09203fefdf21b13f2438533f22748e1fe5625386ee3f5314a667d7187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_83768f3fd87886acad3ed6ebb4f380fc541064299ddb720f4e02d204e552194b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83768f3fd87886acad3ed6ebb4f380fc541064299ddb720f4e02d204e552194b->enter($__internal_83768f3fd87886acad3ed6ebb4f380fc541064299ddb720f4e02d204e552194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_22185aa9a0877aafcad8d22766c7e926822bed9a121635da98a75ee176d7c761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22185aa9a0877aafcad8d22766c7e926822bed9a121635da98a75ee176d7c761->enter($__internal_22185aa9a0877aafcad8d22766c7e926822bed9a121635da98a75ee176d7c761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83768f3fd87886acad3ed6ebb4f380fc541064299ddb720f4e02d204e552194b->leave($__internal_83768f3fd87886acad3ed6ebb4f380fc541064299ddb720f4e02d204e552194b_prof);

        
        $__internal_22185aa9a0877aafcad8d22766c7e926822bed9a121635da98a75ee176d7c761->leave($__internal_22185aa9a0877aafcad8d22766c7e926822bed9a121635da98a75ee176d7c761_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ebeecb3f8e4a2e45d6cc985d39141150a538bb9cf6878bbf860bc0aa2f07f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebeecb3f8e4a2e45d6cc985d39141150a538bb9cf6878bbf860bc0aa2f07f36->enter($__internal_5ebeecb3f8e4a2e45d6cc985d39141150a538bb9cf6878bbf860bc0aa2f07f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6246262591544c6ab4136cd5be65b89546dc206b74162beb593a4f46683a75c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6246262591544c6ab4136cd5be65b89546dc206b74162beb593a4f46683a75c5->enter($__internal_6246262591544c6ab4136cd5be65b89546dc206b74162beb593a4f46683a75c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6246262591544c6ab4136cd5be65b89546dc206b74162beb593a4f46683a75c5->leave($__internal_6246262591544c6ab4136cd5be65b89546dc206b74162beb593a4f46683a75c5_prof);

        
        $__internal_5ebeecb3f8e4a2e45d6cc985d39141150a538bb9cf6878bbf860bc0aa2f07f36->leave($__internal_5ebeecb3f8e4a2e45d6cc985d39141150a538bb9cf6878bbf860bc0aa2f07f36_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_714d94292b60c800ee2b1b658a61ce8774a49ae363e37a98fc98caecce52c7b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714d94292b60c800ee2b1b658a61ce8774a49ae363e37a98fc98caecce52c7b6->enter($__internal_714d94292b60c800ee2b1b658a61ce8774a49ae363e37a98fc98caecce52c7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_90881aee38e80f0823e27fe087e2639affe348e9a5bbeb3abb4b9b7f7161ee88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90881aee38e80f0823e27fe087e2639affe348e9a5bbeb3abb4b9b7f7161ee88->enter($__internal_90881aee38e80f0823e27fe087e2639affe348e9a5bbeb3abb4b9b7f7161ee88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_90881aee38e80f0823e27fe087e2639affe348e9a5bbeb3abb4b9b7f7161ee88->leave($__internal_90881aee38e80f0823e27fe087e2639affe348e9a5bbeb3abb4b9b7f7161ee88_prof);

        
        $__internal_714d94292b60c800ee2b1b658a61ce8774a49ae363e37a98fc98caecce52c7b6->leave($__internal_714d94292b60c800ee2b1b658a61ce8774a49ae363e37a98fc98caecce52c7b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35b36e27ea955c62afee317b446cc384db0270f7171a180238fa2c4dd38455ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b36e27ea955c62afee317b446cc384db0270f7171a180238fa2c4dd38455ba->enter($__internal_35b36e27ea955c62afee317b446cc384db0270f7171a180238fa2c4dd38455ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45d2d89c41bccbaa6558675d055508084f5dc8b84fea1fab5786a2cc0c1f4ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d2d89c41bccbaa6558675d055508084f5dc8b84fea1fab5786a2cc0c1f4ffa->enter($__internal_45d2d89c41bccbaa6558675d055508084f5dc8b84fea1fab5786a2cc0c1f4ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_45d2d89c41bccbaa6558675d055508084f5dc8b84fea1fab5786a2cc0c1f4ffa->leave($__internal_45d2d89c41bccbaa6558675d055508084f5dc8b84fea1fab5786a2cc0c1f4ffa_prof);

        
        $__internal_35b36e27ea955c62afee317b446cc384db0270f7171a180238fa2c4dd38455ba->leave($__internal_35b36e27ea955c62afee317b446cc384db0270f7171a180238fa2c4dd38455ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Fredrik/Documents/Jobb/E24/assignment/backend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

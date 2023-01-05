<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* categories/search/partials/terrainData.html.twig */
class __TwigTemplate_f3b6576696c7652242917ed740dff3c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/search/partials/terrainData.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/search/partials/terrainData.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categories/search/partials/terrainData.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home Page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "    
    <style>
        .posts{
            border-radius: 10px;
            box-shadow: 0 10px 16px rgba(0,0,0,.25);
            margin-bottom: 40px;
            padding: 40px;
            margin-top: 40px;
        }
        img{
            border-radius: 10px;
        }
        h4{
            margin-top: 15px;
           
        }
        .btn-primary
        {
            margin-top: 10px;
        }
    </style>
    <h4>Nos térrains agricoles</h4>
    <h4>Résultats</h4>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 29
            echo "        <section class=\"posts\">
            <article>
            <h2>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "intitule", [], "any", false, false, false, 31), "html", null, true);
            echo "</h2>
                <div class=\"metadat\">
                ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "localisation", [], "any", false, false, false, 33), "html", null, true);
            echo "
                <span class=\"badge bg-success\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "prix", [], "any", false, false, false, 34), "html", null, true);
            echo " € </span>
                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "surface", [], "any", false, false, false, 35), "html", null, true);
            echo "
                
                </div>
                <div class=\"content\">
                <p>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "descriptif", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Read more</a>
                </div>
                <hr>     
            </article>
        </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    <div class=\"navigation\">
        ";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 47, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "categories/search/partials/terrainData.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 47,  156 => 46,  144 => 40,  140 => 39,  133 => 35,  129 => 34,  125 => 33,  120 => 31,  116 => 29,  112 => 28,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home Page{% endblock %}

{% block body %}    
    <style>
        .posts{
            border-radius: 10px;
            box-shadow: 0 10px 16px rgba(0,0,0,.25);
            margin-bottom: 40px;
            padding: 40px;
            margin-top: 40px;
        }
        img{
            border-radius: 10px;
        }
        h4{
            margin-top: 15px;
           
        }
        .btn-primary
        {
            margin-top: 10px;
        }
    </style>
    <h4>Nos térrains agricoles</h4>
    <h4>Résultats</h4>
    {% for post in posts%}
        <section class=\"posts\">
            <article>
            <h2>{{post.intitule}}</h2>
                <div class=\"metadat\">
                {{post.localisation}}
                <span class=\"badge bg-success\">{{post.prix}} € </span>
                {{post.surface}}
                
                </div>
                <div class=\"content\">
                <p>{{post.descriptif}}</p>
                <a href=\"{{ path('post_show' , {'id' : post.id})}}\">Read more</a>
                </div>
                <hr>     
            </article>
        </section>
    {% endfor%}
    <div class=\"navigation\">
        {{ knp_pagination_render(posts) }}
    </div>
{% endblock %}
", "categories/search/partials/terrainData.html.twig", "C:\\Users\\KOMENAN\\Downloads\\projetPwL3-main\\projetPwL3-main\\blog\\templates\\categories\\search\\partials\\terrainData.html.twig");
    }
}

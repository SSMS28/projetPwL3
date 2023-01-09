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

/* categories/batiment.html.twig */
class __TwigTemplate_8d7c88d0c256be688d41b467fddeea82 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/batiment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/batiment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categories/batiment.html.twig", 1);
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
            margin-top: 15px;
        }
    </style>
    <h4>Nos Bâtiments</h4>
    
    <div class=\"form-group\">
        <label class=\"col-form-label col-form-label-sm mt-1\" for=\"inputSmall\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Localisation</font></font></label>
        <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"ex: mots clés\" id=\"inputSmall\"> 
    </div> 
    ";
        // line 33
        echo "    <div class=\"form-group\">
        <label class=\"col-form-label col-form-label-sm mt-1\" for=\"inputSmall\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prix</font></font></label>
        ";
        // line 36
        echo "        <input class=\"form-control form-control-sm\" type=\"number\" placeholder=\"ex: 300\" id=\"inputSmall\">  
    </div>
    <div class=\"form-group\">
        <label class=\"col-form-label col-form-label-sm mt-1\" for=\"inputSmall\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Intitulé ou Descriptif</font></font></label>
        ";
        // line 41
        echo "        <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"ex: mots clés\" id=\"inputSmall\"> 
    </div>
    <button type=\"button\" class=\"btn btn-primary\">Recherche</font></font></button>
    
    <h4>Résultats</h4>
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 47
            echo "        <section class=\"posts\">
            <article>
            <h2>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "intitule", [], "any", false, false, false, 49), "html", null, true);
            echo "</h2>
                <div class=\"metadat\">
                ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "localisation", [], "any", false, false, false, 51), "html", null, true);
            echo "
                <span class=\"badge bg-success\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "prix", [], "any", false, false, false, 52), "html", null, true);
            echo " € </span>
                ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "surface", [], "any", false, false, false, 53), "html", null, true);
            echo "
                
                </div>
                <div class=\"content\">
                <p>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "descriptif", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
                <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 58)]), "html", null, true);
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
        // line 64
        echo "
    <div class=\"navigation\">
        ";
        // line 66
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 66, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "categories/batiment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 66,  177 => 64,  165 => 58,  161 => 57,  154 => 53,  150 => 52,  146 => 51,  141 => 49,  137 => 47,  133 => 46,  126 => 41,  120 => 36,  116 => 33,  78 => 5,  59 => 3,  36 => 1,);
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
            margin-top: 15px;
        }
    </style>
    <h4>Nos Bâtiments</h4>
    
    <div class=\"form-group\">
        <label class=\"col-form-label col-form-label-sm mt-1\" for=\"inputSmall\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Localisation</font></font></label>
        <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"ex: mots clés\" id=\"inputSmall\"> 
    </div> 
    {# {{form_start(search)}} {{form_row(search.localisation)}} #}
    <div class=\"form-group\">
        <label class=\"col-form-label col-form-label-sm mt-1\" for=\"inputSmall\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prix</font></font></label>
        {# {{form_row(search.minprice)}} #}
        <input class=\"form-control form-control-sm\" type=\"number\" placeholder=\"ex: 300\" id=\"inputSmall\">  
    </div>
    <div class=\"form-group\">
        <label class=\"col-form-label col-form-label-sm mt-1\" for=\"inputSmall\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Intitulé ou Descriptif</font></font></label>
        {# {{form_row(search.minprice)}} {{form_end(search)}} #}
        <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\"ex: mots clés\" id=\"inputSmall\"> 
    </div>
    <button type=\"button\" class=\"btn btn-primary\">Recherche</font></font></button>
    
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
", "categories/batiment.html.twig", "/Users/magalseck/Documents/GitHub/projetPwL3/blog/templates/categories/batiment.html.twig");
    }
}

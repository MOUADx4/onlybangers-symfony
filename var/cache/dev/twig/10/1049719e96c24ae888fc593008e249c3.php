<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* articles_view/index.html.twig */
class __TwigTemplate_2c6ec5bfe422601c5bba950825e860cd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles_view/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles_view/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tous les Articles - OnlyBangers";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    ";
        // line 8
        yield "    <section class=\"py-5 text-center bg-dark text-white rounded shadow-sm mb-5\">
        <h1 class=\"display-4 fw-bold\">Tous les Articles</h1>
        <p class=\"lead mt-3\">
            Explore l’ensemble de nos contenus : nouveautés, analyses, classiques du rap US.
        </p>
    </section>

    ";
        // line 16
        yield "    <section class=\"section-bordered mb-5\">
        <h2 class=\"mb-4 text-center fw-bold\">📰 Tous nos articles</h2>

        <div class=\"row\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            yield "                <div class=\"col-md-3 mb-4\">
                    <div class=\"card h-100 shadow-sm bg-dark text-white border-0\">

                        <img
                            src=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("uploads/articles/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 25))) : ("images/article-default.jpg"))), "html", null, true);
            yield "\"
                            class=\"card-img-top rounded-top\"
                            alt=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 27), "html", null, true);
            yield "\"
                            style=\"height: 180px; object-fit: cover;\"
                        >

                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title fw-bold text-white\">
                                ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 33), "html", null, true);
            yield "
                            </h5>

                            <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\"
                               class=\"btn btn-outline-light btn-sm mt-2\">
                                Lire l'article
                            </a>
                        </div>

                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 44
        if (!$context['_iterated']) {
            // line 45
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun article disponible pour le moment.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "        </div>
    </section>

    <style>
        .section-bordered {
            border: 3px solid #000;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
    </style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "articles_view/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  173 => 49,  164 => 45,  162 => 44,  149 => 36,  143 => 33,  134 => 27,  129 => 25,  123 => 21,  118 => 20,  112 => 16,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tous les Articles - OnlyBangers{% endblock %}

{% block body %}

    {# 🔥 Hero Section #}
    <section class=\"py-5 text-center bg-dark text-white rounded shadow-sm mb-5\">
        <h1 class=\"display-4 fw-bold\">Tous les Articles</h1>
        <p class=\"lead mt-3\">
            Explore l’ensemble de nos contenus : nouveautés, analyses, classiques du rap US.
        </p>
    </section>

    {# 🔥 Grille des articles (AVEC BORDURE NOIRE) #}
    <section class=\"section-bordered mb-5\">
        <h2 class=\"mb-4 text-center fw-bold\">📰 Tous nos articles</h2>

        <div class=\"row\">
            {% for article in articles %}
                <div class=\"col-md-3 mb-4\">
                    <div class=\"card h-100 shadow-sm bg-dark text-white border-0\">

                        <img
                            src=\"{{ asset(article.image ? 'uploads/articles/' ~ article.image : 'images/article-default.jpg') }}\"
                            class=\"card-img-top rounded-top\"
                            alt=\"{{ article.title }}\"
                            style=\"height: 180px; object-fit: cover;\"
                        >

                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title fw-bold text-white\">
                                {{ article.title }}
                            </h5>

                            <a href=\"{{ path('article_show', {'id': article.id}) }}\"
                               class=\"btn btn-outline-light btn-sm mt-2\">
                                Lire l'article
                            </a>
                        </div>

                    </div>
                </div>
            {% else %}
                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun article disponible pour le moment.</p>
                </div>
            {% endfor %}
        </div>
    </section>

    <style>
        .section-bordered {
            border: 3px solid #000;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
    </style>

{% endblock %}
", "articles_view/index.html.twig", "/Users/mouad/Documents/OnlyBangers/onlybangers-symfony/templates/articles_view/index.html.twig");
    }
}

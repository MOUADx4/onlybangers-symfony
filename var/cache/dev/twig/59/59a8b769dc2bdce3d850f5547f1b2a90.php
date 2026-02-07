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

/* home/index.html.twig */
class __TwigTemplate_004d0f7732a8c6addb8729a598f04436 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Accueil - OnlyBangers";
        
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
        <h1 class=\"display-4 fw-bold\">OnlyBangers</h1>
        <p class=\"lead mt-3\">
            Les classiques du rap US, les nouveautés, et les analyses qui font vibrer la culture.
        </p>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_view");
        yield "\" class=\"btn btn-secondary btn-lg mt-3\">
            Explorer les articles
        </a>
    </section>

    ";
        // line 19
        yield "    <h2 class=\"mb-4 text-center fw-bold\">📰 Derniers articles</h2>

    <div class=\"row\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            yield "            <div class=\"col-md-3 mb-4\">
                <div class=\"card h-100 shadow-sm border-0\">

                    <img
                        src=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("uploads/articles/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 27))) : ("images/article-default.jpg"))), "html", null, true);
            yield "\"
                        class=\"card-img-top rounded-top\"
                        alt=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 29), "html", null, true);
            yield "\"
                        style=\"height: 180px; object-fit: cover;\"
                    >

                    <div class=\"card-body\">
                        <h5 class=\"card-title fw-bold\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 34), "html", null, true);
            yield "</h5>

                        <p class=\"card-text text-muted text-truncate\">
                            ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 37), 0, 100) . "..."), "html", null, true);
            yield "
                        </p>

                        <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\"
                           class=\"btn btn-outline-secondary btn-sm\">
                            Lire l'article
                        </a>
                    </div>

                    <div class=\"card-footer small text-muted\">
                        Publié le ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
            yield "
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 51
        if (!$context['_iterated']) {
            // line 52
            yield "            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucun article pour le moment.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "    </div>

    ";
        // line 59
        yield "    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_view");
        yield "\" class=\"btn btn-secondary btn-lg\">
            Voir tous les articles →
        </a>
    </div>

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
        return "home/index.html.twig";
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
        return array (  196 => 60,  193 => 59,  189 => 56,  180 => 52,  178 => 51,  169 => 47,  159 => 40,  153 => 37,  147 => 34,  139 => 29,  134 => 27,  128 => 23,  123 => 22,  118 => 19,  110 => 13,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - OnlyBangers{% endblock %}

{% block body %}

    {# 🔥 Hero Section #}
    <section class=\"py-5 text-center bg-dark text-white rounded shadow-sm mb-5\">
        <h1 class=\"display-4 fw-bold\">OnlyBangers</h1>
        <p class=\"lead mt-3\">
            Les classiques du rap US, les nouveautés, et les analyses qui font vibrer la culture.
        </p>
        <a href=\"{{ path('articles_view') }}\" class=\"btn btn-secondary btn-lg mt-3\">
            Explorer les articles
        </a>
    </section>

    {# 🔥 Section Articles Récents #}
    <h2 class=\"mb-4 text-center fw-bold\">📰 Derniers articles</h2>

    <div class=\"row\">
        {% for article in articles %}
            <div class=\"col-md-3 mb-4\">
                <div class=\"card h-100 shadow-sm border-0\">

                    <img
                        src=\"{{ asset(article.image ? 'uploads/articles/' ~ article.image : 'images/article-default.jpg') }}\"
                        class=\"card-img-top rounded-top\"
                        alt=\"{{ article.title }}\"
                        style=\"height: 180px; object-fit: cover;\"
                    >

                    <div class=\"card-body\">
                        <h5 class=\"card-title fw-bold\">{{ article.title }}</h5>

                        <p class=\"card-text text-muted text-truncate\">
                            {{ article.content|slice(0, 100) ~ '...' }}
                        </p>

                        <a href=\"{{ path('article_show', {'id': article.id}) }}\"
                           class=\"btn btn-outline-secondary btn-sm\">
                            Lire l'article
                        </a>
                    </div>

                    <div class=\"card-footer small text-muted\">
                        Publié le {{ article.createdAt|date('d/m/Y') }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucun article pour le moment.</p>
            </div>
        {% endfor %}
    </div>

    {# 🔥 Bouton Voir Plus #}
    <div class=\"text-center mt-4\">
        <a href=\"{{ path('articles_view') }}\" class=\"btn btn-secondary btn-lg\">
            Voir tous les articles →
        </a>
    </div>

{% endblock %}
", "home/index.html.twig", "/Users/mouad/Documents/OnlyBangers/onlybangers-symfony/templates/home/index.html.twig");
    }
}

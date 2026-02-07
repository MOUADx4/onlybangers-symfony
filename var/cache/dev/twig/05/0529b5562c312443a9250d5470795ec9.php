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

/* article/show.html.twig */
class __TwigTemplate_3ab12c70aa111d149ea70a83fb8cc0e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " - OnlyBangers";
        
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
        yield "<article class=\"mb-5\">

    <h1 class=\"mb-2\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>

    <p class=\"text-muted\">
        Posté par <strong>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "author", [], "any", false, false, false, 11), "username", [], "any", false, false, false, 11), "html", null, true);
        yield "</strong>
        le ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "createdAt", [], "any", false, false, false, 12), "d/m/Y H:i"), "html", null, true);
        yield "
    </p>

    ";
        // line 16
        yield "    <img 
        src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/articles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17))), "html", null, true);
        yield "\" 
        alt=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        yield "\" 
        class=\"img-fluid mb-4\"
        style=\"max-height: 400px; object-fit: contain; width: 100%;\"
    >


    <hr>

    <div class=\"mb-4\">
        ";
        // line 27
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "content", [], "any", false, false, false, 27), "html", null, true));
        yield "
    </div>

    <h4 class=\"mt-5\">Commentaires</h4>

    ";
        // line 32
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["latestComments"]) || array_key_exists("latestComments", $context) ? $context["latestComments"] : (function () { throw new RuntimeError('Variable "latestComments" does not exist.', 32, $this->source); })()))) {
            // line 33
            yield "        <p class=\"text-muted\">Aucun commentaire pour le moment.</p>
    ";
        } else {
            // line 35
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latestComments"]) || array_key_exists("latestComments", $context) ? $context["latestComments"] : (function () { throw new RuntimeError('Variable "latestComments" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 36
                yield "            <div class=\"border rounded p-3 mb-3\">
                <div class=\"fw-bold\">
                    ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true);
                yield "
                    <span class=\"text-muted fw-normal ms-2\">
                        ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 40), "d/m/Y H:i"), "html", null, true);
                yield "
                    </span>
                </div>

                <div class=\"mt-1\">
                    ";
                // line 45
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 45), "html", null, true));
                yield "
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "    ";
        }
        // line 50
        yield "
    ";
        // line 51
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "        <h4 class=\"mt-4\">Ajouter un commentaire</h4>

        ";
            // line 54
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["comment_form"]) || array_key_exists("comment_form", $context) ? $context["comment_form"] : (function () { throw new RuntimeError('Variable "comment_form" does not exist.', 54, $this->source); })()), 'form_start');
            yield "
            ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["comment_form"]) || array_key_exists("comment_form", $context) ? $context["comment_form"] : (function () { throw new RuntimeError('Variable "comment_form" does not exist.', 55, $this->source); })()), 'errors');
            yield "
            ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment_form"]) || array_key_exists("comment_form", $context) ? $context["comment_form"] : (function () { throw new RuntimeError('Variable "comment_form" does not exist.', 56, $this->source); })()), "content", [], "any", false, false, false, 56), 'row');
            yield "
            <button class=\"btn btn-secondary mt-2\">
                Envoyer
            </button>
        ";
            // line 60
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["comment_form"]) || array_key_exists("comment_form", $context) ? $context["comment_form"] : (function () { throw new RuntimeError('Variable "comment_form" does not exist.', 60, $this->source); })()), 'form_end');
            yield "
    ";
        } else {
            // line 62
            yield "        <p class=\"text-muted mt-4\">
            Vous devez être connecté pour poster un commentaire.
        </p>
        <a href=\"";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-secondary\">
            Se connecter
        </a>
    ";
        }
        // line 69
        yield "
    ";
        // line 71
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_list");
        yield "\" class=\"text-secondary text-decoration-none fw-bold mt-4 d-inline-block\">
        ← Retour à la liste des articles
    </a>

</article>
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
        return "article/show.html.twig";
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
        return array (  233 => 71,  230 => 69,  223 => 65,  218 => 62,  213 => 60,  206 => 56,  202 => 55,  198 => 54,  194 => 52,  192 => 51,  189 => 50,  186 => 49,  176 => 45,  168 => 40,  163 => 38,  159 => 36,  154 => 35,  150 => 33,  148 => 32,  140 => 27,  128 => 18,  124 => 17,  121 => 16,  115 => 12,  111 => 11,  105 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ article.title }} - OnlyBangers{% endblock %}

{% block body %}
<article class=\"mb-5\">

    <h1 class=\"mb-2\">{{ article.title }}</h1>

    <p class=\"text-muted\">
        Posté par <strong>{{ article.author.username }}</strong>
        le {{ article.createdAt|date('d/m/Y H:i') }}
    </p>

    {# 🔥 Image affichée entièrement #}
    <img 
        src=\"{{ asset('uploads/articles/' ~ article.image) }}\" 
        alt=\"{{ article.title }}\" 
        class=\"img-fluid mb-4\"
        style=\"max-height: 400px; object-fit: contain; width: 100%;\"
    >


    <hr>

    <div class=\"mb-4\">
        {{ article.content|nl2br }}
    </div>

    <h4 class=\"mt-5\">Commentaires</h4>

    {% if latestComments is empty %}
        <p class=\"text-muted\">Aucun commentaire pour le moment.</p>
    {% else %}
        {% for comment in latestComments %}
            <div class=\"border rounded p-3 mb-3\">
                <div class=\"fw-bold\">
                    {{ comment.author.username }}
                    <span class=\"text-muted fw-normal ms-2\">
                        {{ comment.createdAt|date('d/m/Y H:i') }}
                    </span>
                </div>

                <div class=\"mt-1\">
                    {{ comment.content|nl2br }}
                </div>
            </div>
        {% endfor %}
    {% endif %}

    {% if app.user %}
        <h4 class=\"mt-4\">Ajouter un commentaire</h4>

        {{ form_start(comment_form) }}
            {{ form_errors(comment_form) }}
            {{ form_row(comment_form.content) }}
            <button class=\"btn btn-secondary mt-2\">
                Envoyer
            </button>
        {{ form_end(comment_form) }}
    {% else %}
        <p class=\"text-muted mt-4\">
            Vous devez être connecté pour poster un commentaire.
        </p>
        <a href=\"{{ path('app_login') }}\" class=\"btn btn-secondary\">
            Se connecter
        </a>
    {% endif %}

    {# 🔥 Lien gris vers la liste des articles #}
    <a href=\"{{ path('article_list') }}\" class=\"text-secondary text-decoration-none fw-bold mt-4 d-inline-block\">
        ← Retour à la liste des articles
    </a>

</article>
{% endblock %}
", "article/show.html.twig", "/Users/mouad/Documents/OnlyBangers/onlybangers-symfony/templates/article/show.html.twig");
    }
}

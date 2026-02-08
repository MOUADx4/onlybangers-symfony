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
<div class=\"container py-5\">

    ";
        // line 10
        yield "    <article class=\"mx-auto section-bordered\" style=\"max-width: 1250px;\">

        ";
        // line 13
        yield "        <div class=\"d-flex justify-content-between align-items-center mb-2\">
            <h1 class=\"fw-bold m-0\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
        yield "</h1>

            <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_favorite", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\"
               class=\"fs-3 text-decoration-none\"
               style=\"cursor:pointer;\">
                ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19) && CoreExtension::inFilter((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "favorites", [], "any", false, false, false, 19)))) {
            // line 20
            yield "                    <span style=\"color:red;\">🖤</span>
                ";
        } else {
            // line 22
            yield "                    <span style=\"color:grey;\">♡</span>
                ";
        }
        // line 24
        yield "            </a>
        </div>

        ";
        // line 28
        yield "        <div class=\"mb-3\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "value" => $context["i"]]), "html", null, true);
            yield "\"
                   class=\"text-decoration-none fs-4\">
                    ";
            // line 32
            if (($context["i"] <= (isset($context["averageRating"]) || array_key_exists("averageRating", $context) ? $context["averageRating"] : (function () { throw new RuntimeError('Variable "averageRating" does not exist.', 32, $this->source); })()))) {
                // line 33
                yield "                        ⭐
                    ";
            } else {
                // line 35
                yield "                        ☆
                    ";
            }
            // line 37
            yield "                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "        </div>

        <p class=\"text-muted mb-1\">
            Posté par <strong>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 42, $this->source); })()), "author", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
        yield "</strong>
            le ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 43, $this->source); })()), "createdAt", [], "any", false, false, false, 43), "d/m/Y H:i"), "html", null, true);
        yield "
        </p>

        <hr class=\"my-4\">

        ";
        // line 49
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "            <div class=\"text-center mb-4\">
                <img 
                    src=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/articles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 52, $this->source); })()), "image", [], "any", false, false, false, 52))), "html", null, true);
            yield "\" 
                    alt=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 53, $this->source); })()), "title", [], "any", false, false, false, 53), "html", null, true);
            yield "\" 
                    class=\"img-fluid\"
                    style=\"max-height: 500px; object-fit: contain; width: 100%; border-radius: 12px;\">
            </div>
        ";
        }
        // line 58
        yield "
        ";
        // line 60
        yield "        <div class=\"mb-4 fs-5\" style=\"line-height: 1.7;\">
            ";
        // line 61
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 61, $this->source); })()), "content", [], "any", false, false, false, 61), "html", null, true));
        yield "
        </div>

    </article> ";
        // line 65
        yield "


    ";
        // line 71
        yield "
    <h3 class=\"fw-bold mt-5 mb-3\">Commentaires</h3>

    ";
        // line 74
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["latestComments"]) || array_key_exists("latestComments", $context) ? $context["latestComments"] : (function () { throw new RuntimeError('Variable "latestComments" does not exist.', 74, $this->source); })()))) {
            // line 75
            yield "        <p class=\"text-muted\">Aucun commentaire pour le moment.</p>
    ";
        } else {
            // line 77
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latestComments"]) || array_key_exists("latestComments", $context) ? $context["latestComments"] : (function () { throw new RuntimeError('Variable "latestComments" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 78
                yield "            <div class=\"p-3 mb-3 border rounded bg-dark text-white\">

                <div class=\"fw-bold\">
                    ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 81), "username", [], "any", false, false, false, 81), "html", null, true);
                yield "
                    <span class=\"text-muted ms-2\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 82), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                </div>

                <div class=\"mt-2\">
                    ";
                // line 86
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 86), "html", null, true));
                yield "
                </div>

                <div class=\"mt-2\">
                    <a href=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\" 
                       class=\"text-decoration-none text-light\">
                        👍 ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "likes", [], "any", false, false, false, 92)), "html", null, true);
                yield "
                    </a>

                    ";
                // line 95
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 96
                    yield "                        <a href=\"#\" class=\"ms-3 text-secondary\"
                           onclick=\"document.getElementById('reply-";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 97), "html", null, true);
                    yield "').style.display='block';\">
                            Répondre
                        </a>
                    ";
                }
                // line 101
                yield "                </div>

                ";
                // line 103
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 104
                    yield "                    <div id=\"reply-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 104), "html", null, true);
                    yield "\" style=\"display:none;\" class=\"mt-2\">
                        ";
                    // line 105
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["replyForms"]) || array_key_exists("replyForms", $context) ? $context["replyForms"] : (function () { throw new RuntimeError('Variable "replyForms" does not exist.', 105, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 105), [], "array", false, false, false, 105), 'form_start');
                    yield "
                        ";
                    // line 106
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["replyForms"]) || array_key_exists("replyForms", $context) ? $context["replyForms"] : (function () { throw new RuntimeError('Variable "replyForms" does not exist.', 106, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 106), [], "array", false, false, false, 106), "content", [], "any", false, false, false, 106), 'row');
                    yield "
                        <button class=\"btn btn-secondary btn-sm\">Envoyer</button>
                        ";
                    // line 108
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["replyForms"]) || array_key_exists("replyForms", $context) ? $context["replyForms"] : (function () { throw new RuntimeError('Variable "replyForms" does not exist.', 108, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 108), [], "array", false, false, false, 108), 'form_end');
                    yield "
                    </div>
                ";
                }
                // line 111
                yield "
                ";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "replies", [], "any", false, false, false, 112));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 113
                    yield "                    <div class=\"mt-3 ms-4 p-2 border-start\">
                        <strong>";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "author", [], "any", false, false, false, 114), "username", [], "any", false, false, false, 114), "html", null, true);
                    yield "</strong>
                        <span class=\"text-muted ms-2\">";
                    // line 115
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "createdAt", [], "any", false, false, false, 115), "d/m/Y H:i"), "html", null, true);
                    yield "</span>
                        <div>";
                    // line 116
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "content", [], "any", false, false, false, 116), "html", null, true));
                    yield "</div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reply'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "    ";
        }
        // line 123
        yield "
    ";
        // line 124
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "        <h4 class=\"mt-4\">Ajouter un commentaire</h4>

        ";
            // line 127
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["comment_form"]) || array_key_exists("comment_form", $context) ? $context["comment_form"] : (function () { throw new RuntimeError('Variable "comment_form" does not exist.', 127, $this->source); })()), 'form_start');
            yield "
            ";
            // line 128
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment_form"]) || array_key_exists("comment_form", $context) ? $context["comment_form"] : (function () { throw new RuntimeError('Variable "comment_form" does not exist.', 128, $this->source); })()), "content", [], "any", false, false, false, 128), 'row');
            yield "
            <button class=\"btn btn-secondary mt-2\">Envoyer</button>
        ";
            // line 130
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["comment_form"]) || array_key_exists("comment_form", $context) ? $context["comment_form"] : (function () { throw new RuntimeError('Variable "comment_form" does not exist.', 130, $this->source); })()), 'form_end');
            yield "
    ";
        } else {
            // line 132
            yield "        <p class=\"text-muted mt-4\">
            Vous devez être connecté pour poster un commentaire.
        </p>
        <a href=\"";
            // line 135
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-secondary\">
            Se connecter
        </a>
    ";
        }
        // line 139
        yield "
    <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_list");
        yield "\" 
       class=\"text-secondary text-decoration-none fw-bold mt-4 d-inline-block\">
        ← Retour à la liste des articles
    </a>

</div>

<style>
.section-bordered {
    border: 3px solid #000;
    border-radius: 12px;
    padding: 30px;
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
        return array (  385 => 140,  382 => 139,  375 => 135,  370 => 132,  365 => 130,  360 => 128,  356 => 127,  352 => 125,  350 => 124,  347 => 123,  344 => 122,  336 => 119,  327 => 116,  323 => 115,  319 => 114,  316 => 113,  312 => 112,  309 => 111,  303 => 108,  298 => 106,  294 => 105,  289 => 104,  287 => 103,  283 => 101,  276 => 97,  273 => 96,  271 => 95,  265 => 92,  260 => 90,  253 => 86,  246 => 82,  242 => 81,  237 => 78,  232 => 77,  228 => 75,  226 => 74,  221 => 71,  216 => 65,  210 => 61,  207 => 60,  204 => 58,  196 => 53,  192 => 52,  188 => 50,  185 => 49,  177 => 43,  173 => 42,  168 => 39,  161 => 37,  157 => 35,  153 => 33,  151 => 32,  145 => 30,  141 => 29,  138 => 28,  133 => 24,  129 => 22,  125 => 20,  123 => 19,  117 => 16,  112 => 14,  109 => 13,  105 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ article.title }}{% endblock %}

{% block body %}

<div class=\"container py-5\">

    {# SECTION AVEC BORDURE NOIRE (S'ARRÊTE AVANT LES COMMENTAIRES) #}
    <article class=\"mx-auto section-bordered\" style=\"max-width: 1250px;\">

        {# Titre + bouton favoris #}
        <div class=\"d-flex justify-content-between align-items-center mb-2\">
            <h1 class=\"fw-bold m-0\">{{ article.title }}</h1>

            <a href=\"{{ path('article_favorite', {id: article.id}) }}\"
               class=\"fs-3 text-decoration-none\"
               style=\"cursor:pointer;\">
                {% if app.user and article in app.user.favorites %}
                    <span style=\"color:red;\">🖤</span>
                {% else %}
                    <span style=\"color:grey;\">♡</span>
                {% endif %}
            </a>
        </div>

        {# Notation étoiles #}
        <div class=\"mb-3\">
            {% for i in 1..5 %}
                <a href=\"{{ path('article_rate', {id: article.id, value: i}) }}\"
                   class=\"text-decoration-none fs-4\">
                    {% if i <= averageRating %}
                        ⭐
                    {% else %}
                        ☆
                    {% endif %}
                </a>
            {% endfor %}
        </div>

        <p class=\"text-muted mb-1\">
            Posté par <strong>{{ article.author.username }}</strong>
            le {{ article.createdAt|date('d/m/Y H:i') }}
        </p>

        <hr class=\"my-4\">

        {# IMAGE FULL (PAS DE BORDURE) #}
        {% if article.image %}
            <div class=\"text-center mb-4\">
                <img 
                    src=\"{{ asset('uploads/articles/' ~ article.image) }}\" 
                    alt=\"{{ article.title }}\" 
                    class=\"img-fluid\"
                    style=\"max-height: 500px; object-fit: contain; width: 100%; border-radius: 12px;\">
            </div>
        {% endif %}

        {# Contenu #}
        <div class=\"mb-4 fs-5\" style=\"line-height: 1.7;\">
            {{ article.content|nl2br }}
        </div>

    </article> {# ← LA BORDURE S’ARRÊTE ICI #}



    {# ============================
       COMMENTAIRES (PAS DE BORDURE)
       ============================ #}

    <h3 class=\"fw-bold mt-5 mb-3\">Commentaires</h3>

    {% if latestComments is empty %}
        <p class=\"text-muted\">Aucun commentaire pour le moment.</p>
    {% else %}
        {% for comment in latestComments %}
            <div class=\"p-3 mb-3 border rounded bg-dark text-white\">

                <div class=\"fw-bold\">
                    {{ comment.author.username }}
                    <span class=\"text-muted ms-2\">{{ comment.createdAt|date('d/m/Y H:i') }}</span>
                </div>

                <div class=\"mt-2\">
                    {{ comment.content|nl2br }}
                </div>

                <div class=\"mt-2\">
                    <a href=\"{{ path('comment_like', {id: comment.id}) }}\" 
                       class=\"text-decoration-none text-light\">
                        👍 {{ comment.likes|length }}
                    </a>

                    {% if app.user %}
                        <a href=\"#\" class=\"ms-3 text-secondary\"
                           onclick=\"document.getElementById('reply-{{ comment.id }}').style.display='block';\">
                            Répondre
                        </a>
                    {% endif %}
                </div>

                {% if app.user %}
                    <div id=\"reply-{{ comment.id }}\" style=\"display:none;\" class=\"mt-2\">
                        {{ form_start(replyForms[comment.id]) }}
                        {{ form_row(replyForms[comment.id].content) }}
                        <button class=\"btn btn-secondary btn-sm\">Envoyer</button>
                        {{ form_end(replyForms[comment.id]) }}
                    </div>
                {% endif %}

                {% for reply in comment.replies %}
                    <div class=\"mt-3 ms-4 p-2 border-start\">
                        <strong>{{ reply.author.username }}</strong>
                        <span class=\"text-muted ms-2\">{{ reply.createdAt|date('d/m/Y H:i') }}</span>
                        <div>{{ reply.content|nl2br }}</div>
                    </div>
                {% endfor %}

            </div>
        {% endfor %}
    {% endif %}

    {% if app.user %}
        <h4 class=\"mt-4\">Ajouter un commentaire</h4>

        {{ form_start(comment_form) }}
            {{ form_row(comment_form.content) }}
            <button class=\"btn btn-secondary mt-2\">Envoyer</button>
        {{ form_end(comment_form) }}
    {% else %}
        <p class=\"text-muted mt-4\">
            Vous devez être connecté pour poster un commentaire.
        </p>
        <a href=\"{{ path('app_login') }}\" class=\"btn btn-secondary\">
            Se connecter
        </a>
    {% endif %}

    <a href=\"{{ path('article_list') }}\" 
       class=\"text-secondary text-decoration-none fw-bold mt-4 d-inline-block\">
        ← Retour à la liste des articles
    </a>

</div>

<style>
.section-bordered {
    border: 3px solid #000;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
}
</style>

{% endblock %}
", "article/show.html.twig", "/Users/mouad/Documents/OnlyBangers/onlybangers-symfony/templates/article/show.html.twig");
    }
}
